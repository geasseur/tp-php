<?php
  session_start();
  $_SESSION["pseudo"] = $_POST["pseudo"];
  $_SESSION["code"] = $_POST["code"];
  setcookie('pseudo', $_SESSION["pseudo"], time() + 365*24*3600, null, null, false, true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>entree</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <a href="info.php">vers info de session</a>
    <section>
      <?php
        if (isset($_SESSION["pseudo"]) and isset($_SESSION["code"]) and $_SESSION["pseudo"] != "" and $_SESSION["code"] != ""){
          ?>
          <h1>Salut <?php echo $_SESSION['pseudo'] ?>.</h1>
          <p>bienvenu sur ce tp.</p><?php

          // 1 : on ouvre le fichier
          $monfichier = fopen('ecritureFichier.txt', 'r+');

          // 2 : on fera ici nos opérations sur le fichier...
          $page_vue = fgets($monfichier);
          $page_vue += 1;
          fseek($monfichier, 0);
          fputs($monfichier,$page_vue);
          // 3 : quand on a fini de l'utiliser, on ferme le fichier
          fclose($monfichier);
          echo "cette page a été vue $page_vue fois.";

        }
        else {
          echo "vous avez mal rentré vos infos";
        }
      ?>
    </section>
  </body>
</html>
