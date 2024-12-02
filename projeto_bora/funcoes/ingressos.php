<?php

    declare(strict_types=1);

    require_once '../config/bancodedados.php';

    function gerarDadosGrafico(): array {
        global $pdo;
        $stmt = $pdo->query("SELECT 
                                i.id,
                                i.nome,
                                SUM(v.quantidade) as estoque 
                            FROM venda v
                            INNER JOIN ingresso i ON i.id = v.ingresso_id
                            GROUP BY i.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscarProdutos(): array {
        global $pdo;
        $stmt = $pdo->query("SELECT i.*, e.nome as nome_evento
                                FROM ingresso i
                                INNER JOIN evento e ON e.id = i.evento_id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscarProdutoPorId(int $id): ?array {
        global $pdo;
        $stmt = $pdo->prepare("SELECT i.*, e.nome as nome_evento FROM ingresso i 
                                INNER JOIN evento e ON e.id = i.evento_id
                                WHERE i.id = ?");
        $stmt->execute([$id]);
        $ingresso = $stmt->fetch(PDO::FETCH_ASSOC);
        return $ingresso ? $ingresso : null;
    }

    function criarProduto(string $nome, string $descricao, float $preco, 
                                int $estoque, int $evento_id): bool {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO ingresso (nome, descricao, preco,
                    estoque, evento_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nome, $descricao, $preco, 
                            $estoque, $evento_id]);
    }

    function alterarProduto(int $id, string $nome, string $descricao, float $preco,
                    int $estoque, int $evento_id): bool {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE ingresso SET nome = ?, descricao = ?,
                preco = ?, estoque = ?, evento_id = ? 
                WHERE id = ?");
        return $stmt->execute([$nome, $descricao, $preco, 
                            $estoque, $evento_id, $id]);
    }

    function excluirProduto(int $id) : bool {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM ingresso WHERE id = ?");
        return $stmt->execute([$id]);
    }




