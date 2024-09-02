<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-4">Resposta do exercício 9</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        try
        {
            $raio = (float)$_POST['raio'] ?? 0;

            $area_circulo = pi() * pow($raio, 2);
            $area_circulo = number_format($area_circulo, 2, ",", "");

            echo "<p>Área do círculo: $area_circulo.</p>";

        } catch(Exception $e){
            "Erro!".$e->getMessage();
        }
    } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>