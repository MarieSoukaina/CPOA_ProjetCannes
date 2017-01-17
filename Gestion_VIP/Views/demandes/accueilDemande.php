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

			<div id="tablecours">
				<table>
					<thead>
						<tr>
							<th>Nom demandeur</th>
							<th>Prénom demandeur</th>
							<th>Description</th>
							<th>Date</th>
							<th>Mod.</th>
							<th>Supp.</th>

						</tr>
					</thead>
					<tbody>';
								foreach ($demandes as $demande)
								{
									echo '<tr><td>'.$demande['nomDemandeur'].'</td>';
									echo '<td>'.$demande['prenomDemandeur'].'</td>';
									echo '<td>'.$demande['description'].'</td>';
									echo '<td>'.$demande['dateDemande'].'</td>';
									echo '<td class="suppr"><a href ="index.php?page=gestiondemandes&action=modificationDemande&demandeID='.$demande['demandeID'].'" id="boutonsDemande"><img class="poubelle" src="media/images/modifier.png" alt="poubelle"></a></td>';
									echo '<td class="suppr"><a href ="index.php?page=gestiondemandes&action=suppressionDemande&demandeID='.$demande['demandeID'].'" id="boutonsDemande"><img class="poubelle" src="media/images/poubelle.png" alt="poubelle"></a></td></tr>';

								}
				echo '</tbody>
				</table>
			</div>



			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
