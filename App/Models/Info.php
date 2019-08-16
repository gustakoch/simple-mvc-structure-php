<?php

namespace App\Models;

use Resources\Model\Model;

class Info extends Model {
    public function getInfo() {
        $sql = " 
            SELECT titulo, descricao FROM tb_info";
            
        return $this->database->query($sql)->fetchAll();
    }
}
