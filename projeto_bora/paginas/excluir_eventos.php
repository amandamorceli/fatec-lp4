<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/eventos.php';

    $id = $_GET['id'];
    if (!$id){
        header('Location: eventos.php');
        exit();
    }

    $evento = buscarEventoPorId($id);
    if (!$evento){
        header('Location: eventos.php');
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_GET['id']);
            if (empty($id)){
                header('Location: eventos.php');
                exit();
            } else{
                if (excluirEvento($id)){
                    header('Location: eventos.php');
                    exit();
                } else {
                    $erro = "Erro ao excluir o evento!"; 
                }
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Evento</h2>
    
    <p>Tem certeza de que deseja excluir o evento abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $evento['nome'] ?> </li>
        <li><strong>Data:</strong> <?= date('d/m/Y', strtotime($evento['data']))?> </li>
        <li><strong>Horário:</strong> <?= date('H:i', strtotime($evento['hora']))?> </li>
        <li><strong>Local:</strong> <?= $evento['local'] ?> </li>
        <li><strong>Descrição:</strong> <?= $evento['descricao'] ?> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger rounded-pill">Excluir</button>
        <a href="eventos.php" class="btn btn-secondary rounded-pill">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
