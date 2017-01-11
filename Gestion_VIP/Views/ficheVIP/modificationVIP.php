<?php
		$title='Modification VIP';
		$pageCSS='vip';
		ob_start(); //mise en tampon début

		echo '
		<div id="corpsMonCompte">

			<div id="boxInfoUser">
			<section>
			';
			echo '<ul>
				<li><h2>'.$infoVIP[''].'</h2></li>';

					echo '<form method="post" action=index.php?page=gestionvip&action=modificationVIP">
							Entrez les modifications que vous voulez faire sur le VIP :
							</br>
							<ul>
							<li><a>Nom : <input class="input" type="text" name="nom" value="'.$infoVIP[''].'"></a></li>
							<li><a>Prenom :  <input class="input" type="text" name="prenom" value="'.$infoVIP[''].'"></a></li>
							<li><a>Date de Naissance : <input class="input" type="test" name="dateNaissance" value="'.$infoVIP[''].'"></a></li>
							<li><a>Type : <input class="input" type="text" name="typeVIP" value="'.$infoVIP[''].'"></a></li>
							<li><a>Informations utiles : <input class="input" type="text" name="infoVIP" value="'.$infoVIP[''].'"></a></li>
							<input type="hidden" value="'.$infoVIP['id'].'">

							<li><input class="input" type="submit" name="validermodif" value="Valider la\les Modification(s)"></li>
							</ul>
							</form>

			</section>
			</div>
			</div>
			';

  $content = ob_get_contents(); //récuprération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
