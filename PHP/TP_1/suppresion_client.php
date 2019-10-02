<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Suppression d'un client</h2>
    <form action="#" method="post">
      <?php if (empty($_POST['no_client'])) {?>
        Nom : <select size="1" name="no_client">
      <?php
$db = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($db, 'client');

    $requete = 'SELECT no_client, nom_client FROM client';
    $result = mysqli_query($db, $requete);
    while ($ligne = mysqli_fetch_array($result)) {
        echo '<option value="' . $ligne['no_client'] . '">' . $ligne['nom_client'] . '</option>';
    }
    ?>
        </select>
        <input type="submit" value="Salut mon pote">
          <?php
} else {
    $bool_supp = false;

    $db = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($db, 'client');

    $req_select = 'SELECT distinct c.no_client, nom_client FROM client c JOIN commande co ON c.no_client=co.no_client';
    //echo $req_select;
    $req_delete = 'DELETE from client where no_client ='. $_POST['no_client'];
  //  echo $req_delete;
    $result_select = mysqli_query($db, $req_select);

    while ($ligne = mysqli_fetch_array($result_select)) {
        if ($_POST['no_client'] == $ligne['no_client']) {
            $bool_supp = true;
        }
    }

    if ($bool_supp) {
        echo "suppression impossible";
    } else {
        $result_delete = mysqli_query($db, $req_delete);
        echo "suppresion effectué";
    }

}?>
    </form>
  </body>
</html>
