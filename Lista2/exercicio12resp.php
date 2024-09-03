<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <h2 class="mt-4">Resposta do exercício 12</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST') 
        {
            try {
                $base = (int)$_POST['base'] ?? 0;
                $expoente = (int)$_POST['expoente'] ?? 0;

                $calculo = pow($base, $expoente);

                echo "<p>A base elevada ao expoente $calculo.</p>";

            } 
            catch (Exception $e) 
            {
                "Erro!".$e->getMessage();
            }
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>