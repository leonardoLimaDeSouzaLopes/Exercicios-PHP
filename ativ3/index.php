<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="../ativ3/css/reset.css">
    <link rel="stylesheet" href="../ativ3/css/style.css">
</head>

<body>

    <nav id="navbar" name="navbar">
        <h1 id="titulo-nav" name="titulo-nav">Atividade 3</h1>
    </nav>

    <div class="container">
    <?php

    for ($fator1 = 1; $fator1 <= 10; $fator1++) {
        echo "<div class='tabuada' id='tabuada-do-" . $fator1 . "' name='tabuada-do-" . $fator1 . "'><h3 class='titulo-tabuada'>Tabuada do " . $fator1 . "</h3>";
        for ($fator2 = 1; $fator2 <= 10; $fator2++) {
            echo "<p class='multiplicacao'>" . $fator1 . " x " . $fator2 . " = " . ($fator1 * $fator2) . "</p>";
        }
        echo "</div>";
    }

    ?>
    </div>
    

    <footer id="footer" name="footer">
        <p id="donos" name="donos">@Leonardo Lopes e Tiago</p>
    </footer>

</body>

</html>