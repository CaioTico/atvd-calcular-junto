<!-- HTML e PHP -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verificador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Verificador de Números</h1>
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero"><br>
        <input type="submit" value="Verificar">
        <?php
    // Verifica se o formulário foi enviado usando o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o valor do input "numero" enviado pelo formulário
        $numero = $_POST["numero"];

        // Verifica se o número é par ou ímpar usando o operador módulo %
        if ($numero % 2 == 0) {
            // Exibe a mensagem "O número é par." se o número for par
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é par.</p>";
        } else {
            // Exibe a mensagem "O número é ímpar." se o número for ímpar
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é ímpar.</p>";
        }

        // Verifica se o número é um inteiro e se termina em 0
        if (is_numeric($numero) && $numero % 10 == 0) {
            $arredondado = true; // Define a variável $arredondado como verdadeira se o número for arredondado
        } else {
            $arredondado = false; // Define a variável $arredondado como falsa se o número não for arredondado
        }

        // Exibe uma mensagem com base no resultado da verificação de arredondamento
        if ($arredondado) { // Se o número for arredondado, exibe uma mensagem indicando isso
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é redondo.</p>";
        } else { // Se o número não for arredondado, exibe uma mensagem indicando isso
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou não é redondo.</p>";
        }

        // Verifica se o número é maior que 0
        if ($numero > 0) {
            // Exibe uma mensagem afirmando que o número é positivo
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é positivo.</p>";
        } elseif ($numero < 0) {
            // Exibe uma mensagem afirmando que o número é negativo
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é negativo.</p>";
        } else {
            // Exibe uma mensagem afirmando que o número é neutro (zero)
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é neutro (zero).</p>";
        }
    }
    ?>
    </form>

    
</body>

</html>