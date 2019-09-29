<?php
class Mypdo extends PDO{

protected $pdo;

public function __construct(){
  if (ENV=='dev') {
    $bool=true;
  }
  else {
    $bool=false;
  }

  try {
    $this ->dbo =parent::__construct(
      "mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASSWD,
      array(PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => $bool,
      PDO::ERRMODE_EXCEPTION => $bool));
  } catch (\PDOException $e) {
      echo "echec lors de la connexion ";
      $e ->getMessage();
  }
}

}

 ?>
