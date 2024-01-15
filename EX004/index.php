<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constante</title>
</head>
<body>
    <h1>Variáveis e constante</h1>
    <?php
        $nome = "Aislan";
        $sobrenome = "Penha";

        const PAIS = "Brasil";

        echo "Olá, $nome $sobrenome você mora no " . PAIS ."<hr>";

        // Tipos primitivos escalares
        $funcionario = "Alex";
        $idade = 25;
        $peso = 92.5;
        $casado = false;

        $hexadecimal = 0x5e; // 0x ----> inteiro
        $binario = 0b1001; // 0b ------> inteiro
        $octadecimal = 057; // 0 ------> inteiro

        $expotencial = 4e5; //  -------> float

        echo var_dump($funcionario) . "<br>"; 
        echo var_dump($idade) . "<br>";
        echo var_dump($peso) . "<br>";
        echo var_dump($casado) . "<br>";

        echo var_dump($hexadecimal) . "<br>";
        echo var_dump($binario) . "<br>";
        echo var_dump($octadecimal) . "<br>";

        echo var_dump($expotencial) . "<hr>";

        // Tipos primitivos compostos
        $vetor = ["Aislan", 1, 5.4, false];

        class Pessoa {
            private string $funcionarionome;
        }
        $pessoa = new Pessoa;

        echo var_dump($vetor) . "<br>";
        echo var_dump($pessoa) . "<br>";
        // Tipos primitivos especiais
        // * null
        // * mixed
        // * callabe
        // * resource
    ?>
</body>
</html>