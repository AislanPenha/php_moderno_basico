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
                $numero = (int) $_GET["numero"] ?? 0;
                echo "<p>O numero escolhido foi <strong>$numero</strong></p>";
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "<p>O seu antecessor é $antecessor</p>";
                echo "<p>O seu sucessor é $sucessor</p>";
            ?>
        </div>
        
    </main>
</body>
</html>