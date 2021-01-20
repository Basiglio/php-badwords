<?php
// TITOLO
$title = "PHP BADWORDS";
// TESTO ORIGINALE
$text = "Lorem ipsum dolor sit amet, BADWORD consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad BADWORD veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse BADWORD dolore eu fugiat nulla pariatur. Excepteur BADWORD sint occaecat cupidatat non proident, BADWORD in culpa qui BADWORD officia deserunt mollit anim id est laborum.";
// CREO UN CONTENITORE PER L' INPUT DELL'UTENTE
$badWord = $_GET["badWord"];
// DEFINISCO IN COSA DEVO TRASFORMARE IL TESTO INSERITO DALL'UTENTE
$censured = "***";

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      <?php echo $title; ?>
    </h1>
    <h2>TESTO NORMALE</h2>
    <p>
      <?php echo $text; ?>
    </p>
    <h2>TESTO NORMALE CHE RESTITUISCE LA LUNGHEZZA</h2>
    <p>
      <?php echo $text; ?>
      <br>
      <?php echo "LUNGHEZZA DEL TESTO:" . " " . strlen($text); ?>
    </p>
    <h2><?php echo "Questa è la Badword:" . " " . $badWord; ?> </h2>
    <h2>TESTO CENSURATO</h2>
    <!-- CERCO SUL TESTO ORGINALE, TROVO LA PAROLA INSERITA DALL'UTENTE, LA SOSTITUISCO CON LA PAROLA MESSA DA ME -->
    <?php echo str_Replace($badWord, $censured , $text); ?>
  </body>
</html>
