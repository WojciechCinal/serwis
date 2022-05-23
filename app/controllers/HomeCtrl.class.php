<?php

namespace app\controllers;

use core\App;
use app\transfer\User;
use app\forms\LoginForm;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class HomeCtrl {

    public function action_homeView() {
        App::getSmarty()->display("page_HOME.tpl");
    }


}
