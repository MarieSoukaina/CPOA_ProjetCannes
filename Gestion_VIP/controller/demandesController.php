<?php
/*----------------------------------------AJOUT D'UNE DEMANDE----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajoutDemande")
      {
  			if(isset($_POST['nomVIP']) && isset($_POST['prenomVIP']) && isset($_POST['dateNaissance']) && isset($_POST['typeVIP']) && isset($_POST['infoVIP']))
  			{

  				echo 'testaaaaaa!'; //TODO : mieux gerer la redirection après ajout
  			}
  			else
  			{
  				require_once("/Views/demandes/ajoutDemande.php");
  			}
      }

  /*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "modificationVIP")
  		{
  				echo"moooooodddd";
  		}

  /*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "suppressionDemande")
  		{
  			echo"sup";
  		}

  /*----------------------------------------CONSULTER LA FICHE D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "consultervip")
  		{
  				echo "test";
  		}
    }
    else
    {
      require_once("/Views/demandes/accueilDemande.php");
    }


?>
