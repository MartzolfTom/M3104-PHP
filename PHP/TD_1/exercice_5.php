<?php

$dateSQL="2014-09-07 18:17:51 ";

$pieces = explode(" ",$dateSQL);
$pieces_dates = explode("-",$pieces[0]);

// print_r($pieces_dates);

$dateFr = $pieces_dates[2] ."/". $pieces_dates[1] ."/". $pieces_dates[0] ." ". $pieces[1];

echo " nous sommes le ".$dateFr;
 ?>
