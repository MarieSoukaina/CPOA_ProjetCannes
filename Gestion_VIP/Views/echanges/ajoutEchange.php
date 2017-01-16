<?php
	$title='Ajout échange';
	$pageCSS='vip';
	ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Ajouter un échange</div>
					<form method="post" action="index.php?page=gestionechanges&action=ajouteEchange" enctype="multipart/form-data">

						<p><label for="expediteur"><span>Expéditeur</span><input type="text" name="expediteur" class="champInsertion" value="'.$infoVIP['nom'].'"/></label></p>

						<p><label for="dateEchange"><span>Date</span><input type="date" name="dateEchange" class="champInsertion"/></label></p>

						<p><label for="type"><span>Type</span><input type="type" name="type" class="champInsertion"/></label></p>

            <p><label for="destinataire"><span>Destinataire</span><input type="text" name="destinataire" class="champInsertion"/></label></p>

						<a href ="index.php?page=gestionechanges" id="boutonAnnuler">Annuler</a>
	        	<input type="submit" name="envoyer" value="Valider l\'ajout">
	    		</form>
			</div>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
