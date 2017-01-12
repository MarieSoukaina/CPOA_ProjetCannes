<?php
		$title='Modification VIP';
		$pageCSS='vip';
		ob_start(); //mise en tampon début
		echo '
		<div id="corpsMonCompte">

			<div id="boxInfoUser">
			<section>
			';
			echo '
				<h2>VIP : '.$infoVIP['nom'].' '.$infoVIP['prenom'].'</h2>';

					echo '<form method="post" action=index.php?page=gestionvip&action=modifiervip>
							Entrez les modifications que vous voulez faire sur le VIP :
							</br>

							<a>Nom : <input class="input" type="text" name="nom" value="'.$infoVIP['nom'].'"></a>
							<a>Prenom :  <input class="input" type="text" name="prenom" value="'.$infoVIP['prenom'].'"></a>
							<a>Date de Naissance : <input class="input" type="test" name="dateNaissance" value="'.$infoVIP['dateNaissance'].'"></a>
							<a>Type : <input class="input" type="text" name="typeVIP" value="'.$infoVIP['typeVIP'].'"></a>
							<a>Informations utiles : <input class="input" type="text" name="infoVIP" value="'.$infoVIP['infoUtile'].'"></a>
							<input type="hidden" name="idVIP" value="'.$infoVIP['id'].'">

							<input class="input" type="submit" name="validermodif" value="Valider la\les Modification(s)">

							</form>

			</section>
			</div>
			</div>
			';

  $content = ob_get_contents(); //récuprération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
