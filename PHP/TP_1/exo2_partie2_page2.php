<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Modification du preno et/ou mail</h2>
    <form class="" action="#" method="post">
      <?php
        $db=mysqli_connect('localhost','root','');
        mysqli_select_db($db,'client');

        $requete= 'SELECT ';
      ?>
      Prenom <input type="text" name="prenom" value="">
      Mail <input type="text" name="mail" value="">
      <br/><br/><br/>
    </form>
  </body>
</html>
 
