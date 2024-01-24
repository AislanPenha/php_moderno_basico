<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <section>
            <form action="numero.php" method="get">
                <p>
                    <label for="idNumero">Número: </label>
                    <input type="number" name="numero" id="idNumero">
                </p>
                <input type="submit" value="Calcular">
            </form>
        </section>
    </main>
</body>
</html>