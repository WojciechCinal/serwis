<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class page_HOMECtrl {
    
    public function action_page_home() {       
        App::getSmarty()->display("page_HOME.tpl");
        
    }
    
}
