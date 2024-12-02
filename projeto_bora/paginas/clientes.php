<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/clientes.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Clientes</h2>
    <a href="novo_clientes.php" class="btn btn-success mb-3">Novo Cliente</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php

                $cliente = todosUsuarios();
                foreach ($cliente as $c):
            ?>

            <tr>
                <td><?= $c['id']?></td>
                <td><?= $c['nome']?></td>
                <td><?= $c['email']?></td>
                <td><?php echo $c['nivel'] == 'adm' ? 'Administrador': 'Usuário'; ?></td>
                <td>
                    <a href="excluir_clientes.php?id=<?= $c['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <?php    
                endforeach;
            ?>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
