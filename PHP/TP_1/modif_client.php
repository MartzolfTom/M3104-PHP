<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="exec_modif_client" method="post">
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

      ?>
      <br/><br/>
      Num-client <input type="text" name="nom_modif" value=" <?php echo " $nom "; ?> "><br/><br/><?php echo "c'est pas bô mais j'ai la flemme de faire une solution plus propre" ?><br/><br/><br/><br/>
      <h2>Modification du prenom et/ou mail</h2>
      Prenom <input type="text" name="prenom_modif" value=" <?php echo "$prenom"; ?>"> <br/><br/>
      Mail <input type="text" name="mail_modif" value=" <?php echo "$mail"; ?> "><br/><br/>

        <input type="submit" value="Ok">
    </form>
  </body>
</html>
