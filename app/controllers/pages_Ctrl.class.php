<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\transfer\User;
use app\forms\LoginForm;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class pages_Ctrl {

    public function action_page_home() {
        App::getSmarty()->display("page_HOME.tpl");
    }

    public function action_page_orders() {
        App::getSmarty()->display("page_ORDERS.tpl");
    }

    public function action_page_offer() {
        App::getSmarty()->display("page_OFFER.tpl");
    }

    public function action_loginView() {
        App::getSmarty()->display("LoginView.tpl");
    }

}
