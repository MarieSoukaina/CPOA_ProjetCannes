<?php
		$title='Accueil Demande';
		$pageCSS='demande';
		ob_start(); //mise en tempon début

		echo '

			<div id="listeBoutons">
					<a href ="index.php?page=gestiondemandes&action=ajoutDemande" id="boutonsDemande">Ajouter une demande</a>
			</div>

			<div id="demande">
				<table id="tablecours">
					<thead>
						<tr>
							<th>Nom du demandeur</th>
							<th>Type de la demande</th>
							<th>Description de la demande</th>
							<th>Date de la demande</th>
							<th>Responsable de la demande</th>
						</tr>
					</thead>
					<tbody>';
								foreach ($demandes as $demande)
								{
									echo '<td>'.$demande['nom'].'</td>';
									echo '<td>'.$demande['type'].'</td>';
									echo '<td>'.$demande['description'].'</td>';
									echo '<td>'.$demande['dateDemande'].'</td>';
									echo '<td>'.$demande['nomMembre'].'</td>';
									echo '<td><a href ="index.php?page=gestiondemandes&action=modificationDemande&demandeID='.$demande['demandeID'].'" id="boutonsDemande">Modifier</a></td>';
									echo '<td><a href ="index.php?page=gestiondemandes&action=suppressionDemande&demandeID='.$demande['demandeID'].'" id="boutonsDemande">Supprimer</a></td></tr>';

								}
				echo '</tbody>
				</table>
			</div>



			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
