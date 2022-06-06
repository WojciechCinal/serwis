<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\Message;

class LoginCtrl {

    public function action_loginView() {
        App::getSmarty()->display("LoginView.tpl");
    }

    private $form;
    private $user;

    public function __construct() {

        $this->form = new LoginForm();
    }

    public function getParams() {

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate() {

        if (!(isset($this->form->login) && isset($this->form->pass))) {

            return false;
        }

        if (!App::getMessages()->isError()) {

            if ($this->form->login == "") {
                App::getMessages()->addMessage(new Message("Nie podano loginu", Message::ERROR));
            }
            if ($this->form->pass == "") {
                App::getMessages()->addMessage(new Message("Nie podano hasła", Message::ERROR));             
            }
        }

        if (!App::getMessages()->isError()) {
            if (App::getDB()->has("user", [
                        "AND" => [
                            "login" => $this->form->login],
                        "password" => $this->form->pass,])) {

                $user = new User($this->form->login, $this->form->login);

                RoleUtils::addRole($user->role);
                App::getMessages()->addMessage(new Message("Zalogowano jako: ". $user->role, \core\Message::INFO));
            } else {
                App::getMessages()->addMessage(new Message("Niepoprawny login lub hasło!", \core\Message::ERROR)); 
            }
        }


        return !App::getMessages()->isError();
    }

    public function action_login() {

        $this->getParams();

        if ($this->validate()) {
            $this->generateViewLoginSuccess();
        } else {

            $this->generateViewLogin();
        }
    }

    public function action_logout() {

        session_destroy();
        
        App::getMessages()->addMessage(new Message("Poprawnie wylogowano z systemu.", Message::INFO));

        $this->generateViewLogin();
    }

    public function generateViewLogin() {

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
        App::getMessages();
    }

    public function generateViewLoginSuccess() {
        App::getSmarty()->assign('user', $this->form->login);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('page_HOME.tpl');
        App::getMessages();
    }

}
