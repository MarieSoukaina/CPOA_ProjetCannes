<?php
	$title='Ajout VIP';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
				<form method="post" action="envoieFormulaire.php">

	        <p><label>Nom du VIP* </label><input type="text" name="nom" required/></p>

	        <p><label>Prenom du VIP* </label><input type="text" name="prenom"  required/></p>

					<p><label>Date</label><input type="text" name="mail"/></p>

					<label>Mail</label>
	        <input class="radioB" type="radio" name="echange" value="mail" required/>

					<label>Lettre</label>
	        <input class="radioB" type="radio" name="echange" value="lettre" required/>

					<label>Oral</label>
	        <input class="radioB" type="radio" name="echange" value="oral" required/>

					<label>Téléphone</label>
	        <input class="radioB" type="radio" name="echange" value="telephone" required/>


        	<p><button type="submit" name="envoyer">Envoyer</button></p>
    		</form>
			</div>
		</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
