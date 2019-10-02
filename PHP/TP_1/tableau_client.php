<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h2>Affichage des clients</h2>
    <?php

      $db=mysqli_connect('localhost','root','');
      mysqli_select_db($db,'client');

      $requete = "SELECT nom_client, prenom_client, mail_client, inscrit_client FROM client";

      $result=mysqli_query($db, $requete);
      echo '<table>';
      echo '<tr><th>Nom</th><th>Prenom</th><th>Mail</th><th>Inscrit</th></tr>';
      while ($ligne=mysqli_fetch_array($result)) {
        $inscrit;
        echo '<tr><td>'.$ligne['nom_client'].'</td>';
        echo '<td>'.$ligne['prenom_client'].'</td>';
        echo '<td>'.$ligne['mail_client'].'</td>';
        if ($ligne['inscrit_client']==0 || $ligne['inscrit_client']==null) {
          $inscrit='non';
        }
        else {
          $inscrit='oui';
        }
        echo '<td>'.$inscrit.'</td></tr>';
      }
      echo '</table>';
    ?>
  </body>
</html>
