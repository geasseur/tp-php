<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>formulaire pour secret</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <form class="" action="formulaire.php" method="post">
      <label for="">entre votre mot de passe</label>
      <input type="text" name="codeTest" value="">
      <input type="submit" name="valider">
    </form>
    <?php
      $code = "kangourou";
      if (isset($_POST["codeTest"])) {
        $testCode = $_POST["codeTest"];
          if ($testCode == $code) {
            ?>
            <h1>Voici les codes d'accès :</h1>
          <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

          <p>
          Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
          La NASA vous remercie de votre visite.
          </p>
            <?php
          }
          else{
            echo "perdu ^_^";
          }
          
      }
     ?>
  </body>
</html>
