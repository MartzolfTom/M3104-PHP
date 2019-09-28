<html lang="fr">
<head>
  <meta charsets="utf-8">
  <title>Récapitulatif</title>
</head>
<body>
  <?php

  if (empty($_POST['nbCons'])) {
    echo "le formulaire n'a pas été remplit correctement";
  }
  else
  {
    echo '<h3> Ecriture dans la base de donées </h3>';


      echo 'Num constructeur : '. $_POST['nbCons'];
      echo ' <br />';
      echo 'Nom constructeur : '. $_POST['nomCons'];
      echo '<br />';
      echo 'Tél constructeur : '. $_POST['telCons'];
      echo '<br />';

      $num=$_POST['nbCons'];
      $nom=$_POST['nomCons'];
      $tel=$_POST['telCons'];

      $db=mysqli_connect('localhost','root','');
      mysqli_select_db($db,'tonner');

      $r="INSERT INTO constructeur (no_cons, nom_cons, tel_cons) VALUES('$num','$nom','$tel')";
      echo "$r";

      $result=mysqli_query($db,$r);
    }
  ?>
</body
</html>
