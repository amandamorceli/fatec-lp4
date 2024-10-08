<?php
declare(strict_types=1);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-3">
    <h2>Exercício 2</h2>
    <form action="" method="POST">
        <?php for ($i = 0; $i <= 4; $i++): ?>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="nomes<?= $i ?>" class="form-label">Informe o nome: </label>
                    <input type="text" class="form-control" name="nomes[]" id="nomes<?= $i ?>" placeholder="Nome <?= $i + 1 ?>" required>
                </div>
                <?php for ($j = 0; $j <= 2; $j++): ?>
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="notas<?= $i ?><?= $j ?>" class="form-label">Informe a nota: </label>
                            <input type="number" class="form-control" name="notas[<?= $i ?>][]" id="notas<?= $i ?><?= $j ?>" step="0.1" placeholder="Nota <?= $j + 1 ?>" required>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    <?php
    function calcularMedias(array $nomes, array $notas): array 
    {
        $medias = [];
    
        for ($i = 0; $i < count($nomes); $i++) 
        {
            $nome = $nomes[$i];
            $somaNotas = array_sum($notas[$i]);
            $media = $somaNotas / 3;  
            $medias[$nome] = $media;
        }
    
        arsort($medias);

        return $medias;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $nomes = $_POST['nomes'];
        $notas = $_POST['notas'];

        
        $medias = calcularMedias($nomes, $notas);

        
        echo nl2br("<p>Médias dos Alunos:</p>\n");
        foreach ($medias as $nome => $media) {
            echo "<p>{$nome}: {$media} </p>";
        }
    }
    ?>
</body>
</html>
