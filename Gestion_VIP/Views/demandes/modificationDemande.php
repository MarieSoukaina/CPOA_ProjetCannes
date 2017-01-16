<?php
	$title='Modification demande';
	$pageCSS='vip';
	ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Modification d\'une demande</div>
					<form method="post" action="index.php?page=gestiondemandes&action=modificationDemande" enctype="multipart/form-data">

						<p><label for="nomDemandeur"><span>Nom du demandeur</span><input type="text" name="nomDemandeur" class="champInsertion" value="'.$infosDemande['nomDemandeur'].'"/></label></p>

						<p><label for="prenomDemandeur"><span>Prénom du demandeur</span><input type="text" name="prenomDemandeur" class="champInsertion" value="'.$infosDemande['prenomDemandeur'].'"/></label></p>

						<p><label for="dateDemande"><span>Date</span><input type="date" name="dateDemande" class="champInsertion" value="'.$infosDemande['dateDemande'].'"/></label></p>

						<p><label for="description"><span>Description de la demande</span><textarea name="description" class="champTextArea" >'.$infosDemande['description'].'</textarea></label></p>

						<input type="hidden" name="demandeID" value="'.$infosDemande['demandeID'].'">

						<a href ="index.php?page=gestiondemandes" id="boutonAnnuler">Annuler</a>
						<input type="submit" name="envoyer" value="Valider la modification">

	    		</form>
			</div>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
