<?php
/*----------------------------------------AJOUT D'UN VIP----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajoutvip")
      {
  			if(isset($_POST['nomVIP']) && isset($_POST['prenomVIP']) && isset($_POST['dateNaissance']) && isset($_POST['typeVIP']) && isset($_POST['infoVIP']))
  			{
  				$dateMauvaisFormat = $_POST['dateNaissance'];
  				$jour = substr($dateMauvaisFormat, 0, 2);
  				$mois = substr($dateMauvaisFormat, 3, 2);
  				$annee = substr($dateMauvaisFormat, 6, 4);
  				$dateNaissanceBonFormat = ''.$annee.'-'.$mois.'-'.$jour.'';

  				$vm->ajouterVIP($_POST['nomVIP'], $_POST['prenomVIP'], $dateNaissanceBonFormat, $_POST['typeVIP'], $_POST['infoVIP']);
  				echo 'Ajout effectué !'; //TODO : mieux gerer la redirection après ajout
  			}
  			else
  			{
  				require_once("../Views/ficheVIP/ajoutVIP.php");
  			}
      }

  /*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "modificationVIP")
  			{
  				require_once("Views/ficheVIP/modificationVIP.php");
  			}

  /*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "suppressionVIP")
  			{
  				require_once("Views/ficheVIP/suppressionVIP.php");
  			}

  /*----------------------------------------CONSULTER LA FICHE D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "consultervip")
  			{
  				echo "test";
  			}
    }

?>