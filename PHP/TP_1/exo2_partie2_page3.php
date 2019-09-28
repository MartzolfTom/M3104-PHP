<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Modification du prenom et/ou mail</h2>
    <form class="" action="exo2_partie2_page3" method="post">
      <?php
        $db=mysqli_connect('localhost','root','');
        mysqli_select_db($db,'client');

        $requete = 'UPDATE client
                    SET prenom_client='.'\''.$_POST['prenom_modif'].'\''.' , mail_client='.'\''.$_POST['mail_modif'].
                    '\''.'WHERE no_client='.$_POST['nom_modif'].'';

      // echo "$requete";

      $result = mysqli_query($db,$requete);

      echo "modification effectué";
      ?>

    </form>
  </body>
</html>
