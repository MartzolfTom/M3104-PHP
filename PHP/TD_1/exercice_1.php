
<?php
$chaine = 'tableau';
$chaine_inverse='';
$long = strlen($chaine);

echo"$chaine";
echo '<br />';

for ($i=$long; $i>=0;$i--)
	{
		$chaine_inverse=$chaine_inverse.substr($chaine,$i,1);
	}
echo "$chaine_inverse";
?>
