<?php
		$title='Ajout VIP';
		$pageCSS='vip';
		ob_start(); //mise en tampon début

		echo '
		<div class="formulaireAjoutTutorat">
			<div class="formulaireAjoutTutorat-entete">Ajout d\'un VIP</div>
				<form method="post" action=index.php?page=gestionvip&action=ajoutvip>

					<p><label for="nomVIP"><span>Nom : </span><input type="text" name="nomVIP" class="champInsertion" placeholder="Nom"></label></p>

					<p><label for="prenomVIP"><span>Prenom : </span><input type="text" name="prenomVIP" class="champInsertion" placeholder="Prenom"></label></p>

					<p><label for="dateNaissance"><span>Date de Naissance : </span><input type="date" name="dateNaissance" class="champInsertion" placeholder="23/07/1991"></label></p>

					<p><label for="typeVIP"><span>Type : </span><input type="text" name="typeVIP" class="champInsertion" placeholder="ex : Acteur"></label></p>

					<p><label for="infoVIP"><span>Informations utiles : </span><input type="text" name="infoVIP" class="champInsertion"></label></p>

					<a href ="index.php?page=gestionvip&action=consultervip" id="boutonAnnuler">Annuler</a>
					<input type="submit" value="Valider l\'ajout">

				</form>
			</div>
		</div>
    ';

  $content = ob_get_contents(); //récuprération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
