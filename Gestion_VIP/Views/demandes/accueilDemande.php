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
						  <th>ID</th>
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
									echo '<tr><td>'.$demande['demandeID'].'</td>';
									echo '<td>'.$demande['date'].'</td>';
									echo '<td>'.$demande['description'].'</td>';
									echo '<td>test</td>';
									echo '<td>test</td>';
									echo '<td>test</td>';
									echo '<td><a href ="index.php?page=gestiondemandes&action=modificationDemande&id='.$demande['demandeID'].'" id="boutonsModifier">Modifier</a></td>';
									echo '<td><a href ="index.php?page=gestiondemandes&action=suppressionDemande&id='.$demande['demandeID'].'" id="boutonsSupprimer">Supprimer</a></td></tr>';

								}
				echo '</tbody>
				</table>
			</div>



			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
