<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h2 class="mt-4">Resposta do exercício 5</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST') {
            try {
                $mes = (int)$_POST['mes'] ?? 0;

                switch ($mes) {
                case 1:
                    echo "<p>$mes - Janeiro </p>";
                    break;
                case 2:
                    echo "<p>$mes - Fevereiro </p>";
                    break;
                case 3:
                    echo "<p>$mes - Março </p>";
                    break;
                case 4:
                    echo "<p>$mes - Abril </p>";
                    break;
                case 5:
                    echo "<p>$mes - Maio </p>";
                    break;
                case 6:
                    echo "<p>$mes - Junho </p>";
                    break;
                case 7:
                    echo "<p>$mes - Julho </p>";
                    break;
                case 8:
                    echo "<p>$mes - Agosto </p>";
                    break;
                case 9:
                    echo "<p>$mes - Setembro </p>";
                    break;
                case 10:
                    echo "<p>$mes - Outubro </p>";
                    break;
                case 11:
                    echo "<p>$mes - Novembro </p>";
                    break;
                case 12:
                    echo "<p>$mes - DEzembro </p>";
                    break;
                default:
                    echo "<p>Valor inválido</p>";
                    break;
                }
            } catch (Exception $e) {
                "Erro!".$e->getMessage();
            }
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </main>
</body>

</html>