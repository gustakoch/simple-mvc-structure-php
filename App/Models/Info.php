<?php

namespace App\Models;

use GK\Model\Model;

class Info extends Model {

    public function getInfo() {
        $sql = " 
            SELECT titulo, descricao FROM tb_info";
            
        return $this->database->query($sql)->fetchAll();
    }

}
