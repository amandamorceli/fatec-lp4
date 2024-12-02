<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/vendas.php';      
?>

<div class="container mt-5">
    <h2>Gerenciamento de Vendas</h2>
    <a href="nova_vendas.php" class="btn btn-success mb-3">Nova Venda</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ingresso</th>
                <th>Quantidade</th>
                <th>Total da Venda</th>
                <th>Data e Hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php

            $vendas = buscarVendas();
            foreach ($vendas as $v):
        ?>
            <tr>
                <td><?= $v['id']?></td>
                <td><?= $v['ingresso_nome']?></td>
                <td><?= $v['quantidade']?></td>
                <td><?= $v['total']?></td>
                <th> <?= date('d/m/Y H:i:s', strtotime($v['data_venda'])) ?></th>
                <td>
                    <a href="excluir_vendas.php?id=<?= $v['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
