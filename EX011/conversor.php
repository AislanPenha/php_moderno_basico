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
            $datainicio = date('m-d-Y', strtotime("-7 days"));
            $datafim = date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $datainicio .'%27&@dataFinalCotacao=%27' . $datafim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            $dolar = $dados["value"][0]["cotacaoCompra"];
            $data = $dados["value"][0]["dataHoraCotacao"];
 
            $numero = $_GET["numero"]?? 0;
            $valor = $numero / $dolar;

            // Biblioteca intl (Internalization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // echo "Seus R$ " . number_format($numero,2,',', '.') . " equivalem a <strong>US$  " . number_format($valor,2,',', '.') . "</strong>";

            echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $valor, "USD") ."</strong></p>";
            $nova = strtotime($data);
            var_dump($nova);
            ?>
        </div>
        
    </main>
</body>
</html>