<?php

namespace App\Models;

use Resources\Model\Model;

class Produto extends Model {
    public function getProdutos() {
        $sql = " 
            SELECT id, descricao, preco FROM tb_produtos";
            
        return $this->database->query($sql)->fetchAll();
    }
}
