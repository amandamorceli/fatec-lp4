<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/ingressos.php';
    require_once '../funcoes/eventos.php';

    $id = $_GET['id'];
    if (!$id){
        header('Location: ingressos.php');
        exit();
    }

    $ingresso = buscarProdutoPorId($id);
    if (!$ingresso){
        header('Location: ingressos.php');
        exit();
    }

    $eventos = buscarEventos();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = floatval($_POST['preco']);
            $estoque = intval($_POST['estoque']);
            $evento_id = intval($_POST['evento_id']);
            $id = intval($_POST['id']);
            if (empty($nome)){
                $erro = "Preencha os campos obrigatórios!";
            } else {
                if (alterarProduto($id, $nome, $descricao, $preco, 
                        $estoque, $evento_id)){
                            header('Location: ingressos.php');
                            exit();
                        } else {
                            $erro = "Erro ao alterar o ingresso!";
                        }
            }

        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Ingresso</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" value="<?= $ingresso['nome'] ?>" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>
            <?= $ingresso['descricao'] ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" value="<?= $ingresso['preco'] ?>" id="preco" class="form-control" step="0.01" value="" required>
        </div>
        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque" value="<?= $ingresso['estoque'] ?>" id="estoque" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="evento_id" class="form-label">Evento</label>
            <select name="evento_id" value="<?= $ingresso['evento_id'] ?>" id="evento_id" class="form-control" required>
                <?php foreach ($eventos as $e): ?>
                    <option value="<?= $e['id'] ?>" 
                    <?= $e['id'] == $ingresso['evento_id'] ? 'selected': '' ?> >
                        <?= $e['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
