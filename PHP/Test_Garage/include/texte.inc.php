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
    case 4:
    echo "Supprimer client";
    echo "<img src=\"image/oui.jpg\">";
    break;
  default:
    echo "oui";
    break;
}

 ?>
</div>