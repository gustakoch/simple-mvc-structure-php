<?php

namespace App;

class ConnectionDatabase {
    public static function getDatabase() {
        try {
            $conn = new \PDO("mysql:host=localhost;dbname=NOME_BANCO_DE_DADOS;charset=utf8", "USUARIO_DO_BANCO", "SENHA_DO_BANCO");

            return $conn;
        } catch (\PDOException $error) {
            echo "Connection error database! <br><br>" . $error->getMessage();
        }
    }
}
