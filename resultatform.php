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
    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles
      <?php
      $pseudo = $_POST['pseudo'];
      echo htmlspecialchars($pseudo);
      ?> !
    </p>
    <p> ton message est :
      <?php
        $message = $_POST['message'];
        echo $message;
      ?>
      et votre choix est :
      <?php
      $choix = $_POST['choix'];
      echo " $choix et ";
      echo "vous avez choisit: ". $_POST['case'];
      ?>
    </p>
    <?php
      $frite = $_POST["frites"];
      $fichierImage = $_FILES["monfichier"];
      if ($frite == "oui") {
        echo "<p>
        vous semblez aimer les frites.
        </p>";
      }
      else {
        echo "<p>
        vous n'aimez pas les frites, bien compris
        </p>";
      }
      if (isset($fichierImage)AND $fichierImage['error'] == 0) {
        if ($fichierImage['size'] <= 1000000) {
          $infosfichier = pathinfo($fichierImage['name']);
          $extension_upload = $infosfichier['extension'];
          $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
          if (in_array($extension_upload, $extensions_autorisees))
            {
              move_uploaded_file($fichierImage['tmp_name'], 'uploads/' . basename($fichierImage['name']));
              echo "L'envoi a bien été effectué ! : fichier ";
              echo "<strong>".$fichierImage['name']."</strong>";
              echo '<img src=uploads/'.$fichierImage['name'].' >';
            }
        }
      }
    ?>

    <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>
  </body>
</html>
