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
                $numero = $_GET["numero"]?? 0;
                $valor = $numero / 5.34;

                // Biblioteca intl (Internalization PHP)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

               // echo "Seus R$ " . number_format($numero,2,',', '.') . " equivalem a <strong>US$  " . number_format($valor,2,',', '.') . "</strong>";

                echo "Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $valor, "USD") ."</strong>";
            ?>
        </div>
        
    </main>
</body>
</html>