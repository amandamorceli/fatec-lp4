<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-4">Resposta do exercício 4</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        try {
            $number1 = (int)$_POST['number1'] ?? 0;
            $number2 = (int)$_POST['number2'] ?? 0;
            
            $resposta = $number1 / $number2;
            echo "<p>Resultado da divisão: $resposta</p>";
        } catch (DivisionByZeroError $e) {
          echo "Não é possível divisão com 0.";
        } catch (Exception $e) {
            echo "Erro!".$e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>