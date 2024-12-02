<?php

    declare(strict_types=1);

    require_once "../config/bancodedados.php";

    function buscarVendas() : array{
        global $pdo;
        $stmt = $pdo->query("SELECT v.*, i.nome AS ingresso_nome 
                                FROM venda v 
                                INNER JOIN ingresso i ON i.id = v.ingresso_id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscarVendaPorId(int $id): ?array {
        global $pdo;
        $stmt = $pdo->prepare("SELECT v.*, i.nome as nome_ingresso FROM venda v 
                                INNER JOIN ingresso i ON i.id = v.ingresso_id
                                WHERE v.id = ?");
        $stmt->execute([$id]);
        $venda = $stmt->fetch(PDO::FETCH_ASSOC);
        return $venda ? $venda : null;
    }

    function buscarVendaPorData(string $data): ?array {
        global $pdo;
        $stmt = $pdo->prepare("SELECT v.*, i.nome as nome_ingresso 
                       FROM venda v 
                       INNER JOIN ingresso i ON i.id = v.ingresso_id
                       WHERE DATE(v.data_venda) = ?");

        $stmt->execute([$data]);
        $venda = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $venda ? $venda : null;
    }  


    function criarVenda(string $ingresso_id, string $quantidade, float $total): bool {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO venda (ingresso_id, quantidade, total) VALUES (?, ?, ?)");
        return $stmt->execute([$ingresso_id, $quantidade, $total]);
    }

    function excluirVenda(int $id) : bool {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM venda WHERE id = ?");
        return $stmt->execute([$id]);
    }
