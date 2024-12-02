<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/eventos.php';

    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $hora = $_POST['hora'];
            $local = $_POST['local'];
            $descricao = $_POST['descricao'] ?? null;
            if (empty($nome) || empty($data) || empty($hora) || empty($local)){
                $erro = "<p>Informe os valores obrigatórios!</p>";
            } else {
                if (criarEvento($nome, $data, $hora, $local, $descricao)){
                    header('Location: eventos.php');
                    exit();
                } else {
                    $erro = "<p>Erro ao criar o evento!</p>";
                }
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Novo Evento</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Horário</label>
            <input type="time" name="hora" id="hora" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" name="local" id="local" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
