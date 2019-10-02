<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Détail de la commande d'un client</h2>
    <form action="#" method="post">
    <?php
    $db = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($db, 'client');

    $_SESSION['nom']='';
    $_SESSION['num_commande']='';
    $_SESSION['num_article']='';


    if (empty($_POST['nom'])) { ?>
      N° client : <select size="1" name="nom">
      <?php

      $requete = 'SELECT distinct c.no_client, nom_client FROM client c JOIN commande co ON c.no_client=co.no_client';
      $result = mysqli_query($db, $requete);
      while ($ligne = mysqli_fetch_array($result)) {
          echo '<option value="' . $ligne['nom_client'] . '">' . $ligne['nom_client'] . '</option>';
      }
      ?>
      </select>
      <input type="submit" value="ok">

      <?php
    }
    else if (empty($_POST['num_commande'])) {
        $_SESSION['nom']=$_POST['nom'];
        echo 'Nom client : '.$_SESSION['nom'].'<br/><br/>'; ?>

        N° commande : <select size="1" name="num_commande">
        <?php

        $requete = 'SELECT no_commande FROM client c JOIN commande co ON c.no_client=co.no_client
        WHERE nom_client =\''.$_SESSION['nom']."'";

        $result = mysqli_query($db, $requete);
        while ($ligne = mysqli_fetch_array($result)) {
            echo '<option value="' . $ligne['no_commande'] . '">' . $ligne['no_commande'] . '</option>';
        }
        ?>
        </select>
        <input type="submit" value="ok">

        <?php //echo $requete;
    }
    else if (empty($_POST['num_article'])) {
      $_SESSION['num_commande']=$_POST['num_commande'];
      echo 'Nom client : '.$_SESSION['nom'].'<br/><br/>';
      echo 'N° Commande : '.$_SESSION['num_commande'].'<br/><br/>'?>

      N° article : <select size="1" name="num_article">
      <?php

      $requete = 'SELECT no_article FROM commande co JOIN detail_cde d ON co.no_commande = d.no_commande
      WHERE no_commande =\''.$_SESSION['num_commande']."'";

      $result = mysqli_query($db, $requete);
      while ($ligne = mysqli_fetch_array($result)) {
          echo '<option value="' . $ligne['no_commande'] . '">' . $ligne['no_commande'] . '</option>';
      }
      ?>
      </select>
      <input type="submit" value="ok">

      <?php //echo $requete;
    }
    else {
      echo "page4";
    }?>
    </form>
  </body>
</html>
