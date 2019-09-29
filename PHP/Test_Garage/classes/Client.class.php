<?php

class Client{

    private $id_client;
    private $nom;
    private $prenom;
    private $enCours;

public function __constructor ($valeurs = array()){
  if(!empty($valeurs))
    $this ->affecte($valeurs);
  }

public function affecte($donnees){
  foreach($donnees as $attribut => $valeurs){
    switch ($attribut) {
      case 'id_client':$this->setIdClient($valeurs);
        break;
      case 'nom':$this->setNom($valeurs);
        break;
      case 'prenom':$this->setPrenom($valeurs);
        break;
      case 'enCours':$this->setEnCours($valeurs);
        break;

      default:

        break;
    }
  }
}

    public function getIdClient()
    {
        return $this->id_client;
    }


    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getEnCours()
    {
        return $this->enCours;
    }


    public function setEnCours($enCours)
    {
        $this->enCours = $enCours;
    }

}

?>
