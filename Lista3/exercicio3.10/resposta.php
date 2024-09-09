<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-4">Resposta do exercício 10</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=='POST') {
        try {
            $numero = (int)$_POST['numero'] ?? 0;
            echo nl2br("Tabuada do $numero:\n");
            
            for ($i=0; $i <= 10 ; $i++) {
                $calculo = $numero * $i;
                echo nl2br("$numero x $i = $calculo\n");
            }
        } catch (Exception $e) {
            echo "Erro!".$e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>