<?php
	$title='Ajout VIP';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<h1>Modifier un échange</h1>
			<div class="formulaireAjoutTutorat">
					<form method="post" action="index.php?page=gestionechanges&action=modificationEchange" enctype="multipart/form-data">

						<p><label>Nom du demandeur</label><input type="text" name="expediteur" value="'.$infosEchange['expediteur'].'"/></p>

						<p><label>Date</label><input type="date" name="dateEchange" value="'.$infosEchange['dateEchange'].'"/></p>

						<p><label>Description de la demande</label><textarea name="type" >'.$infosEchange['type'].'</textarea></p>

						<p><label>Prénom du demandeur</label><input type="text" name="destinataire"value="'.$infosEchange['destinataire'].'"/></p>

						<input type="hidden" name="demandeID" value="'.$infosEchange['echangeID'].'">


	        	<p><button type="submit" name="envoyer">Envoyer</button></p>
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
