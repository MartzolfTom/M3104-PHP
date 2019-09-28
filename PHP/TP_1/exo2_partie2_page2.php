<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Modification du prenom et/ou mail</h2>
    <form class="" action="exo2_partie2_page3" method="post">
      <?php
        $db=mysqli_connect('localhost','root','');
        mysqli_select_db($db,'client');

        $requete = 'SELECT no_client, nom_client,prenom_client,mail_client FROM client';
        $result = mysqli_query($db,$requete);

        while ($ligne=mysqli_fetch_array($result)) {

          if($ligne['no_client']==$_POST['nom']){
            $prenom=$ligne['prenom_client'];
            $mail=$ligne['mail_client'];
          }
        }

        $nom=$_POST['nom'];

        $requete= 'SELECT ';
      ?>
      Prenom <input type="text" name="prenom_modif" value=" <?php echo "$prenom"; ?>"> <br/><br/>
      Mail <input type="text" name="mail_modif" value=" <?php echo "$mail"; ?> "><br/><br/>
      Nom <input type="text" name="nom_modif" value=" <?php echo " $nom "; ?> "><br/><br/>
        <input type="submit" value="Ok">
    </form>
  </body>
</html>
