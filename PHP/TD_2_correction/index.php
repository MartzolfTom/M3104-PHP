<?php
require_once("include/config.inc.php");

require_once("include/connect.inc.php");

require_once("include/header.inc.php");
?>
<div id="corps">
<div id="texte">
<div class="centrerBlock">
	<h1>Choix de consommables</h1>
	<?php if (empty ($_POST["const"]) && empty ($_POST["imp"]) )  {
		// les 2 champs sont vides = premier appel  ?>
		<div class="constructeur">
	<form action ="#" method = "post" id = "formConst">

	<label>Constructeur :</label>
			<select class="champ" id="const" name="const" >
			<?php
				$sql = 'SELECT No_Cons, Nom_Cons FROM constructeur where no_cons in
					(select no_cons from imprimante)';
				$resul=mysqli_query($db,$sql);

				while($ligne=mysqli_fetch_array($resul))   { ?>
					<option value="<?php echo $ligne["No_Cons"]?>">
						<?php echo $ligne["Nom_Cons"] ?></option>
					<?php echo "\n" ;
				}
			?>
			</select>	<br /><br />
			<input type="submit" name="envoyConst" value="Valider" />
	</form>
	</div> <!-- fin constructeur -->
	<?php } /*fin if constructeur */
	if (!empty ($_POST["const"]) && empty ($_POST["imp"])) {

		$sql = 'SELECT Nom_Cons FROM constructeur where no_cons ='.$_POST["const"];
		$resul=mysqli_query($db,$sql);
		$ligne=mysqli_fetch_array($resul);
		?>

		<h1> pour imprimante  : <?php echo $ligne["Nom_Cons"];
		$_SESSION["const"]=$ligne["Nom_Cons"]; ?></h1>
				<div class="constructeur">
		<form action ="#" method = "post" id = "formConst">

			<label>Imprimante :</label>
			<select class="champ" id="imp" name="imp">

			<?php
				$sql = 'SELECT No_Impr, Desi_Impr FROM imprimante where no_cons = '.$_POST["const"];
				//echo $sql;
				$resul=mysqli_query($db,$sql);

				while($ligne=mysqli_fetch_array($resul))   { ?>
					<option value="<?php echo $ligne["No_Impr"]?>"><?php echo $ligne["Desi_Impr"]?>
					</option><?php echo "\n";
				}
			?>
			</select>	<br /><br />
			<input type="submit" name="envoyImp" value="Valider" />
		</form>
		</div> <!-- fin texte -->
		<?php } /* fin if imprimante */
		if (empty ($_POST["const"]) && !empty ($_POST["imp"])) {
			$sql = 'SELECT Desi_Impr FROM imprimante where no_impr ='.$_POST["imp"];

			$resul=mysqli_query($db,$sql);
			$ligne=mysqli_fetch_array($resul);?>

			<h1> pour imprimante  : <?php echo $ligne["Desi_Impr"] ." (" . $_SESSION["const"].")"?> </h1>

	<table>
		<tr>
			<th><b>Désignation cartouche </b></th>
			<th><b>Couleur</b></th>
			<th><b>Prix</b></th>
			<th><b>Type</b></th>
			<th><b>Fabricant</b></th>
		</tr>
		<?php
		$sql = "SELECT Desi_Cart, Couleur_Cart, Prix_Cart, Libelle_Type_Cart, Nom_Cons ";
		$sql= $sql . " FROM cartouche c , type_cart t, constructeur f , est_livree l";
		$sql = $sql." where t.no_type_cart= c.no_type_cart AND l.No_Cart = c.No_Cart";
		$sql = $sql ." AND f.no_cons = c.no_cons and No_Impr=".$_POST["imp"];
		$resul=mysqli_query($db,$sql);
		while($ligne=mysqli_fetch_array($resul))   {?>
			<tr>
				<td> <?php echo $ligne["Desi_Cart"] ?></td>
				<td> <?php echo $ligne["Couleur_Cart"]?> </td>
				<td> <?php echo $ligne["Prix_Cart"]?> </td>
				<td> <?php echo $ligne["Libelle_Type_Cart"]?> </td>
				<td> <?php echo $ligne["Nom_Cons"]?></td>
			</tr>

		 <?php }
	?>
	</table>
	<br />
	<br />
	<?php } // fin if cartouche
	?>
</div> <!-- fin centerBlock -->

</div> <!-- fin texte -->
</div> <!-- fin corps -->
<div id="spacer"></div>
<?php
require_once("include/footer.inc.php"); ?>
