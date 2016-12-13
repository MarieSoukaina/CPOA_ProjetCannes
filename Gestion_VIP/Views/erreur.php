<?php
	$title = 'Erreur';

	ob_start();
	echo '<h1>Une erreur est survenue ! Dommage...</h1>';

	$content = ob_get_contents();
	ob_end_clean();
	require_once("layout.php");
?>
