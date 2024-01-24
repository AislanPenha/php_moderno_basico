<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 2</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <h1>Numeros aleatórios</h1>
        <div>
            <!-- rand() 1951 - Linear COngrential Gerator
                 mt_rand() 1997 - Mersenne Twister
                 rand() = mt_rand()
                 random_int() - para numeros criptografados, mais lenta -->
            <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php
                echo "<p>O número gerando foi <strong>" . rand(1,100) . "</strong </p>";
            ?>
        </div>
        <button onclick="javascript:window.location.reload()">&#x1F519; Gerar outro</button>
    </main>
</body>
</html>