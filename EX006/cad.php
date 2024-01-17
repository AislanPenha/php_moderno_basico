<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recupera dados</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<header>
    <?php
        echo "<h1>Dados enviados com sucesso!</h1>";
    ?>
        
    </header>
    <main>
        <section>
            <!-- REQUEST = POST + GET + COOKIE -->
            <?php
                $nome = $_GET["nome"] ?? "[sem nome]";  //Operador de coalescência nula
                $sobrenome = $_GET["sobrenome"] ?? "[sem sobrenome]";
                echo "<p>Seja bem vindo, <strong>$nome $sobrenome</strong></p>"
            ?>
        <a href="javascript: history.go(-1)">Voltar</a>
        </section>
    </main>
    
</body>
</html>