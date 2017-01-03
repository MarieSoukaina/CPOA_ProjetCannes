<?php
		$title='Suppression VIP';
		$pageCSS='suppressionVIP';
		ob_start(); //mise en tampon début

		echo '

    ';

  $content = ob_get_contents(); //récupération du tampon dons une var
  ob_end_clean(); // vide le tampon
  require_once("./Views/layout.php"); //appelle layout avec le nouveau content

?>
