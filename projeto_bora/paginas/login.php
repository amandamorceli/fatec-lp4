<div style="background-image: linear-gradient(#392d69, #b57bee); height: 100vh">
<?php

require_once('../funcoes/clientes.php');
require_once 'cabecalho.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $email = $_POST['email'] ?? "";
        $senha = $_POST['senha'] ?? "";
        if ($email != "" && $senha != "") {
            $cliente = login($email, $senha);
            if ($cliente) {
                $_SESSION['usuario'] = $cliente['nome'];
                $_SESSION['nivel'] = $cliente['nivel'];
                $_SESSION['acesso'] = true;
                header("Location: dashboard.php");
            } else {
                $erro = "Credenciais inválidas!";
            }
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}

?>

<div class="container mt-5 d-flex flex-column justify-content-center align-items-center text-white gap-3">
    <div class="d-flex justify-content-center align-items-center gap-2">
        <h1>BORA</h1>
        <h4>Sistema de Vendas de Ingressos</h4>
    </div>
    <h3 class="mt-5">Login</h3>
    <form method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <?php
    if (isset($erro)) echo "<p class='text-danger'>$erro</p>";
    ?>
</div>

</div>
<?php require_once 'rodape.php'; ?>