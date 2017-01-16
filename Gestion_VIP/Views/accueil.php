<?php
		$title='Accueil';
		$pageCSS='accueil';
		ob_start(); //mise en tempon début

		echo '

			<div id="corpsAccueil">

				<h1>INTERFACE DE GESTION POUR LE PERSONNEL DU FESTIVAL</h1>
				<br>
				<img id="logoFestival" src="./media/images/festival_logo.png" alt="logo">
			</div>

			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
