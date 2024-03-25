<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <link rel="stylesheet" href="../ativ1/css/reset.css">
    <link rel="stylesheet" href="../ativ1/css/style.css">
</head>

<body>

    <nav id="navbar" name="navbar">
        <h1 id="titulo-nav" name="titulo-nav">Atividade 1</h1>
    </nav>

    <div class="container">

        <h2 id="titulo-descricao">Escolha uma Forma</h2>

        <p id="descricao">Nessa página você pode escolher uma de quatro formas para aparecerem na tela, sendo elas:</p>
        <ol id="lista-formas">
            <li>
                <p class="forma-nome">Triângulo:</p><img class='forma-pequena' src='../ativ1/images/triangulo.png'>
            </li>
            <li>
                <p class="forma-nome">Retângulo:</p><img class='forma-pequena' src='../ativ1/images/retangulo.png'>
            </li>
            <li>
                <p class="forma-nome">Círculo:</p><img class='forma-pequena' src='../ativ1/images/circulo.png'>
            </li>
            <li>
                <p class="forma-nome">Losango:</p><img class='forma-pequena' src='../ativ1/images/losango.png'>
            </li>
        </ol>

    </div>

    <div class="container">

        <p id="escolha-uma-forma">Escolha uma forma:</p>

        <?php

        $forma = 5;

        echo ("<p>" . $forma . "</p>");

        switch ($forma) {
            case 1:
                echo ("<img class='forma' src='../ativ1/images/triangulo.png'>");
                break;
            case 2:
                echo ("<img class='forma' src='../ativ1/images/retangulo.png'>");
                break;
            case 3:
                echo ("<img class='forma' src='../ativ1/images/circulo.png'>");
                break;
            case 4:
                echo ("<img class='forma' src='../ativ1/images/losango.png'>");
                break;
            default:
                echo ("<p id='mensagem-de-erro'>Você inseriu uma forma que não temos disponível! D=</p>");
                break;
        }

        ?>

    </div>

    <footer id="footer" name="footer">
        <p id="donos" name="donos">@Leonardo Lopes e Tiago</p>
    </footer>

</body>

</html>