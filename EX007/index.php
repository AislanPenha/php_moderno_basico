<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções</h1>
    <?php 
        $numero = -500;
        $numeroFloat = 4.56464;

        echo "abs = " . abs($numero) . "<br>";
        echo "base_convert = " . base_convert($numero, 10, 16) . "<br>";

        echo "abs = " . round($numeroFloat,1) . "<br>";
        echo "ceil = " . ceil($numeroFloat) . "<br>";
        echo "floor = " . floor($numeroFloat) . "<br>";
    ?>
</body>
</html>