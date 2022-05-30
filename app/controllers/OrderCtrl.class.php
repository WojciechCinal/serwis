<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\OrderForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class OrderCtrl {

    private $form;

    public function __construct() {

        $this->form = new OrderForm();
    }

    public function action_ordersView() {
        App::getSmarty()->assign('form', $this->form);
        App::getMessages();
        $order_list = App::getDB()->select("zamowienie", "*");
        App::getSmarty()->assign("order_list", $order_list);
        App::getSmarty()->display("page_ORDERS.tpl");
    }

}
