<?php
	$title='Ajout VIP';
	$pageCSS='ajoutVIP';
	ob_start(); //mise en tampon début
		echo '
		<h1>Ajouter un échange</h1>
			<div class="formulaireAjoutTutorat">
					<form method="post" action="index.php?page=gestiondemandes&action=ajouteEchange" enctype="multipart/form-data">

						<p><label>Nom du demandeur</label><input type="text" name="nomEchange"/></p>

						<p><label>Date</label><input type="date" name="dateEchange" /></p>

						<p><label>Type</label><input type="type" name="type" /></p>

            <p><label>Destinataire</label>
            <select name="destinataire">
              <option value="Bon">Bon</option>
              <option value="Durant">Durant</option>
              <option value="Dupont">Dupont</option>
            </p>


	        	<p><button type="submit" name="envoyer">Envoyer</button></p>
	    		</form>
			</div>

			';
	$content = ob_get_contents(); //récuprération du tampon dons une var
	ob_end_clean(); // vide le tampon
	require_once("./Views/layout.php"); //appelle layout avec le nouveau content


?>
