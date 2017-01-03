<?php
		$title='Accueil VIP';
		$pageCSS='accueil';
		ob_start(); //mise en tempon début

		echo '

			<div id="corpsAccueil">

				INTERFACE DE GESTION DES VIP
				<div>
					<a href ="index.php?page=ajoutvip">Ajouter VIP</a>
					<a href ="index.php?page=tutorats">Supprimer</a>
					<a href ="index.php?page=tutorats">Modifier</a>
          <a href ="index.php?page=tutorats">Consulter une fiche</a>
				</div>

			</div>

			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
