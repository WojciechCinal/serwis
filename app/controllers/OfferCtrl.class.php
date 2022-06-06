<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\OfferForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Message;

class OfferCtrl {

    public function action_offerView() {
        $this->action_offerDelete();
        App::getSmarty()->assign('form', $this->form);
        App::getMessages();
        $offer_list = App::getDB()->select("naprawa", "*");
        App::getSmarty()->assign("offer_list", $offer_list);
        App::getSmarty()->display("page_OFFER.tpl");
    }

    public function action_offerAddView() {
        App::getSmarty()->assign('form', $this->form);
        App::getMessages();
        App::getSmarty()->display("AddOfferView.tpl");
    }

    private $form;

    public function __construct() {

        $this->form = new OfferForm();
    }

    public function getParams() {

        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->cena = ParamUtils::getFromRequest('cena');
        $this->form->kategoria = ParamUtils::getFromRequest('kategoria');
    }

    public function validate() {

        if (!(isset($this->form->nazwa) && isset($this->form->cena))) {

            return false;
        }

        if (!App::getMessages()->isError()) {

            if ($this->form->nazwa == "") {
                App::getMessages()->addMessage(new Message("Nie podano nazwy naprawy.", Message::ERROR));
            }
            if ($this->form->cena == "") {
                App::getMessages()->addMessage(new Message("Nie podano ceny.", Message::ERROR));
            }
        }
        if (!App::getMessages()->isError()) {

            if (!is_numeric($this->form->cena)) {
                App::getMessages()->addMessage(new Message("Kwota nie jest liczbą.", Message::ERROR));
            }

            return !App::getMessages()->isError();
        }
    }

    public function action_offerAdd() {
        $this->getParams();

        if ($this->validate()) {
            switch ($this->form->kategoria) {
                case 'LB':
                    $this->form->kategoria = "Lakierniczo - blacharskie";
                    try {
                        App::getDB()->insert("naprawa", [
                            "Nazwa_naprawy" => $this->form->nazwa,
                            "Cena" => $this->form->cena,
                            "Kategoria" => $this->form->kategoria
                        ]);
                    } catch (\PDOException $ex) {
                        App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                    }
                    break;
                case 'UP':
                    $this->form->kategoria = "Usługa podstawowa";
                    try {
                        App::getDB()->insert("naprawa", [
                            "Nazwa_naprawy" => $this->form->nazwa,
                            "Cena" => $this->form->cena,
                            "Kategoria" => $this->form->kategoria
                        ]);
                    } catch (\PDOException $ex) {
                        App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                    }
                    break;
                case 'UN':
                    $this->form->kategoria = "Układ napędowy";
                    try {
                        App::getDB()->insert("naprawa", [
                            "Nazwa_naprawy" => $this->form->nazwa,
                            "Cena" => $this->form->cena,
                            "Kategoria" => $this->form->kategoria
                        ]);
                    } catch (\PDOException $ex) {
                        App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                    }
                    break;
                case 'US':
                    $this->form->kategoria = "Układ spalinowy";
                    try {
                        App::getDB()->insert("naprawa", [
                            "Nazwa_naprawy" => $this->form->nazwa,
                            "Cena" => $this->form->cena,
                            "Kategoria" => $this->form->kategoria
                        ]);
                    } catch (\PDOException $ex) {
                        App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                    }
                    break;
                case 'W':
                    $this->form->kategoria = "Wulkanizacja";
                    try {
                        App::getDB()->insert("naprawa", [
                            "Nazwa_naprawy" => $this->form->nazwa,
                            "Cena" => $this->form->cena,
                            "Kategoria" => $this->form->kategoria
                        ]);
                    } catch (\PDOException $ex) {
                        App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                    }
                    break;
            }

            $this->action_offerView();
        } else {

            $this->action_offerAddView();
        }
    }

    public function action_offerDelete() {
        if (RoleUtils::inRole("admin")) {
            if (isset($_GET['delid'])) {

                try {
                    App::getDB()->delete("naprawa", [
                        "ID_Naprawy" => htmlspecialchars($_GET['delid'])
                    ]);
                    App::getMessages()->addMessage(new Message("Pomyślnie usunięto rekord z bazy.", Message::INFO));
                } catch (\PDOException $ex) {
                    App::getMessages()->addMessage(new Message("Błąd bazy dancych" . $ex->getMessage(), Message::ERROR));
                }
            }
        } else {
            App::getMessages()->addMessage(new Message("Usuwać rekordy może jedynie administrator.", Message::ERROR));
        }
    }

}
