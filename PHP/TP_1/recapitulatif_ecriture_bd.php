<html lang="fr">
<head>
  <meta charsets="utf-8">
  <title>Récapitulatif</title>
</head>
<body>
  <?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    echo "Affichage et écriture dans la BD";
    echo "<br /> <br />";
    echo "Nous avons reçu les information suivantes : ";
    echo "<br /> <br />";
    echo 'Nom : '.$nom;
    echo "<br /> <br />";
    echo 'Prénom : '.$prenom;
    echo "<br /> <br />";
    echo 'Mail : '.$email;

    $db=mysqli_connect('localhost','root','');
    mysqli_select_db($db,'client');

    echo "<br /> <br />";

    $r="INSERT INTO client (nom_client, prenom_client,mail_client) VALUES('$nom','$prenom','$email')";
    echo "$r";

    $result=mysqli_query($db,$r);
  ?>
</body>
</html>
