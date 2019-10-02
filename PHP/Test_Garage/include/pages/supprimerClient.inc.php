<?php

if (!empty($_POST['idClient'])) {
  $_SESSION['idClient']=$_POST['idClient'];
}


$db=new Mypdo();

$manager= new ClientManager($db);
$listeClients=$manager->getList();

?> <h2> Supprimer un client </h2> <br>

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

else {

$tab = array('id_client' => $_POST['idClient']);

$client = new Client($tab);

$manager->supprClient($client);

echo "supprimation effectué";
}
   ?>
