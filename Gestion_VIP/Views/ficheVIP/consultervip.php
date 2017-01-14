<?php
		$title='Consulter VIP';
		$pageCSS='vip';
		ob_start(); //mise en tempon début

		echo '
		</br>
		</br>

		<div id="listeBoutons">
			<a href="index.php?page=gestionvip&action=ajoutvip" id="boutonAjoutVIP">Ajouter un VIP</a>
		</div>

			<div name="listeVIP">
			<table>
				<thead>
					<tr>
							<th data-field="nom">Nom</th>
							<th data-field="prenom">Prénom</th>
							<th data-field="dateNaissance">Date de Naissance</th>
							<th data-field="type">Type du VIP</th>
							<th data-field="info">Informations</th>
							<th>Mod.</th>
							<th>Suppr.</th>
							<th>Dem.</th>
							<th>Ech.</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($listeVIP as $vip)
			{
				echo'
				<tr>
					<td>'.$vip['nom'].'</td>
					<td>'.$vip['prenom'].'</td>
					<td>'.$vip['dateNaissance'].'</td>
					<td>'.$vip['typeVIP'].'</td>
					<td>'.$vip['infoUtile'].'</td>
					<td class="suppr"><a href="index.php?page=gestionvip&action=modifiervip&idvip='.$vip['id'].'"><img class="poubelle" src="media/images/modifier.png" alt="poubelle"></a></td>
					<td class="suppr"><a href="index.php?page=gestionvip&action=supprimervip&idvip='.$vip['id'].'"><img class="poubelle" src="media/images/poubelle.png" alt="poubelle"></a></td>
					<td class="suppr"><a href="index.php?page=gestiondemandes&action=ajoutDemande&idvip='.$vip['id'].'"><img class="poubelle" src="media/images/ajouterdemande.png" alt="poubelle"></a></td>
					<td class="suppr"><a href="index.php?page=gestiondemandes&action=ajoutDemande&idvip='.$vip['id'].'"><img class="poubelle" src="media/images/ajouterechange.png" alt="poubelle"></a></td>
				</tr>
				';
			}


			echo'
				</tbody>
			</table>
			</div>

			';


		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
