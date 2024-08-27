<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-4">Ecercício 4</h2>
    <form action="exercicio4resp.php" method="POST">
        <div class="row mt-4">
            <div class="col">
                <label for="number1" class="form-label">Insira um número:</label>
                <input type="number" name="number1" id="number1" class="form-control">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="number2" class="form-label">Insira um número diferente de 0:</label>
                <input type="number" name="number2" id="number2" class="form-control">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>