<?php
		$title='Accueil échange';
		$pageCSS='vip';
		ob_start(); //mise en tampon début

		echo '
		</br>
		</br>
		<div id="listeBoutons">
			<a href ="index.php?page=gestionechanges&action=ajouteEchange" id="boutonAjoutVIP">Ajouter un échange</a>
		</div>

		<div id="tablecours">
				<table>
					<thead>
						<tr>
							<th>Expéditeur</th>
							<th>Contenu</th>
							<th>Date</th>
							<th>Type</th>
							<th>Destinataire</th>
							<th>Mod.</th>
							<th>Supp.</th>

						</tr>
					</thead>
					<tbody>';
						foreach ($echanges as $echange)
						{
							echo '<td>'.$echange['expediteur'].'</td>';
							echo '<td>'.$echange['contenuEchange'].'</td>';
							echo '<td>'.$echange['dateEchange'].'</td>';
							echo '<td>'.$echange['type'].'</td>';
							echo '<td>'.$echange['destinataire'].'</td>';
							echo '<td class="suppr"><a href ="index.php?page=gestionechanges&action=modificationEchange&echangeID='.$echange['echangeID'].'" id="boutonsechange"><img class="poubelle" src="media/images/modifier.png" alt="poubelle"></a></td>';
							echo '<td class="suppr"><a href ="index.php?page=gestionechanges&action=suppressionEchange&echangeID='.$echange['echangeID'].'" id="boutonsechange"><img class="poubelle" src="media/images/poubelle.png" alt="poubelle"></a></td></tr>';

						}
				echo '</tbody>
				</table>
			</div>


    ';

  $content = ob_get_contents(); //récuprération du tempon dons une var
  ob_end_clean(); // vide le tempon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
