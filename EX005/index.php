<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatos de Strings</title>
</head>
<body>
    <h1>Formatos de Strings</h1>
    <?php 
        $texto = "Aislan";

        $doubleQuoted = "Oi $texto";
        $singleQuoted = 'Oi $texto';

        echo "$doubleQuoted <br>";
        echo "$singleQuoted <br><hr>";
        
    ?>
    <textarea cols="50" rows="20">
        <?php
        echo<<< FRASE
        Aqui é um exemplo de Heredoc
            $texto\n
        FRASE;

        echo<<< 'FRASE'
        Aqui é um exemplo de Nowdoc
            $texto
        FRASE;

        ?>

    </textarea>
</body>
</html>