<?php
	$title='Ajout demande';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<h1>Ajouter une demande d\'un VIP</h1>
			<div class="formulaireAjoutTutorat">
					<form method="post" action="index.php?page=gestiondemandes&action=ajoutDemande" enctype="multipart/form-data">

						<p><label>Nom du demandeur</label><input type="text" name="nomDemandeur" value="'.$infoVIP['nom'].'" /></p>

						<p><label>Prénom du demandeur</label><input type="text" name="prenomDemandeur" value="'.$infoVIP['prenom'].'" /></p>


						<p><label>Date</label><input type="date" name="dateDemande" /></p>

						<p><label>Description de la demande</label><textarea name="description" ></textarea></p>


	        	<p><button type="submit" name="envoyer">Envoyer</button></p>
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
