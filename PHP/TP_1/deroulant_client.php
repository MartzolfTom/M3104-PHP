<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Modification du prenom et/ou mail</h2>
    <form action="modif_client.php" method="post">
      Nom : <select size="1" name="nom">
        <?php
          $db=mysqli_connect('localhost','root','');
          mysqli_select_db($db,'client');

          $requete = 'SELECT no_client, nom_client FROM client';
          $result = mysqli_query($db,$requete);

          while ($ligne=mysqli_fetch_array($result)) {
            echo '<option value="'.$ligne['no_client'].'">'.$ligne['nom_client'].'</option>';
          }

        ?>
      </select>
      <input type="submit" value="Ok">
    </form>
  </body>
</html>
