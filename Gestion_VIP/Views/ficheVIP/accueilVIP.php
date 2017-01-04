<?php
		$title='Accueil VIP';
		$pageCSS='accueil';
		ob_start(); //mise en tempon début

		echo '

			<div id="corpsAccueil">

				INTERFACE DE GESTION DES VIP
				<div>
					<a href ="index.php?page=gestionvip&action=ajoutvip">Ajouter VIP</a>
					<a href ="index.php?page=gestionvip&action=supprimervip">Supprimer</a>
					<a href ="index.php?page=gestionvip&action=modifiervip">Modifier</a>
          <a href ="index.php?page=gestionvip&action=consultervip">Consulter une fiche</a>
				</div>

			</div>

			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
