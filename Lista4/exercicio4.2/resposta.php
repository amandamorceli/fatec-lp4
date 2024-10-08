<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Resposta 2</h2>
    <?php

    function formatarPalavara($palavra)
    {
        $maiuscula = strtoupper($palavra);
        $minuscula = strtolower($palavra);

        echo nl2br("<p>Palavra formatada:\nMinúscula: $minuscula \nMaiúscula: $maiuscula</p>");
    }

    if ($_SERVER["REQUEST_METHOD"]=='POST') 
    {
        try {
            $palavra = (string)$_POST['valor'];

            formatarPalavara($palavra);
          
        } catch (Exception $e) {
            echo"ERRO!".$e->getMessage();
        }
    } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>