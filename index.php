<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Olá Mundo</title>
</head>
<body>

    <h1><?php echo "Olá Mundo"; ?></h1>

    <?php
        $valor = 50;
        echo $valor;

        $nome = "João Marcelo";
        echo $nome;

        // Declarando um array
        $array = ["pera", "maçã", "banana"];

        // Exibindo os elementos do array em uma lista
        echo "<ul>";

        foreach ($array as $fruta) {
            echo "<li>$fruta</li>";
        }

        echo "</ul>";
    ?>

</body>
</html>
