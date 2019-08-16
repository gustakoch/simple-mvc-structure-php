<?php

namespace App\Controllers;

use Resources\Controller\Action;
use Resources\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {
    public function index() {
        $produto = Container::getModel('Info');
        $this->view->dados = $produto->getInfo();
        $this->render('index', 'Layout');
    }
}
