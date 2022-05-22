<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class LoginCtrl {

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
                Utils::addErrorMessage('Nie podano loginu');
            }
            if ($this->form->pass == "") {
                Utils::addErrorMessage('Nie podano hasła');
            }
        }

        if (!App::getMessages()->isError()) {
            if (App::getDB()->has("user", [
                        "AND" => [
                            "login" => $this->form->login],
                        "password" => $this->form->pass,])) {

                $user = new User($this->form->login, $this->form->login);

                RoleUtils::addRole($user->role);
                Utils::addInfoMessage('Zalogowano jako: ' . $user->role);
            } else {
                Utils::addErrorMessage('Niepoprawny login lub hasło');
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

        Utils::addInfoMessage('Poprawnie wylogowano z systemu');

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
