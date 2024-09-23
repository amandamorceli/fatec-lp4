<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4.4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Exercício 4</h2>
    <form action="resposta.php" method="post">
        <div class="row mt-3">
            <div class="col-3">
                <label for="dia" class="form-label">Informe o dia:</label>
                <input type="number" name="dia" id="dia" class="form-control">
            </div>
            <div class="col-3">
                <label for="mes" class="form-label">Informe o mês:</label>
                <input type="number" name="mes" id="mes" class="form-control">
            </div>]<div class="col-3">
                <label for="ano" class="form-label">Informe o ano:</label>
                <input type="number" name="ano" id="ano" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>