<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\system\Request;
use coding\app\system\Router;

class Controller{
    public $router;
    public function view($viewname,$params=[]){
        AppSystem::$appsystem->router->view($viewname,$params);
    }

}

?>