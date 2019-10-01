<?php

$db=new Mypdo();

$manager= new ClientManager($db);
$listeClients=$manager->getList();

if (empty($_POST['nom'])) {
  ?> <h2> Modifier un client </h2> <br>
  <form method ="post" action ="#">
  Nom : <select size="1" name="nom">

  <?php
    foreach ($listeClients as $client) {
?>
    <option value=" <?php echo $client->getNom();?> "> <?php echo $client->getNom();  ?> </option> <?php
  } ?>

 </select>
 <input type="submit" name="Valider" />
</form>
<?php }

  else {
        foreach ($listeClients as $client) {
         //echo $_POST['nom'];  echo $client->getNom();  echo "<br />";

          if($_POST['nom']==$client->getNom()){

            echo "test";
            $nom = $client->getNom();
            $prenom = $client-> getPrenom();
            $enCours = $client-> getEnCours();
          }
        }
    ?>

    <h2> Modifier un client </h2> <br>
    <form method ="post" action ="#">
      Prenom <input type="text" name="nom_modif" value=" <?php echo "$nom"; ?>"> <br/><br/>
      Mail <input type="text" name="prenom" value=" <?php echo "$prenom"; ?> "><br/><br/>
      enCours <input type="text" name="enCours" value=" <?php echo "$enCours"; ?> "><br/><br/>

    <?php
}
   ?>
