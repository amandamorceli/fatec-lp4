<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Exercício 1</h2>
    <form action="" method="post">
        <div class="row mt-2">
        <?php for ($i=0; $i <= 4 ; $i++): ?>
                <div class="col-2 mt-2">
                    <label for="nome[]" class="form-label">Nome</label>
                    <input type="text" name="nome[]" class="form-control" placeholder="Nome<?= $i ?>"/>
                </div>
        <?php endfor; ?>
        </div>
        <div class="row mt-2">
        <?php for ($i=0; $i <= 4 ; $i++): ?>
                <div class="col-2 mt-2">
                    <label for="numero[]" class="form-label">Nº de telefone</label>
                    <input type="number" name="numero[]" class="form-control" placeholder="Nº de telefone<?= $i ?>"/>
                </div>
        <?php endfor; ?>
        </div>
        <button type="submit" class="mt-2 btn btn-primary">Enviar</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $telefone = $_POST['numero'];
            $data = [];

            foreach ($nome as $chave => $valor){
                $auxiliar = array_search($valor, $data);
                if($auxiliar == false){
                    $data[$valor]=$telefone[$chave];
                }
            }
            foreach ($data as $nome => $telefone) {
                echo "<p>$nome: $telefone</p>";
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>