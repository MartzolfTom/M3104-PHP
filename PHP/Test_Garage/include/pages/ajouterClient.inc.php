<?php

$db=new Mypdo();

$manager= new ClientManager($db);

if (empty($_POST['nom'])) {
  ?> <h2> Ajouter un client </h2> <br>
  <table class="nobordered">
  <form method ="post" action ="#">
  <tr>
    <td> Nom</td>
    <td><input type="text" name="nom" value="Martzolf"/></td>
  </tr>
  <tr>
    <td>Prenom</td>
    <td><input type="text" name="prenom" value="Tom" /></td>
  </tr>
  <tr>
    <td>En cours</td>
    <td><input type="text" name="enCours" value ="1" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="Valider" /></td>
  </tr>
  </table>

<?php }
  else {

$tab=array('nom' => $_POST['nom'],'prenom' => $_POST['prenom'],'enCours' => $_POST['enCours']);

    $client=new Client($tab);


  $manager ->add($client);
  echo "client ajouté";
}
   ?>
