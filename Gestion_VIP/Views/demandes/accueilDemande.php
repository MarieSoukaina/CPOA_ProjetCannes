<?php
		$title='Accueil Demande';
		$pageCSS='accueil';
		ob_start(); //mise en tempon début

		echo '

			<div id="corpsAccueil">

				INTERFACE DE GESTION DES DEMANDES
				<div>
					<a href ="index.php?page=gestiondemandes&action=ajoutdemandes">Ajouter une demande</a>
					<a href ="index.php?page=supprimervip">Supprimer</a>
					<a href ="index.php?page=modifiervip">Modifier</a>
          <a href ="index.php?page=consultervip">Consulter une fiche</a>
				</div>

			</div>

			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
