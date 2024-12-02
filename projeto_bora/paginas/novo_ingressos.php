<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/ingressos.php';
    require_once '../funcoes/eventos.php';

    $eventos = buscarEventos();
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = floatval($_POST['preco']);
            $estoque = intval($_POST['estoque']);
            $evento_id = intval($_POST['evento_id']);
            if (empty($nome) || empty($descricao) || empty($preco) || empty($estoque) || empty($evento_id)){
                $erro = "Informe os valores obrigatórios!";
            } else {
                if (criarProduto($nome, $descricao, 
                                    $preco, $estoque, $evento_id)){
                    header('Location: ingressos.php');
                    exit();
                } else {
                    $erro = "Erro ao inserir o ingresso!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro ao criar ingresso: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Novo Ingresso</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque</label>
            <input type="number" name="estoque" id="estoque" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="evento_id" class="form-label">Evento</label>
            <select name="evento_id" id="evento_id" class="form-select" required>
                <?php foreach($eventos as $e): ?>
                    <option value="<?= $e['id']?>"><?= $e['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
