<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class page_ORDERSCtrl {
    
    public function action_page_orders() {       
        App::getSmarty()->display("page_ORDERS.tpl");
        
    }
    
}
