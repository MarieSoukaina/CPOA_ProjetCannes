<?php
	$title='Ajout VIP';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<h1>Ajouter une demande d\'un VIP</h1>
			<div class="formulaireAjoutTutorat">
					<form method="post" action="index.php?page=gestiondemandes&action=modificationDemande" enctype="multipart/form-data">

						<p><label>Nom du demandeur</label><input type="text" name="nomDemandeur" value="'.$infosDemande['nomDemandeur'].'"/></p>

						<p><label>Prénom du demandeur</label><input type="text" name="prenomDemandeur"value="'.$infosDemande['prenomDemandeur'].'"/></p>

						<p><label>Date</label><input type="date" name="dateDemande" value="'.$infosDemande['dateDemande'].'"/></p>

						<p><label>Description de la demande</label><textarea name="description" >'.$infosDemande['description'].'</textarea></p>

						<input type="hidden" name="demandeID" value="'.$infosDemande['demandeID'].'">


	        	<p><button type="submit" name="envoyer">Envoyer</button></p>
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
