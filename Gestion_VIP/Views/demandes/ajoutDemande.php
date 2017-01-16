<?php
	$title='Ajout demande';
	$pageCSS='vip';
	ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Ajout d\'une demande spécifique d\'un VIP</div>
					<form method="post" action="index.php?page=gestiondemandes&action=ajoutDemande" enctype="multipart/form-data">

						<p><label for="choixJourTutorat"><span>Nom du demandeur :</span><input type="text" name="nomDemandeur" class="champInsertion" value="'.$infoVIP['nom'].'" /></label></p>

						<p><label for="choixJourTutorat"><span>Prénom du demandeur :</span><input type="text" name="prenomDemandeur" class="champInsertion" value="'.$infoVIP['prenom'].'" /></label></p>


						<p><label for="choixJourTutorat"><span>Date :</span><input type="date" name="dateDemande" class="champInsertion" /></label></p>

						<p><label for="choixJourTutorat"><span>Description de la demande :</span><textarea name="description" class="champTextArea"></textarea></label></p>

						<a href ="index.php?page=gestiondemandes" id="boutonAnnuler">Annuler</a>
	        	<input type="submit" name="envoyer" value="Valider l\'ajout">
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
