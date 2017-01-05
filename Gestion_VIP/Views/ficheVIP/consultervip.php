<?php
		$title='Consulter VIP';
		$pageCSS='vip';
		ob_start(); //mise en tempon début

		echo '

			<div id="corpsAccueil">

				INTERFACE DE GESTION DES VIP, DES DEMANDES ET DES ECHANGES

			</div>

			<div name="listeVIP">
			<table>
				<thead>
					<tr>
							<th data-field="id">#</th>
							<th data-field="nom">Nom</th>
							<th data-field="prenom">Prénom</th>
							<th data-field="dateNaissance">Date de Naissance</th>
							<th data-field="type">Type du VIP</th>
							<th data-field="info">Informations</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($listeVIP as $vip)
			{
				echo'
				<tr>
					<td>'.$vip['id'].'</td>
					<td>'.$vip['nom'].'</td>
					<td>'.$vip['prenom'].'</td>
					<td>'.$vip['dateNaissance'].'</td>
					<td>'.$vip['typeVIP'].'</td>
					<td>'.$vip['infoUtile'].'</td>
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
