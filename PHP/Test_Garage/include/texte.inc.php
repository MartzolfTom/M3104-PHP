<div id="texte">
<?php
if (!empty($_GET["page"])) {
  $page=$_GET["page"];
}
else{$page=0;}

switch ($page) {
    case 0:
      echo "<img src=\"image/dune.jpg\">";
    break;
    case 1:
      include_once('pages/ajouterClient.inc.php');
    break;
    case 2:
      include_once('pages/listerClient.inc.php');
    break;
    case 3:
      include_once('pages/modifClient.inc.php');
    break;
    case 4:
    echo "Supprimer client";
    echo "<img src=\"image/oui.jpg\">";
    break;
    case 666:
      session_destroy();
    break;
  default:
    echo "oui";
    break;
}

 ?>
</div>
