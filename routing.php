<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homeView'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('homeView', 'HomeCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('ordersView', 'OrderCtrl', ["admin","user"]);
Utils::addRoute('offerView', 'OfferCtrl');
Utils::addRoute('loginView', 'LoginCtrl');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('offerAddView', 'OfferCtrl',["admin"]);
Utils::addRoute('offerAdd', 'OfferCtrl',["admin"]);

Utils::addRoute('orderAddView', 'OrderCtrl',["admin","user"]);
Utils::addRoute('orderAdd', 'OrderCtrl',["admin","user"]);