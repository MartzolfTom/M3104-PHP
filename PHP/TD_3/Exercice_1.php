<?php

    class Produit {

          private $numProduit;
          private $libelle;
          private $prixHT;
          const TAUXTVA=1.2;

          public function __construct($newNumProduit,$newLibelle,$newPrixHT){
                $this -> numProduit=$newNumProduit;
                $this -> libelle=$newLibelle;
                $this -> prixHT=$newPrixHT;
          }

          public function setNumProduit($newNumProduit){
            $this -> numProduit=$newNumProduit;
          }

          public function getNumProduit(){
            return  $this -> numProduit;
          }

          public function getLibelle(){
            return  $this -> libelle;
          }

          public function getPrixHT(){
            return  $this -> prixHT;

          }

          public function calculerPrix($prixHT){
            return $prixHT * Self::TAUXTVA;
             // Self:: ou Produit:: ( nom de la classe)
          }


    /**
     * Set the value of Libelle
     *
     * @param mixed libelle
     *
     * @return self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Set the value of Prix
     *
     * @param mixed prixHT
     *
     * @return self
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

}

$ordinateur = new Produit(1,"micro-ordinateur 17p",1000);
echo $ordinateur -> getNumProduit();
echo "<br />";
echo $ordinateur -> getLibelle();
echo "<br />";
echo "prix tva : ";
echo $ordinateur -> calculerPrix($ordinateur -> getPrixHT());

?>
