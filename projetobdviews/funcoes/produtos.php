<?php

declare(strict_types=1);
require_once "../configbanco/configbanco.php";

function buscarProdutos(): ?array{
    global $pdo;
    $stament = $pdo->query("SELECT p. *, c.nome as nome_categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id");
    return $stament->fetchALL(PDO::FECTH_ASSOC);
}

function buscarProdutosPorId(int $id): ?array{
    global $pdo;
    $stament = $pdo->query("SELECT p. *, c.nome as nome_categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id WHERE p.id = ?");
    $stament = $pdo-execute([$id]);
    $produto = $stament->fetch(PDO::FETCH_ASSOC);
    return $produto ? $produto : null;

}

function criarProduto(string $nome, string $descricao, float $preco, int $estoque_minimo, int $categoria_id): ?arry {
    global $pdo;
    $stament = $pdo->query();
    $stament->execute([id]);
    $produto = $stament->fecth(PDO::FECTCH_ASSOC);
}

function criarProdutoProduto(string $nome, string $descricao, float $preco, int $estoque_minimo, int $categoria_id): bool{
    global $pdo;
    $stament = $pdo->prepare("INSERT INTO produto (nome, descricao, preco, estoque_minimo, categoria_id) VALUES (?, ?, ?, ?, ?)");
    return $stament->execute([$nome, $descricao, $preco, $estoque_minimo, $categoria_id]);
}

function alterarProduto(int $id, string $nome, string $descricao, float $preco, int $estoque_minimo, int $categoria_id): bool{
    global $pdo;
    $stament = $pdo->prepare("UPDATE produto SET nome = ?, decricao = ?, preco = ?, estoque_minomo = ?, categoria_id = ? WHERE id = ?");
    return $stament->execute([$nome, $descricao, $preco, $estoque_minimo, $categoria_id, $id]);
}

function excluirProduto(int $id): bool {
    global $pdo;
    $stament=$pdo->prepare("DELETE FROM produto WHERE id = ?");
    return $stament->execute([$id]);
}

?>