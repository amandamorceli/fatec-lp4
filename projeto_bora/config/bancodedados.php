<?php

    $host = "localhost";
    $db = "projeto_bora";
    $usuario = "root";
    $senha = "senha";
    $port = "3306";

    try{
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", 
                        $usuario, $senha);
    } catch (Exception $e){
        echo "Erro: ".$e->getMessage();
    }