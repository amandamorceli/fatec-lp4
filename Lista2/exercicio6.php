<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <main class="container">
    <h2 class="mt-4">Exercício 6</h2>
    <form action="exercicio6resp.php" method="POST">
      <div class="row mt-4">
        <div class="col-auto">
          <label for="temp_celsius" class="form-label">Digite uma temperatura em Celsius:</label>
          <input type="number" name="temp_celsius" id="temp_celsius" class="form-control">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>