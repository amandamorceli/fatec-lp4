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

    $evento = buscarEventos();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if (empty($id)){
                header('Location: ingressos.php');
                exit();
            } else{
                if (excluirProduto($id)){
                    header('Location: ingressos.php');
                    exit();
                } else {
                    $erro = "Erro ao excluir o ingresso!"; 
                }
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Ingresso</h2>
    
    <p>Tem certeza de que deseja excluir o ingresso abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $ingresso['nome'] ?></li>
        <li><strong>Descrição:</strong> <?= $ingresso['descricao'] ?></li>
        <li><strong>Evento:</strong> <?= $ingresso['nome_evento'] ?></li>
        <li><strong>Preço:</strong> <?= $ingresso['preco'] ?></li>
        <li><strong>Estoque:</strong> <?= $ingresso['estoque'] ?></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" >
        <button type="submit" name="confirmar" class="btn btn-danger rounded-pill">Excluir</button>
        <a href="ingressos.php" class="btn btn-secondary rounded-pill">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
