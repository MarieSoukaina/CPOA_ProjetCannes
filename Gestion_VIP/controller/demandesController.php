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
  				require_once("./Views/demandes/ajoutDemande.php");
  			}
      }
/*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "modificationDemande")
  		{
        echo"mod";
  		}

/*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "suppressionDemande")
  		{
        //$demandeID=$dm->getDemandeID($_GET["id"]);
        $dm->supprDemande($_GET["id"]);
        header('Location: index.php?page=gestiondemandes');
  		}

/*----------------------------------------CONSULTER LA FICHE D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "consultervip")
  		{
  				echo "test";
  		}
    }
    else
    {
      $demandes=$dm->getDemande();
      require_once("/Views/demandes/accueilDemande.php");
    }


?>
