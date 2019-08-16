<?php

namespace App\Models;

use Resources\Model\Model;

class Info extends Model {
    public function getInfo() {
        echo "This is rended by the content in the standard layout";
    }
}
