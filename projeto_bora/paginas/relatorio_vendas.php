<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/vendas.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        try {
            $data = $_POST['data'];
            $vendas = buscarVendaPorData($data);  
  
        } catch (\Exception $e) {
            echo "Erro:".$e->getMessage();
        }
    }

    if (isset($vendas) && empty($vendas)){
        $erro = "*** Nenhuma venda encontrada para a data informada. ***";
    }

?>

<div class="container mt-5">
    <h2>Relatório de Vendas por Data</h2>

    <form method="POST">
        <div class="row mt-3">
            <div class="col-3">
                <label for="data" class="form-label">Escolha uma data:</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    <?php if (isset($vendas) && !empty($vendas)): ?>
        <table class="table table-hover table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ingresso</th>
                    <th>Quantidade</th>
                    <th>Total da Venda</th>
                    <th>Data e Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $v): ?>
                    <tr>
                        <td><?= $v['id'] ?></td>
                        <td><?= $v['nome_ingresso'] ?></td>
                        <td><?= $v['quantidade'] ?></td>
                        <td><?= $v['total'] ?></td>
                        <th> <?= date('d/m/Y H:i:s', strtotime($v['data_venda'])) ?></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <?php if (isset($erro)): ?>
            <div class="alert alert-warning mt-3"><?= $erro ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php require_once 'rodape.php'; ?>