<?php
		$title='Messagerie';
		$pageCSS='vip';
		ob_start(); //mise en tempon début

		echo '

		<div id="listeBoutons">
			<a href ="index.php?page=gestionechanges&action=ajouteEchange" id="boutonAjoutVIP">Ajouter un échange</a>
		</div>

		<div id="tablecours">
				<table>
					<thead>
						<tr>
							<th>Date de la echange</th>
							<th>Type de la echange</th>
							<th>Destinataire</th>
							<th>Modifier</th>
							<th>Supprimer</th>

						</tr>
					</thead>
					<tbody>';
						foreach ($echanges as $echange)
						{
							echo '<td>'.$echange['vip'].'</td>';
							echo '<td>'.$echange['dateEchange'].'</td>';
							echo '<td>'.$echange['type'].'</td>';
							echo '<td>'.$echange['destinataire'].'</td>';
							echo '<td><a href ="index.php?page=gestionechanges&action=modificationEchange&echangeID='.$echange['echangeID'].'" id="boutonsechange"><img class="poubelle" src="media/images/modifier.png" alt="poubelle"></a></td>';
							echo '<td><a href ="index.php?page=gestionechanges&action=suppressionEchange&echangeID='.$echange['echangeID'].'" id="boutonsechange"><img class="poubelle" src="media/images/poubelle.png" alt="poubelle"></a></td></tr>';

						}
				echo '</tbody>
				</table>
			</div>


    ';

  $content = ob_get_contents(); //récuprération du tempon dons une var
  ob_end_clean(); // vide le tempon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
