<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('page_home'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('page_home', 'page_HOMECtrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('page_orders', 'page_ORDERSCtrl');

//Utils::addRoute('login', 'LoginCtrl');
//Utils::addRoute('logout', 'LoginCtrl');