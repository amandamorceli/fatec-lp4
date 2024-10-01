<?php
declare(strict_types=1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-3">
    <h2>Exercício 3 </h2>
    <form action="" method="POST">
        <?php for ($i = 0; $i <= 4; $i++): ?>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="codigo<?= $i ?>" class="form-label">Código: </label>
                    <input type="text" class="form-control" name="codigos[]" id="codigo<?= $i ?>" placeholder="Código<?= $i + 1 ?>" required>
                </div>
                <div class="col-4">
                    <label for="nome<?= $i ?>" class="form-label">Nome: </label>
                    <input type="text" class="form-control" name="nomes[]" id="nome<?= $i ?>" placeholder="Nome<?= $i + 1 ?>" required>
                </div>
                <div class="col-2">
                    <label for="preco<?= $i ?>" class="form-label">Preço: </label>
                    <input type="number" step="0.01" class="form-control" name="precos[]" id="preco<?= $i ?>" placeholder="Preço<?= $i + 1 ?>" required>
                </div>
            </div>
        <?php endfor; ?>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>
<?php 

function OrganizarProdutos(array $codigos, array $nomes, array $precos): array 
{
    $produtos = [];

    for ($i = 0; $i < count($codigos); $i++) 
    {
        $codigo = $codigos[$i];
        $nome = $nomes[$i];
        $preco = (float)$precos[$i];

        if ($preco > 100.00) {
            $preco *= 0.9; 
        }

        $produtos[$codigo] = [
            'nome' => $nome,
            'preco' => $preco
        ];
    }
    return $produtos;
}

function OrdenarProdutosPorNome(array $produtos): array
{
    uasort($produtos, function($a, $b) 
    {
        return strcmp($a['nome'], $b['nome']);
    });

    return $produtos;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $codigos = $_POST['codigos'];
    $nomes = $_POST['nomes'];
    $precos = $_POST['precos'];

    $produtosOrganizados = OrganizarProdutos($codigos, $nomes, $precos);

    $produtosOrgganizados = OrdenarProdutosPorNome($produtosOrganizados);

    echo "<p>Lista de Produtos Organizados:</p>";
    foreach ($produtosOrdenados as $codigo => $dados) 
    {
        echo nl2br("<p>Código: {$codigo} \tNome: {$dados['nome']} \tPreço: R$ " . number_format($dados['preco'], 2, ',', '.') . "</p>\n");
    }
    
}

?>