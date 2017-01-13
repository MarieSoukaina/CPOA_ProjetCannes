<?php
/*----------------------------------------AJOUT D'UNE DEMANDE----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajoutDemande")
      {
  			if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['echange']))
  			{
          $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $date=$_POST['date'];
          $echange=$_POST['echange'];
          $description=$_POST['description'];
          /*
          $dm->ajouterDemande();
          */
  			}
  			else
  			{
  				require_once("./Views/demandes/ajoutDemande.php");
  			}
    }
/*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  	elseif ($_GET["action"] == "modificationDemande")
  		{
        if(isset($_GET['demandeID']))
        {
          $infosDemande=$dm->getDemandeID($_GET['demandeID']);
          $membrestaff=$dm->getMembre();
          require_once("Views/demandes/modificationDemande.php");
        }
        elseif (isset($_POST['nomDemandeur']) && isset($_POST['echange']) && isset($_POST['description']) && isset($_POST['dateDemande']) && isset($_POST['nomMembre']))
        {
          $dm->modifierDemande($_POST['dateDemande'], $_POST['description'], $_POST['echange'], $_POST['nomMembre'], $_POST['nomDemandeur'], $_POST['demandeID']);
          header('Location: index.php?page=gestiondemandes');
        }
  		}

/*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "suppressionDemande")
  		{
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
