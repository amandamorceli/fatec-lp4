<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/clientes.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if (excluirUsuario($id)){
                header('Location: clientes.php');
                exit();
            } else {
                $erro = "Erro ao excluir o cliente!";
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    } else {
        if (isset($_GET['id'])){
            $id = intval($_GET['id']);
            $cliente = retornaUsuarioPorId($id);
            if ($cliente == null){
                header('Location: clientes.php');
                exit();
            }
        } else {
            header('Location: clientes.php');
            exit();
        }
    }
    
?>

<div class="container mt-5">
    <h2>Excluir cliente</h2>

    <p>Tem certeza de que deseja excluir o cliente abaixo?</p>

    <ul>
        <li><strong>Nome: </strong> <?= $cliente['nome'] ?> </li>
        <li><strong>Email: </strong> <?= $cliente['email'] ?> </li>
        <li><strong>Nível: </strong> Cliente </strong> </li>
    </ul>

    <form method="post">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>" />
        <button type="submit" name="confirmar" class="btn btn-danger rounded-pill">Excluir</button>
        <a href="clientes.php" class="btn btn-secondary rounded-pill">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
