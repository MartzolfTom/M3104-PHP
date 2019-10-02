<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>Détail de la commande d'un client</h2>
    <form action="#" method="post">
    <?php
$db = mysqli_connect('localhost', 'root', '');
mysqli_select_db($db, 'client');

if (!empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom'];
}

if (!empty($_POST['num_commande'])) {
    $_SESSION['num_commande'] = $_POST['num_commande'];
}

if (!empty($_POST['num_article'])) {
    $_SESSION['num_article'] = $_POST['num_article'];
}

if (empty($_POST['nom']) && empty($_POST['num_commande']) && empty($_POST['num_article']) ) {?>
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

} else if (empty($_POST['num_commande']) && empty($_POST['num_article']) ) {

    echo 'Nom client : ' . $_SESSION['nom'] . '<br/><br/>';?>

        N° commande : <select size="1" name="num_commande">
        <?php

    $requete = 'SELECT no_commande FROM client c JOIN commande co ON c.no_client=co.no_client
        WHERE nom_client =\'' . $_SESSION['nom'] . "'";

    $result = mysqli_query($db, $requete);
    while ($ligne = mysqli_fetch_array($result)) {
        echo '<option value="' . $ligne['no_commande'] . '">' . $ligne['no_commande'] . '</option>';
    }
    ?>
        </select>
        <input type="submit" value="ok">

        <?php //echo $requete;

} else if (empty($_POST['num_article'])) {
    echo 'Nom client : ' . $_SESSION['nom'] . '<br/><br/>';
    echo 'N° Commande : ' . $_SESSION['num_commande'] . '<br/><br/>'?>

      N° article : <select size="1" name="num_article">
      <?php

    $req = 'SELECT distinct d.no_article FROM commande co JOIN detail_cde d ON co.no_commande = d.no_commande
      WHERE co.no_commande =\'' . $_SESSION['num_commande'] . "'";

    $result = mysqli_query($db, $req);
    while ($ligne = mysqli_fetch_array($result)) {
        echo '<option value="' . $ligne['no_article'] . '">' . $ligne['no_article'] . '</option>';
    }
    ?>
      </select>
      <input type="submit" value="ok">

      <?php //echo $req;
} else {
    echo 'Nom client : ' . $_SESSION['nom'] . '<br/><br/>';
    echo 'N° Commande : ' . $_SESSION['num_commande'] . '<br/><br/>';
    echo 'N° article : ' . $_SESSION['num_article'] . '<br/><br/>';

    $req = 'SELECT distinct lib_article,qte_cdee,qte_livree FROM commande co JOIN detail_cde d ON co.no_commande = d.no_commande
                                                                             JOIN article a on a.no_article=d.no_article
      WHERE d.no_article =\'' . $_SESSION['num_article'] . "'"
      .'and co.no_commande =\'' . $_SESSION['num_commande'] . "'";

  $result = mysqli_query($db, $req);
  //  echo $req;

  while ($ligne = mysqli_fetch_array($result)) {
    $qte_cmd=$ligne['qte_cdee'];
    $qte_liv=$ligne['qte_livree'];
    $nom_article=$ligne['lib_article'];
  }
?>
<table>
  <tr>
    <td>N° article</td>
    <td>Nom article</td>
    <td>Quantité commandée</td>
    <td>Quantité commandée</td>
  </tr>
  <tr>
    <td><?php echo $_SESSION['num_commande'] ?></td>
    <td><?php echo $nom_article; ?></td>
    <td><?php echo $qte_cmd; ?></td>
    <td><?php echo $qte_liv; ?></td>
  </tr>
</table> <br /> <br />
  <input type="submit" value="Autre recherche">
<?php
}?>
    </form>
  </body>
</html>
