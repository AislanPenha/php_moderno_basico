<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <div>

        <?php
            
            $num = (float) $_GET["numero"];
            $inteiro = round($num);
            echo "A parte inteira é $inteiro<br>";
            echo "A parte fracionária é ". number_format($num - $inteiro, 3, ',','.');
            ?>
        </div>
        
    </main>
</body>
</html>