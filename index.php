<!doctype html>
<html class="no-js" lang="">
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
      <?php include("titre.php") ?>
      <h2>Affichage de texte avec PHP</h2>
      <a href="formulaire.php">vers formulaire pour secret</a>
      <a href="nouvelleSession.php">vers exo session</a>
      <a href="bonjour.php?nom=Dupont&amp;prenom=Jean&amp;repeter=8">Dis-moi bonjour !</a>
      <form class="" action="resultatform.php" method="post" enctype="multipart/form-data">
        <input type="text" name="pseudo" value=""><br />
        <textarea name="message" rows="8" cols="45">

        </textarea>
        <section>
          <select name="choix">
              <option value="choix1">Choix 1</option>
              <option value="choix2">Choix 2</option>
              <option value="choix3">Choix 3</option>
              <option value="choix4">Choix 4</option>
          </select>
        </section>
        <section>
          <input type="checkbox" name="case" value="france" id="france" /> <label for="france">france</label>
          <input type="checkbox" name="case" value="angleterre" id="angleterre" /> <label for="angleterre">angleterre</label>
        </section>
        <section>
          Aimez-vous les frites ?
          <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
        </section>
        <section>
          <input type="file" name="monfichier" />
        </section>
        <input type="submit" value="Valider">
      </form>

      <p>
          Cette ligne a été écrite entièrement en HTML.<br />
          <?php
          $coordonnees = array ('François','Dupont','3 Rue du Paradis','Marseille');
          $position = (array_search('Dupont', $coordonnees));
          {
              echo "La valeur 'dupont' se trouve dans les coordonnées $position !";
          }

?>
      </p>
      <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
