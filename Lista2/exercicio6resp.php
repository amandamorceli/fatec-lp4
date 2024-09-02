<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h2 class="mt-4">Resposta do exercício 2</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            try 
            {
                $temp_celsius = (float)$_POST['temp_celsius'] ?? 0;

                $temp_fahrenheit = ($temp_celsius * 1.8) + 32;
                $temp_fahrenheit = number_format($temp_fahrenheit, 2, '.', '');

                echo "<p>$temp_celsius ºC é igual a $temp_fahrenheit ºF.";
            } 
            catch (Exception $e) 
            {
                "Erro!" . $e->getMessage();
            }
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>