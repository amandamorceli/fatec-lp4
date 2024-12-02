<?php

    declare(strict_types=1);

    require_once "../config/bancodedados.php";

    function buscarEventos() : array{
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM evento");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscarEventoPorId(int $id): ?array {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM evento WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }    

    function criarEvento(string $nome, string $data, string $hora, string $local, string $descricao): bool {
        global $pdo;
    
        $stament = $pdo->prepare("INSERT INTO evento (nome, data, hora, local, descricao) 
                                    VALUES (?, ?, ?, ?, ?)");
        return $stament->execute([$nome, $data, $hora, $local, $descricao]);
    }

    function excluirEvento(int $id):bool{
        global $pdo;
        $stament = $pdo->prepare("DELETE FROM evento WHERE id = ?");
        return $stament->execute([$id]);
    }

    function alterarEvento(int $id, string $nome, string $data, string $hora, string $local, string $descricao): bool {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE evento 
                                SET nome = ?, data = ?, hora = ?, local = ?, descricao = ? 
                                WHERE id = ?");
        return $stmt->execute([$nome, $data, $hora, $local, $descricao, $id]);
    }
    


    