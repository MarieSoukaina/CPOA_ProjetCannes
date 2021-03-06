<?php
session_name ('p1501615'); //nommer la session
session_start (); //start la session actuelle
require_once("model/StaffManager.php");
require_once("model/VIPManager.php");
require_once("model/DemandeManager.php");
require_once("model/EchangeManager.php");
$sm = new StaffManager();
$vm = new VIPManager();
$dm = new DemandeManager();
$em = new EchangeManager();

if( isset($_POST['identifiant']) && isset($_POST['motDePasse']) ) //on test que les login soit entrés
{


	$testConnexion = $sm->getUsers($_POST['identifiant'],$_POST['motDePasse']);
	if ($testConnexion == false) //si mauvais logins
	{
		require('Views/connexion.php');

	}
	else //sinon on ouvre une session utilisateur
	{

		$_SESSION ['Login'] = $_POST['identifiant']; // stocke la variable de session avec l'identifiant de l'utilisateur
		header('Location: index.php?page=accueil');

	}
}


if(isset($_SESSION ['Login'])){ //si un utilisateur est connecté

	if(isset($_GET["action"])){

		if ($_GET["action"] == "deconnexion"){

			$_SESSION = array();
			session_unset ();
			session_destroy ();
			header('Location: ./');
			exit(0);
		}
		/*	else
		{
				$erreur = 400;
				$messageErreur = "L'action n'est pas définie";
				require_once("Views/erreur.php");
		}*/
	}

	if(isset($_GET["page"])){

/*----------------------------------------ACCUEIL----------------------------------------*/
		if($_GET["page"] == "accueil"){
			require_once("Views/accueil.php");
		}

		elseif ($_GET["page"] == "gestionvip")
		{
			require_once("controller/vipController.php");
		}

		elseif ($_GET["page"] == "gestionechanges")
		{
			require_once("controller/echangesController.php");
		}

		elseif ($_GET["page"] == "gestiondemandes")
		{
			require_once("controller/demandesController.php");
		}

/*----------------------------------------ERREUR = PAGE INEXISTANTE----------------------------------------*/
		else
		{
			$erreur = 404;
			$messageErreur = "La page demandée n'existe pas ou a été supprimée";
			require_once("Views/erreur.php");
		}

	}
}

else //si personne n'est connecté, on afficher la page de connexion
{
		require_once("Views/connexion.php");
}
