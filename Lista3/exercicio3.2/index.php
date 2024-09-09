<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <h2 class="mt-5">Exercício 2</h2>
        <form action="resposta.php" method="post">
            <div class="row">
                <div class="col-4">
                    <label for="numero1" class="form-label">Digite o valor 1:</label>
                    <input type="number" name="numero1" id="numero1" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="numero2" class="form-label">Digite o valor 2:</label>
                    <input type="number" name="numero2" id="numero2" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>