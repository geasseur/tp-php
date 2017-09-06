<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>Re-bonjour !</p>
    <p>
      <?php
      if (isset($_COOKIE['pseudo'])){
      ?>
        Je me souviens de toi ! Tu t'appelles <?php echo $_COOKIE['pseudo'];?> !<br />
        Et ton mot de passe  est <?php echo $_SESSION['code']; ?> , c'est ça ? :-D et ta session est <?php echo session_id(); ?>. Le serveur hébergeant le tout est <?php echo $_SERVER['SERVER_NAME']; ?>.
      <?php
      }
      else{
        echo "le cookie n'existe pas";
      } ?>
    </p>
    </body>
</html>
