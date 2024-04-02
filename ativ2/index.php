<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <nav id="navbar" name="navbar">
        <h1 id="titulo-nav" name="titulo-nav">Atividade 2</h1>
    </nav>

    <?php
    for ($cont = 1; $cont <= 100; $cont++) {
        if ($cont % 2 == 0) {
            echo ("<p class='par numero'>$cont par</p>");
        } else {
            echo ("<p class='impar numero'>$cont impar</p>");
        }
        echo ("<br>");
    }

    ?>

    <footer id="footer" name="footer">
        <p id="donos" name="donos">@Leonardo Lopes e Tiago</p>
    </footer>

</body>

</html>