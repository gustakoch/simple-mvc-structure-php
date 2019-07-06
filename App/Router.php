<?php

namespace App;

use GK\Init\Bootstrap;

class Router extends Bootstrap {

    protected function initRoutes() {
        $routes['home'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
        $routes['about'] = array('route' => '/about', 'controller' => 'IndexController', 'action' => 'about');
        $routes['receitas'] = array('route' => '/receitas', 'controller' => 'IndexController', 'action' => 'receitas');

        $this->setRoutes($routes);
    }
    
}
