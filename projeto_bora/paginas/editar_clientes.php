<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/clientes.php';

    $id = intval($_GET['id']);
    if (!$id){
        header('Location: editar_clientes.php');
        exit();
    }

    $cliente = retornaUsuarioPorId($id);
    if (!$evento){
        header('Location: editar_clientes.php');
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $id = intval($_GET['id']);
            if (empty($nome) || empty($email) || empty($senha)){
                $erro = "Preencha os campos obrigatórios!";
            } else {
                if (alterarCliente($id, $nome, $email, $senha)){
                            header('Location: editar_clientes.php');
                            exit();
                        } else {
                            $erro = "Erro ao alterar seu cliente!";
                        }
            }

        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Dados</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $cliente['nome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $cliente['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Nova Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
