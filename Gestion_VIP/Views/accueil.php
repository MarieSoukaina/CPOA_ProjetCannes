<?php
		$title='Accueil';
		$pageCSS='accueil';
		ob_start(); //mise en tempon début

		echo '
			<p> DECONNEXION <p>

			<div id="corpsAccueil">

				<article id="coursTutorat">

					<div class="box1">

						<div id="bandeau" >
							<h1>Derniers cours</h1>
						</div>

						<div id="boxCoursAccueil">
							<asside class="matiere">

								<h2>Mathématiques</h2>
							</asside>
							<p><b>Semestre 1 Chapitre 3:</b></p>
							<p>Les prédicas</p>
							<p>Monsieur Jaloux</p>
						</div>

						<div id="boxCoursAccueil">
							<asside class="matiere">
								<h2>Java</h2>
							</asside>
							<p><b>Semestre 2 Chapitre 7:</b></p>
							<p>Les notifications</p>
							<p>Monsieur Belkathir</p>
						</div>

						<a href=""><b>+</b>Demande de cours</a>

					</div>

					<div class="box1">

						<div id="bandeau" >
							<h1>Tutorat</h1>
						</div>

						<div id="boxTutoratAccueil">
						</div>

						<div id="boxTutoratAccueil">
						</div>

						<a href=""><b>+</b>Demande de tutorat</a>

					</div>

				</article>

			</div>

			';

		$content = ob_get_contents(); //récuprération du tempon dons une var
		ob_end_clean(); // vide le tempon
		require_once("./Views/layout.php"); //appelle layout avec le nouveau content



?>
