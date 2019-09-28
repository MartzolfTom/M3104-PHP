<html lang="fr">
<head>
  <meta charsets="utf-8">
  <title>Exercice 1</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo '<table>';
for ($i=1; $i < 10; $i++) {
  echo '<tr>';
  for ($j=1; $j < 10 ; $j++) {
    if ( $i % 2 == 0) {
      if ($j == $i) {
        echo '<th class="paire">'.$i*$j.'</th>';
      }
      else {
        echo '<td class="paire">'.$i*$j.'</td>';
      }
    }
    else {
      if($i==1 && $j==1){
      echo '<th> </th>';
      }
      else {
        if ($j == $i) {
          echo '<th class="impaire">'.$i*$j.'</th>';
        }
        else {
          echo '<td class="impaire">'.$i*$j.'</td>';
        }
      }
    }
  }
  echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
