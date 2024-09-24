<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 4.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class = "mt-4">Resposta do exercício 3</h2>
    <?php
    function verificarPalavra($palavra1, $palavra2): string
    {
        $palavraContida = strpos($palavra1, $palavra2);
        $resultado = $palavraContida === false ? "A palavra '{$palavra2}' não está contida na palavra '{$palavra1}'." : 
        "A palavra '{$palavra2}' está contida na palavra '{$palavra1}'";
        return $resultado;
    }

    if ($_SERVER["REQUEST_METHOD"]=='POST') 
    {
        try 
        {
            $primeiraPalavra = (string)$_POST['palavra1'];
            $segundaPalavra = (string)$_POST['palavra2'];

            $resposta = verificarPalavra($primeiraPalavra, $segundaPalavra);
            echo "{$resposta}";

        } catch (Exception $e) {
            echo "Erro!".$e->getMessage();
        }
    } 
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
