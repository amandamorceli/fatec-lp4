<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha){
    global $pdo;
    
    //Inserção do usuário adm
    $stament = 
        $pdo->query("SELECT * FROM cliente WHERE email = 'adm@adm.com'");
    $cliente = $stament->fetchAll(PDO::FETCH_ASSOC);
    //verifica se o usuário não existe, se não existir, vamos criar
    if (!$cliente){
        novoUsuario('Administrador', 'adm@adm.com', 'adm', 'adm');
    }
    //Verificar email e senha do usuário
    $stament = 
        $pdo->prepare("SELECT * FROM cliente WHERE email = ?");
        //validar os valores com EXPRESSÕES REGULARES - validar se é um email
    $stament->execute([$email]);
    $cliente = $stament->fetch(PDO::FETCH_ASSOC);
    if($cliente && password_verify($senha, $cliente['senha'])){
        return $cliente;
    } else {
        return null;
    }
}

function novoUsuario(string $nome, string $email, string $senha, string $nivel):bool{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stament = $pdo->prepare("INSERT INTO cliente (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $senha_criptografada, $nivel]);
}

function excluirUsuario(int $id):bool{
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM cliente WHERE id = ?");
    return $stament->execute([$id]);
}

function todosUsuarios(): array{
    global $pdo;
    $stament = $pdo->query(" SELECT * FROM cliente WHERE nivel <> 'adm' ");
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornaUsuarioPorId(int $id): ?array{
    global $pdo;
    $stament = $pdo->prepare("SELECT * FROM cliente WHERE id = ? AND nivel <> 'adm'");
    $stament->execute([$id]);
    $cliente = $stament->fetch(PDO::FETCH_ASSOC);
    return $cliente ? $cliente : null;
}

function alterarCliente(int $id, string $nome, string $email, string $senha): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE cliente 
                            SET nome = ?, email = ?, senha = ?
                            WHERE id = ?");
    return $stmt->execute([$nome, $nome, $email, $senha, $id]);
}