<?php
		$title='Modification VIP';
		$pageCSS='vip';
		ob_start(); //mise en tampon début
		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Modification du VIP : '.$infoVIP['nom'].' '.$infoVIP['prenom'].'</div>
			';

					echo '<form method="post" action=index.php?page=gestionvip&action=modifiervip>

							<p><label for="nom"><span>Nom : </span><input class="champInsertion" type="text" name="nom" value="'.$infoVIP['nom'].'"></label></p>
							<p><label for="prenom"><span>Prenom : </span><input class="champInsertion" type="text" name="prenom" value="'.$infoVIP['prenom'].'"></label></p>
							<p><label for="dateNaissance"><span>Date de Naissance : </span><input class="champInsertion" type="test" name="dateNaissance" value="'.$infoVIP['dateNaissance'].'"></label></p>
							<p><label for="typeVIP"><span>Type : </span><input class="champInsertion" type="text" name="typeVIP" value="'.$infoVIP['typeVIP'].'"></label></p>
							<p><label for="infoVIP"><span>Informations utiles : </span><input class="champInsertion" type="text" name="infoVIP" value="'.$infoVIP['infoUtile'].'"></label></p>
							<input type="hidden" name="idVIP" value="'.$infoVIP['id'].'">

							<a href ="index.php?page=gestionvip&action=consultervip" id="boutonAnnuler">Annuler</a>
							<input class="input" type="submit" name="validermodif" value="Valider la\les Modification(s)">

							</form>
			</div>
			</div>
			';

  $content = ob_get_contents(); //récuprération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
