<html lang="fr">
<head>
  <meta charsets="utf-8">
  <title>Récapitulatif</title>
</head>
<body>
  <?php
  $cellColor = array('bleu'=>'blue','rouge'=>'red','vert'=>'green','noir'=>'black');

  if (empty($_POST['email'])) {
    echo "le formulaire n'a pas été remplit correctement";
  }
  else
  {
    echo '<h3> Bonjour '.$_POST['email'].' </h3>';

    if (empty($_POST['comm'])) {
      echo "Vous n'avez pas laissé de commentaire";
    } else {
      echo 'vous avez commenté : '.$_POST['comm'];
    }

    echo '<br /> <br />';

    if ($_POST['liste'] == 'Choisissez') {
      echo "Vous n'avez pas choisi de couleur";
    } else {
      echo 'Votre couleur préférée est le <a style = \'color : '.$cellColor[$_POST['liste']].'\' ; > '.$_POST['liste'].' </a>';
    }

    echo '<br /> <br />';

    echo 'Vous avez comme diplôme : '.$_POST['CHOIX'];
  }
  ?>
</body>
</html>
