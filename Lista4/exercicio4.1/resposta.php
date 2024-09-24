<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resposta 4.1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
  <h2 class="mt-4">Resposta 1</h2>
  <?php

    function contarCaracteres($palavra): int
    {
        $caracteres = strlen($palavra);
        return $caracteres;
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') 
    {
        try 
        {
            $palavra = (string)$_POST['palavra'];

            $qtdeCaracteres = contarCaracteres($palavra);

            echo "<p>O número de caracteres de '$palavra' é $qtdeCaracteres.</p>";
        } catch (Exception $e) {
            echo "ERRO!".$e->getMessage();
        }
    }
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>