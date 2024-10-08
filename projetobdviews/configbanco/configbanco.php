<?php

    $host = 'localhost';
    $db = 'banco_php';
    $usuario = 'root';
    $senha = '';
    $port = "3306";

    try 
    {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha); 
        //string de conexao, usuario do bd, senha do bd
        
        if ($pdo) 
        {
            echo "<p class='text-success'>Conexão realizada com sucesso!</p>";
        } else 
        {
            echo "<p class='text-danger'>Erro ao conectar o banco de dados!<\p>";
        }
                
    } catch (Excepion $e) {
        echo "Erro!".$e->getMessage();
    }

    // $c = new Classe()
    // c->acao()

?>