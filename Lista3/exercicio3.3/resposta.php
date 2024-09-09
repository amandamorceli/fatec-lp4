<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <h2 class="mt-4">Resposta do exercício 3</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST') 
        {
            try 
            {
                $a = (float)$_POST['valor_a'] ?? 0;
                $b = (float)$_POST['valor_b'] ?? 0;

                echo ($a == $b) ? "Números iguais: $a" : (($a < $b) ? "$a $b" : "$b $a");
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