
<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/clientes.php';
    require_once '../funcoes/eventos.php';

    $id = intval($_GET['id']);
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
        try{
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $hora = $_POST['hora'];
            $local = ($_POST['local']);
            $descricao = $_POST['descricao'];
            $id = intval($_GET['id']);
            if (empty($nome) || empty($data) || empty($hora) || empty($local)){
                $erro = "Preencha os campos obrigatórios!";
            } else {
                if (alterarEvento($id, $nome, $data, $hora, 
                        $local, $descricao)){
                            header('Location: eventos.php');
                            exit();
                        } else {
                            $erro = "Erro ao alterar o evento!";
                        }
            }

        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?> 

<div class="container mt-5">
    <h2>Editar Evento</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $evento['nome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="<?= $evento['data'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Horário</label>
            <input type="time" name="hora" id="hora" class="form-control" value="<?= $evento['hora'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" name="local" id="local" class="form-control" value="<?= $evento['local'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="<?= $evento['descricao'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Evento</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
