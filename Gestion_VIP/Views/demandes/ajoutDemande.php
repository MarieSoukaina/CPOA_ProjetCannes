<html>
	<head>
		<title>Ajouter demande</title>

		<link href="./style/inscriptionConnexion.css" media="all" rel="stylesheet " type="text/css" />
	</head>

	<?php

			echo '
			<div id="boxLogin" class="inscri">
			<h1>Ajouter une demande</h1>
			<div id="WarpperForm">
					<form method="post" action="envoieFormulaire.php">

	        <label>Nom du VIP*</label>
						<input type="text" name="nom" required/>

	        <label>Prenom du VIP*</label>
						<input type="text" name="prenom"  required/>



					<label>Date</label>
						<input type="text" name="mail"  />



						<div class="rbutton"><label>Mail</label>
		        <input class="radioB" type="radio" name="echange" value="mail" required/>

						<label>Lettre</label>
		        <input class="radioB" type="radio" name="echange" value="lettre" required/></div>

						<div class="rbutton"><label>Oral</label>
		        <input class="radioB" type="radio" name="echange" value="oral" required/>

						<label>Téléphone</label>
		        <input class="radioB" type="radio" name="echange" value="telephone" required/></div>


	        <button type="submit" name="envoyer">Envoyer</button>
	    </form>
			</div>
			</div>

				';

	?>
