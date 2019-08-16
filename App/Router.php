<?php

namespace App;

use Resources\Init\Bootstrap;

class Router extends Bootstrap {
    protected function initRoutes() {
        $routes['home'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
        $routes['about'] = array('route' => '/about', 'controller' => 'IndexController', 'action' => 'about');

        $this->setRoutes($routes);
    }
}
