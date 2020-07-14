<?php
  //variabili
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $authorization = "";

  //se il nome è inferiore ai 3 caratteri
  if (strlen($name) < 3){
    $authorization = "Accesso negato";
  }

  //se la mail non contiene una chiocciola o un punto
  elseif ((strpos($mail, "@") === false) || (strpos($mail, ".") === false)) {
    $authorization = "Accesso negato";
  }

  //se l'età non è un numero
  elseif (is_numeric($age) === false) {
    $authorization = "Accesso negato";
  }

  else {
    $authorization = "Accesso riuscito";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Snack 2</title>
  </head>
  <body>
    <!-- stampa autorizzato/non autorizzato -->
    <h1><?php echo $authorization ?> </h1>
  </body>
</html>
