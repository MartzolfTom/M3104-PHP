<html>
    <head>
        <title> date du jour</title>
    </head>
</html>


<?php

$today = getdate()  ;

echo 'Nous sommes le '.$today['mday'].' '.$today['month'].'
      '.$today['year'].' '.$today['hours'].':'.$today['minutes'].
      ':'.$today['seconds'];

 ?>
