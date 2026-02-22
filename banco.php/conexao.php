<?php

class Conexao {
    public static function conectar(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=sistema_estoque", "root", "");

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Foi";

            return $pdo;
        } catch (PDOException $e) {
            echo "Falha " . $e->getMessage();
        }
    }
}
//Conexao::conectar();