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
        <h1>Conversor de Moedas</h1>
        <section>
            <form action="conversor.php" method="get">
                <p>
                    <label for="idNumero">Quantas R$ você tem na carteira? </label>
                    <input type="number" name="numero" step="0.01" id="idNumero">
                </p>
                <input type="submit" value="Calcular">
            </form>
        </section>
    </main>
</body>
</html>

<?php
/*
array(2) {
  ["@odata.context"]=>
  string(127) "https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)"
  ["value"]=>
  array(1) {
    [0]=>
    array(2) {
      ["cotacaoCompra"]=>
      float(4.9217)
      ["dataHoraCotacao"]=>
      string(23) "2024-01-19 13:47:20.596"
    }
  }
}
    
*/
?>