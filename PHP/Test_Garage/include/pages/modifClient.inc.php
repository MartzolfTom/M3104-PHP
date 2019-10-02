<?php

if (!empty($_POST['idClient'])) {
  $_SESSION['idClient']=$_POST['idClient'];
}


$db=new Mypdo();

$manager= new ClientManager($db);
$listeClients=$manager->getList();

?> <h2> Modifier un client </h2> <br>

<?php
if (empty($_POST['idClient'] ) && empty($_POST['nom_modif'])) {
  ?>
  <form method ="post" action ="#">
  Nom : <select size="1" name="idClient">

  <?php
    foreach ($listeClients as $client) {
?>
    <option value=<?php echo $client->getIdClient();?>> <?php echo $client->getNom();  ?> </option> <?php
  } ?>

 </select>
 <input type="submit" name="Valider" />
</form>
<?php }

  else if (empty($_POST['nom_modif'])){
        foreach ($listeClients as $client) {
         //echo "d".$_POST['nom']."f";  echo "d".$client->getNom()."f";  echo "<br />";

          if($_POST['idClient']==$client->getIdClient()){

            $nom = $client->getNom();
            $prenom = $client-> getPrenom();
            $enCours = $client-> getEnCours();
          }
        }

    ?>
    <form method ="post" action ="#">
      Nom <input type="text" name="nom_modif" value="<?php echo "$nom";?>"> <br/><br/>
      Prenom <input type="text" name="prenom_modif" value="<?php echo "$prenom";?>"><br/><br/>
      enCours <input type="text" name="enCours_modif" value="<?php echo "$enCours";?>"><br/><br/>
      <input type="submit" name="Valider" />
    </form>
    <?php
}
else {

$tab = array('id_client' => $_SESSION['idClient'], 'nom' => $_POST['nom_modif'], 'prenom' => $_POST['prenom_modif'], 'enCours' => $_POST['enCours_modif']);


$client = new Client($tab);

$manager->modifClient($client);

echo "modification effectué";
unset($_SESSION['idClient']);
}
   ?>
