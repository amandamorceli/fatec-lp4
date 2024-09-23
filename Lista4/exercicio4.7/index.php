<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4.7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Exercício 7</h2>
    <form action="resposta.php" method="post">
        <div class="row mt-3">
            <div class="col-4">
                <label for="data1">Informe a data de ínicio:</label>
                <input type="date" name="data1" id="data1">
            </div>
            <div class="col-4">
                <label for="data2">Informe a data de fim:</label>
                <input type="date" name="data2" id="data2">
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