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
}
 ?>
