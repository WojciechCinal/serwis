<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\OrderForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Message;
use core\Validator;

class OrderCtrl {

    private $form;

    public function __construct() {

        $this->form = new OrderForm();
    }

    public function action_ordersView() {
        $this->action_orderDelete();
        App::getSmarty()->assign('form', $this->form);
        App::getMessages();
        $this->showOrders();
        App::getSmarty()->display("page_ORDERS.tpl");
    }

    public function action_orderAddView() {
        App::getSmarty()->assign('form', $this->form);
        App::getMessages();
        $repair_list = App::getDB()->select("naprawa", "*");
        App::getSmarty()->assign("repair_list", $repair_list);
        App::getSmarty()->display("AddOrderView.tpl");
    }

    public function Validate() {
        if (RoleUtils::inRole("admin")) {
            $this->form->id_u = 1;
        }
        if (RoleUtils::inRole("user")) {
            $this->form->id_u = 2;
        }
        $v = new Validator();
        $this->form->id_n = ParamUtils::getFromRequest('naprawa');
        $this->form->marka = $v->validateFromPost('marka', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj markę pojazdu',
            'min_length' => 2,
            'max_length' => 30,
            'validator_message' => 'Nazwa marki powinna mieć od 2 do 30 znaków'
        ]);
        $this->form->model = $v->validateFromPost('model', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj model pojazdu',
            'min_length' => 1,
            'max_length' => 30,
            'validator_message' => 'Nazwa modelu powinna mieć od 1 do 30 znaków'
        ]);
        $this->form->nrr = $v->validateFromPost('nrr', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj numer rejestracyjny pojazdu',
            'min_length' => 4,
            'max_length' => 10,
            'validator_message' => 'Numer rejestracyjny powinien mieć od 4 do 10 znaków'
        ]);
        $this->form->data = $v->validateFromPost('data', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź datę złożenia zamówienia",
            'date_format' => 'Y-m-d',
            'validator_message' => "Niepoprawny format daty. Przykład: 2020-04-15"
        ]);
        if ($v->isLastOK()) {
            $this->form->data = $this->form->data->format('Y-m-d');
        }
        return !App::getMessages()->isError();
    }

    public function action_orderAdd() {
        if ($this->Validate()) {
            try {
                App::getDB()->insert("zamowienie", [
                    "Data" => $this->form->data,
                    "Marka" => $this->form->marka,
                    "Model" => $this->form->model,
                    "Nr_rejestracyjny" => $this->form->nrr,
                    "ID_User" => $this->form->id_u
                ]);
            } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
            }
            if (!App::getMessages()->isError()) {
                $this->selectNaprawa();
            } else {
                App::getMessages()->addMessage(new Message("Nie udało się dodać rekordu do tabeli zamówienia", Message::ERROR));
            }
            if (!App::getMessages()->isError()) {
                $this->lastIDZamowienia();
            } else {
                App::getMessages()->addMessage(new Message("Nie udało się znależć ostatniego rekordu w tabeli zamówienia", Message::ERROR));
            }
            if (!App::getMessages()->isError()) {
                $this->insertPOM_ZAM();
            } else {
                App::getMessages()->addMessage(new Message("Nie udało się znależć ostatniego rekordu w tabeli zamówienia", Message::ERROR));
            }
            if (!App::getMessages()->isError()) {
                App::getMessages()->addMessage(new Message("Pomyślnie dodano zamówienie", Message::INFO));

                $this->action_ordersView();
            }
        } else {
            $this->action_orderAddView();
        }
    }

    public function selectNaprawa() {
        try {
            $this->form->cena = App::getDB()->select("naprawa","Cena", [
                "ID_Naprawy" => $this->form->id_n
                    ]);

        } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
        }
    }

    public function lastIDZamowienia() {
        try {
            $this->form->id_z = App::getDB()->max("zamowienie", "ID_Zamowienia");
        } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
        }
    }

    public function insertPOM_ZAM() {
        try {
            $this->form->id_z = App::getDB()->insert("pom_zamowienia", [
                "ID_Naprawy" => $this->form->id_n,
                "ID_Zamowienia" => $this->form->id_z,
                "Cena" => $this->form->cena
            ]);
        } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
        }
    }

    public function showOrders() {
        try {
            $order_list = App::getDB()->select("pom_zamowienia", [
                "[>]zamowienie" => ["ID_Zamowienia" => "ID_Zamowienia"],
                "[>]naprawa" => ["ID_Naprawy" => "ID_Naprawy"]
                    ], [
                "zamowienie.ID_Zamowienia",
                "zamowienie.Data",
                "zamowienie.Marka",
                "zamowienie.Model",
                "zamowienie.Nr_rejestracyjny",
                "naprawa.Nazwa_naprawy",
                //"user.login",
                "pom_zamowienia.Cena",
                "zamowienie.ID_User",
                    //"naprawa.Nazwa_naprawy"
            ]);
            $order_list = $this->loadUserNames($order_list);
            App::getSmarty()->assign("order_list", $order_list);
        } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
        }
    }

    public function loadUserNames($order_list) {
        for ($i = 0; $i < count($order_list); $i++) {
            try {
                $user_name = App::getDB()->select("user", [
                    "login"
                        ], [
                    "ID_User[=]" => $order_list[$i]["ID_User"]
                ]);
                $order_list[$i]["login"] = $user_name[0]["login"];
            } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
            }
        } return $order_list;
    }

    public function action_orderDelete() {

        if (isset($_GET['deleteid'])) {
            if (RoleUtils::inRole("admin")) {
                try {
                    App::getDB()->delete("zamowienie", [
                        "ID_Zamowienia" => htmlspecialchars($_GET['deleteid'])
                    ]);
                    App::getMessages()->addMessage(new Message("Pomyślnie usunięto rekord z bazy", Message::ERROR));
                } catch (\PDOException $ex) {
                    App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                }
            }
        }App::getMessages()->addMessage(new Message("Usuwanie zamówień z listy wymaga uprawnień administratora.", Message::ERROR));
    }

}
