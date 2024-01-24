<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUPERGLOBAIS</title>
  <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
  <main>
    <h1>Conversor de Moedas</h1>
    <section>
      <!-- Query String -->
      <pre>
        <?php
          setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

          session_start();
          $_SESSION["logado"] = "VERDADEIRO";

          echo "<h1>Superglobal GET</h1>";
          var_dump($_GET);

          echo "<h1>Superglobal POST</h1>";
          var_dump($_POST);

          echo "<h1>Superglobal REQUEST</h1>";
          var_dump($_REQUEST);

          echo "<h1>Superglobal COOKIE</h1>";
          var_dump($_COOKIE);

          echo "<h1>Superglobal SESSION</h1>";
          var_dump($_SESSION);

          echo "<h1>Superglobal ENV</h1>";
          var_dump($_ENV);

          foreach (getenv() as $c => $v ) {
            echo "<br> $c -> $v";
          }

          echo "<h1>Superglobal SERVER</h1>";
          var_dump($_SERVER);

          echo "<h1>Superglobal GLOBAL</h1>";
          var_dump($GLOBALS);
          /*
          $_FILES
          */
          ?>
        </pre>
    </section>
  </main>
</body>

</html>