<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/vendas.php';

    $id = $_GET['id'];
    if (!$id){
        header('Location: vendas.php');
        exit();
    }

    $venda = buscarVendaPorId($id);
    if (!$venda){
        header('Location: vendas.php');
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        try {
            $id = intval($_POST['id']);
            if (empty($id)){
                header('Location: vendas.php');
                exit();
            } else{
                if (excluirVenda($id)){
                    header('Location: vendas.php');
                    exit();
                } else {
                    $erro = "Erro ao excluir a venda!"; 
                }
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Venda</h2>
    <p>Tem certeza de que deseja excluir a venda abaixo?</p>
    <ul>
        <li><strong>Id Venda:</strong> <?= $venda['id'] ?> </li>
        <li><strong>Ingresso:</strong> <?= $venda['nome_ingresso'] ?> </li>
        <li><strong>Quantidade:</strong> <?= $venda['quantidade'] ?> </li>
        <li><strong>Total:</strong> <?= $venda['total'] ?> </li>
        <li><strong>Data e hora:</strong> <?= date('d/m/Y H:i:s', strtotime($venda['data_venda'])) ?> </li>

    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger rounded-pill">Excluir</button>
        <a href="vendas.php" class="btn btn-secondary rounded-pill">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
