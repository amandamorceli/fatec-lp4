<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';  
    require_once '../funcoes/ingressos.php';
    require_once '../funcoes/eventos.php';

    $eventos = buscarEventos();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Ingressos</h2>
    <a href="novo_ingressos.php" class="btn btn-success mb-3">Novo Ingresso</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Evento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 

            $ingressos = buscarProdutos();
            foreach($ingressos as $i) : 
            ?>
            <tr>
                <td><?= $i['id'] ?></td>
                <td><?= $i['nome'] ?></td>
                <td><?= $i['descricao'] ?></td>
                <td><?= $i['preco'] ?></td>
                <td><?= $i['estoque'] ?></td>
                <td><?= $i['nome_evento']?></td>
                
                <td>
                    <a href="editar_ingressos.php?id=<?= $i['id'] ?>" class="btn btn-warning rounded-pill">Editar</a>
                    <a href="excluir_ingressos.php?id=<?= $i['id'] ?>" class="btn btn-danger rounded-pill">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
