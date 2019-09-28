
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset= "UTF-8" />
<title> exo1 du TD2 PHP (page2)) </title>
</head>
<body>
<h1> Ecriture dans la base de données</h1>
	<?php
	echo "Num constructeur : ".$_POST["num"]."<br />";
	echo "Nom constructeur : ".$_POST["nom"]."<br />";
	echo "Tél constructeur : ".$_POST["tel"]."<br />";

	$db = mysqli_connect ('localhost', 'bd' , 'bede') or die("Veuillez nous excuser : erreur système");
	mysqli_select_db($db,'toner') or die("Veuillez nous excuser : erreur système");

	$num=$_POST["num"];
	$nom=$_POST["nom"];
	$tel=$_POST["tel"];

	$r = "INSERT INTO constructeur (no_cons, nom_cons, tel_cons)VALUES('$num','$nom','$tel')";

	echo $r;

	$result = mysqli_query($db,$r);
	?>
</body>
</html>
