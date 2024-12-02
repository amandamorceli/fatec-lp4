<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/eventos.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Eventos</h2>
    <a href="novo_eventos.php" class="btn btn-success mb-3 ">Novo Evento</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Local</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php

            $evento = buscarEventos();
            foreach ($evento as $e):
        ?>
            <tr>
                <td><?= $e['id']?></td>
                <td><?= $e['nome']?></td>
                <td><?= date('d/m/Y', strtotime($e['data']))?></td>
                <td><?= date('H:i', strtotime($e['hora']))?></td>
                <td><?= $e['local']?></td>
                <td><?= $e['descricao']?></td>
                <td>
                <a href="editar_eventos.php?id=<?= $e['id'] ?>" class="btn btn-warning rounded-pill">Editar</a>
                <a href="excluir_eventos.php?id=<?= $e['id'] ?>" class="btn btn-danger rounded-pill">Excluir</a>
                </td>
            </tr>
            <?php    
                endforeach;
            ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>