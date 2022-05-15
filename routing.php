<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('page_home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('page_home', 'pages_Ctrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('page_orders', 'pages_Ctrl');
Utils::addRoute('page_offer', 'pages_Ctrl');
Utils::addRoute('loginView', 'pages_Ctrl');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');