<?php
		$title='Accueil Demande';
		$pageCSS='vip';
		ob_start(); //mise en tempon début

		echo '
			</br>
			</br>
			<div id="listeBoutons">
					<a href ="index.php?page=gestiondemandes&action=ajoutDemande" id="boutonAjoutVIP">Ajouter une demande</a>
			</div>

			<div id="demande">
				<table id="tablecours">
					<thead>
						<tr>
						  <th>ID</th>
							<th>Nom du demandeur</th>
							<th>Type</th>
							<th>Description</th>
							<th>Date de la demande</th>
							<th>Responsable</th>
							<th>Mod.</th>
							<th>Suppr.</th>
						</tr>
					</thead>
					<tbody>';
								foreach ($demandes as $demande)
								{
									echo '<tr><td>'.$demande['demandeID'].'</td>';
									echo '<td>'.$demande['responsableID'].'</td>';
									echo '<td>'.$demande['description'].'</td>';
									echo '<td>'.$demande['date'].'</td>';
									echo '<td>test</td>';
									echo '<td>test</td>';
									echo '<td class="suppr"><a href ="index.php?page=gestiondemandes&action=modificationDemande&id='.$demande['demandeID'].'" id="boutonsDemande"><img class="poubelle" src="media/images/modifier.png" alt="poubelle"></a></td>';
									echo '<td class="suppr"><a href ="index.php?page=gestiondemandes&action=suppressionDemande&id='.$demande['demandeID'].'" id="boutonsDemande"><img class="poubelle" src="media/images/poubelle.png" alt="poubelle"></a></td></tr>';

								}
				echo '</tbody>
				</table>
			</div>



			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
