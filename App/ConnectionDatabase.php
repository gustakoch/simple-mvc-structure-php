<?php

namespace App;

class ConnectionDatabase {
    public static function getDatabase() {
        try {
            $conn = new \PDO("mysql:host=localhost;dbname=nome_banco_de_dados;charset=utf8", "usuario_banco_de_dados", "senha_banco_de_dados");

            return $conn;
        } catch (\PDOException $error) {
            echo "Connection error database! <br><br>" . $error->getMessage();
        }
    }
}
