<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-4">Exercício 5</h2>
    <form action="exercicio5resp.php" method="POST">
        <div class="row mt-4">
            <div class="col">
                <label for="nota1" class="form-label">Insira a nota 1</label>
                <input type="number" name="nota1" id="nota1" class="form-control">
            </div>     
            <div class="col">
                <label for="nota2" class="form-label">Insira a nota 2</label>
                <input type="number" name="nota2" id="nota2" class="form-control">
            </div>
            <div class="col">
                <label for="nota3" class="form-label">Insira a nota 3</label>
                <input type="number" name="nota3" id="nota3" class="form-control">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>