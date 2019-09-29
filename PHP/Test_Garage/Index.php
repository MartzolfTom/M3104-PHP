<?php
require_once("include/config.inc.php");
require_once("include/autoload.inc.php");
require_once("include/header.inc.php");

$pdo=new Mypdo();
$managerClient=new ClientManager($pdo);
 ?>

 <div id="corps">
<?php
require_once("include/menu.inc.php");
require_once("include/texte.inc.php");
 ?>
</div>

<div id="spacer"></div>
<?php
require_once("include/footer.inc.php");
 ?>
