<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class OrderCtrl {
    
    public function action_ordersView() {
        App::getSmarty()->display("page_ORDERS.tpl");
    }

}
