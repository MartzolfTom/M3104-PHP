<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exercice 4 </title>
  </head>
  <body>
      <table border="1">
<?php

$moisFrancais= array(1=>'Janvier','Février','Mars',
                      'Avril','Mai','Juin','Juillet',
                      'Aout','Septembre','Octobre','Novembre','Décembre');

$cellColor =array(1=>'blue','white','red','yellow',
                      'grey','lime','lightblue','fuschia',
                      'lightgrey','olive','pink','purple');

foreach ($moisFrancais as $key => $value) {
if ($key % 3 == 1) {
  echo  "<tr>";
}
  echo " <td> $key </td> <td bgcolor=\"$cellColor[$key]\"> $value </td> ";

if ($key % 3 ==0){
  echo  "</tr>";
  }
}
 ?>

      </table>
  </body>
</html>
