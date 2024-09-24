<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Resposta do exercício 5</h2>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    function calcularRaiz($valor)
    {
        if ($valor < 0)
        {
            echo "<p>Não existe raiz de valor negativo.</p>";
            return;
        }
        $raiz = sqrt($valor);
        echo "<p>A raiz quadrada de {$valor} é {$raiz}.</p>"; 
    }

    if ($_SERVER["REQUEST_METHOD"]=='POST') 
    {
        try {
            $valor = (float)$_POST['valor'] ?? 0;

            calcularRaiz($valor);

        } catch (Exception $e) {
            echo "Erro!".$e->getMessage();
        }
    }    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>