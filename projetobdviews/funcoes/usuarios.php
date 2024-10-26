<?php

declare(strict_types=1);
require_once('../configbanco/configbanco.php');
function login(string $emai, string $senha)
{
    global $pdo; //pdo é uma variavel é um obj


    //IRSERÇAO DO ADM
    $stament = $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
    $usuario = $stament->fetchAll(PDO::FETCH_ASSOC);
    //verifica se usuario existe - se não, cria.
    if(!$usuario)
    {
        $pdo->beginTransaction();
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $stament = $pdo->prepare('INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)');
        $stament->execute(['Administrador', 'adm@adm.com', $senha, 'adm']);
        $pdo->commit();
    }

    // VERIFICAÇÃO DE EMAIL E SENHA
    $stament = $pdo->prepare("SELECT * FROM usuario WHERE email = ?"); // ? sql injection 

    //validar os valores com expressões regulares - validar se é email
    $stament->execute([$emai]); 
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    if($usuario && password_verify($senha, $usuario['senha']))
    {
        return $usuario;
    } else 
    {
        return null;
    }
}

function novoUsuario(string $nome, string $email, string $senha, string $nivel): bool{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stament = $pdo->prepare("INSERT INTO usuario(nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $senha_criptografada, $nivel]);
}

function excluirUsuario(int $id):bool{
    global $pdo;
    $stament = $pdo->query("SELECT * FROM usuario WHERE nivel <> ")
}
 ?>