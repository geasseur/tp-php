<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ouverture session</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <h1>création compte</h1>
    <form class="" action="entree.php" method="post">
      <label for="">entrez votre pseudo</label>
      <input type="text" name="pseudo" value=""><br>
      <label for="">entre votre mot de passe</label>
      <input type="text" name="code" value="">
      <input type="submit" name="valider">
    </form>
  </body>
</html>
