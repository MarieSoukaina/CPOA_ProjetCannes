<?php
	$title='Modification échange';
	$pageCSS='vip';
	ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Modification d\'un échange</div>
					<form method="post" action="index.php?page=gestionechanges&action=modificationEchange" enctype="multipart/form-data">

						<p><label for="expediteur"><span>Expéditeur :</span><input type="text" name="expediteur" class="champInsertion" value="'.$infosEchange['expediteur'].'"/></label></p>

						<p><label for="contenuEchange"><span>Contenu :</span><textarea name="contenuEchange" class="champTextArea"/>'.$infosEchange['contenuEchange'].'</textarea></label></p>

						<p><label for="dateEchange"><span>Date :</span><input type="date" name="dateEchange" class="champInsertion" value="'.$infosEchange['dateEchange'].'" /></label></p>

						<p><label for="type"><span>Type :</span><input type="type" name="type" class="champInsertion" value="'.$infosEchange['type'].'"/></label></p>

						<p><label for="destinataire"><span>Destinataire :</span><input type="text" name="destinataire" class="champInsertion" value="'.$infosEchange['destinataire'].'"/></label></p>

						<input type="hidden" name="echangeID" value="'.$infosEchange['echangeID'].'">

						<a href ="index.php?page=gestionechanges" id="boutonAnnuler">Annuler</a>
	        	<input type="submit" name="envoyer" value="Valider la modification">
	    		</form>
			</div>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
