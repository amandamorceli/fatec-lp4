<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2>Exercício 1</h2>
    <form action="exer1resp.php" method="POST">
        <div class="row mt-4">
            <div class="col-4">
                <label for="valor1" class="form-label">Digite o valor 1</label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col-4">
                <label for="valor2" class="form-label">Digite o valor 2</label>
                <input type="number" name="valor2" id="valor2" class="form-control">
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