<?php
$db= new Mypdo();
$manager= new ClientManager($db);
 ?>

 <h2> Liste des clients </h2>
 <table>
   <tr>
     <th>Numero</th>
     <th>Nom</th>
     <th>Prenom</th>
     <th>enCours</th>
  </tr>
  <?php
  $listeClients = $manager->getList();
  foreach ($listeClients as $client) {
    ?>
    <tr>
      <td> <?php echo $client->getIdClient(); ?> </td>
      <td> <?php echo $client->getNom(); ?> </td>
      <td> <?php echo $client->getPrenom(); ?> </td>
      <td> <?php echo $client->getEnCours(); ?> </td>
    </tr>
  <?php }
    ?>
  </table>
