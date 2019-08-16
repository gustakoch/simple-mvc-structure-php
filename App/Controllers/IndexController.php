<?php

namespace App\Controllers;

use Resources\Controller\Action;
use Resources\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {
    public function index() {
        $produto = Container::getModel('Produto');
        $this->view->dados = $produto->getProdutos();
        $this->render('index', 'Layout');
    }
  
    public function about() {
        $info = Container::getModel('Info');
        $this->view->info = $info->getInfo();
        $this->render('about', 'Layout');
    }
  
    public function receitas() {
        $this->render('receitas', 'Layout');
    }
}
