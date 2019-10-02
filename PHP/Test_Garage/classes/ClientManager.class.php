<?php

class ClientManager{

public function __construct($db){
  $this ->db=$db;
}

public function add($client){
  $req=$this->db->prepare(
    'INSERT INTO client (nom, prenom, enCours) VALUES(:nom, :prenom, :enCours)');
    $req->bindValue(':nom',$client->getNom(),PDO::PARAM_STR);
    $req->bindValue(':prenom',$client->getPrenom(),PDO::PARAM_STR);
    $req->bindValue(':enCours',$client->getEnCours(),PDO::PARAM_INT);

    $req->execute();
}

public function getList(){

  $listeClients =array();
  $sql='SELECT id_client, nom, prenom, enCours FROM client ORDER BY id_client desc';
  $req= $this->db->query($sql);

  while ($client = $req->fetch(PDO::FETCH_OBJ)) {
    $listeClients[] = new Client($client);
  }

  return $listeClients;
  $req->closeCursor();
}


public function modifClient($client){
      $req=$this->db->prepare(
      'UPDATE client SET nom = :nom, prenom = :prenom, enCours= :enCours WHERE id_client= :idClient');
      $req->bindValue(':nom',$client->getNom(),PDO::PARAM_STR);
      $req->bindValue(':prenom',$client->getPrenom(),PDO::PARAM_STR);
      $req->bindValue(':enCours',$client->getEnCours(),PDO::PARAM_INT);
      $req->bindValue(':idClient',$client->getIdClient(),PDO::PARAM_INT);

      $req->execute();
}

public function supprClient($client){
  $req=$this->db->prepare('DELETE FROM client WHERE id_client= :idClient ');
  $req->bindValue(':idClient',$client->getIdClient(),PDO::PARAM_INT);

  $req->execute();
}

}
 ?>
