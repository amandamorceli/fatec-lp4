<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/vendas.php';
    require_once '../funcoes/ingressos.php';

    $vendas = buscarVendas();
    $ingressos = buscarProdutos();

    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $ingresso_id = intval($_POST['ingresso_id']);
            $quantidade = intval($_POST['quantidade']);
            $total = floatval($_POST['total']);
            if (empty($ingresso_id) || empty($quantidade) || empty($total)){
                $erro = "Informe os valores obrigatórios!";
            } else {
                if (criarVenda($ingresso_id, $quantidade, $total)){
                    header('Location: vendas.php');
                    exit();
                } else {
                    $erro = "Erro ao inserir o ingresso!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro ao criar venda: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Nova Venda</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="ingresso_id" class="form-label">Ingresso</label>
            <select name="ingresso_id" id="ingresso_id" class="form-select" required>
            <?php foreach($ingressos as $i): ?>
                    <option value="<?= $i['id']?>"><?= $i['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" name="total" id="total" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
