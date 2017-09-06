<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <?php
    $repeter = (int) $_GET['repeter'];
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    if (isset($prenom) AND isset($nom) AND isset($repeter) AND $repeter <= 100 and $repeter >= 0) // On a le nom et le prénom
    {
    for ($i=0; $i < $_GET['repeter']; $i++) {
      echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
    }
    }
    else // Il manque des paramètres, on avertit le visiteur
    {
      echo 'Il faut renseigner un nom et un prénom !';
}?>
  </body>
</html>
