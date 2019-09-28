<?php
$tab=array("oui@free.fr", "ouioui@orange.com", "non@orange.com",
            "web @orange.com","ui@sfr.com","iu@sfr.com");

foreach ($tab as $key => $value) {
  $tab_domaine=explode("@",$value);
  $tab_reseau[]= $tab_domaine[1];

}
$nb_domaine = array_count_values($tab_reseau);

echo "<br />";

foreach ($nb_domaine as $key => $value) {
  echo "  le fournisseur $key a : $value client(s) <br /> ";
}

 ?>
