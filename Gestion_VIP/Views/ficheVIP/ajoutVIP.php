<?php
		$title='Ajout VIP';
		$pageCSS='ajoutVIP';
		ob_start(); //mise en tampon début

		echo '
		<form method="post" action=index.php?page=ajoutvip>

			<p>Nom : <input type="text" name="nomVIP" placeholder="Nom"></p>

			<p>Prenom : <input type="text" name="prenomVIP" placeholder="Prenom"></p>

			<p>Date de Naissance : <input type="text" name="dateNaissance" placeholder="23/07/1991"></p>

			<p>Type : <input type="text" name="typeVIP" placeholder="ex : Acteur"></p>

			<p>Informations utiles : <input type="text" name="infoVIP"></p>

			<input type="submit" value="Valider l\'ajout">

		</form>
    ';

  $content = ob_get_contents(); //récuprération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
