<?php
	$title='Ajout VIP';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<h1>Ajouter une demande d\'un VIP</h1>
			<div class="formulaireAjoutTutorat">
					<form method="post" action="index.php?page=gestiondemandes&action=ajoutDemande" enctype="multipart/form-data">

		        <p><label>Nom du VIP* </label></p><p><input type="text" name="nom" value="'.$infoVIP['nom'].'" required/></p>

		        <p><label>Prenom du VIP* </label></p><p><input type="text" name="prenom" value="'.$infoVIP['prenom'].'" required/></p>

						<p><label>Date</label></p><p><input type="date" name="date"/></p>

						<label>Mail</label>
		        <input type="radio" name="echange" value="mail" required/>
						<label>Lettre</label>
		        <input type="radio" name="echange" value="lettre" required/>
						<label>Oral</label>
		        <input type="radio" name="echange" value="oral" required/>
						<label>Téléphone</label>
		        <input type="radio" name="echange" value="telephone" required/>

						<p><label>Description de la demande</label></p><p><textarea name="description"></textarea></p>

	        	<p><button type="submit" name="envoyer">Envoyer</button></p>
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
