<html>
<form action = "exercice_7_page_2.php" method = "post">
  Votre E-mail. <input type = "texte" name = "email" id = "email"
  size = 30 maxlength = 40 value = "toto@orange.fr">
  <br /> <br />
  Tapez ici votre commentaire. <textarea name= "comm"
  id = "comm" cols = 31 rows =4>
  Votre commentaire </textarea> <br /> <br />
  Votre couleur préférée :<select name = "liste" id ="liste">
  <option> choisissez</option>
  <option value = rouge> rouge</option>
  <option value = bleu> bleu</option>
  <option value = vert>vert</option>
  <option value = noir>noir</option>
</select>
<br /> <br />
Votre diplôme
<input type="radio" name="CHOIX" value="Permis de conduire" > Permis de conduire
<input type="radio" name="CHOIX" value="BAFA"> BAFA
<input type="radio" name="CHOIX" value="Secouriste" checked> Secouriste
<input type="reset" value="Annuler" />
<input type="submit" value="Envoyer" />
<br /> <br />
</form>
</html>
