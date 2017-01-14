<?php
/*----------------------------------------AJOUT D'UNE DEMANDE----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajoutDemande")
      {
  			if(isset($_POST['nomDemandeur']) && isset($_POST['prenomDemandeur']) && isset($_POST['dateDemande']) && isset($_POST['description']))
  			{

          $nom=$_POST['nomDemandeur'];
          $prenom=$_POST['prenomDemandeur'];
          $date=$_POST['dateDemande'];
          $description=$_POST['description'];
          //$echange=$_POST['echangeDemande'];
          $dm->ajouterDemande($nom,$prenom,$date,$description,NULL);
          header('Location: index.php?page=gestiondemandes');
          /*if( )
          {
            echo "pas ok";
            //echo '<script language="JavaScript">alert("Veuillez saisir des données valides et présentes dans la base !");
            //window.location.replace("index.php?page=tutorats");</script>';
          }*/
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
        elseif (isset($_POST['nomDemandeur']) && isset($_POST['prenomDemandeur']) && isset($_POST['description']) && isset($_POST['dateDemande']))
        {
          $dm->modifierDemande($_POST['nomDemandeur'],$_POST['prenomDemandeur'],$_POST['dateDemande'], $_POST['description'],$_POST['demandeID']);
          header('Location: index.php?page=gestiondemandes');
        }
  		}

/*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "suppressionDemande")
  		{
        $dm->supprimerDemande($_GET['demandeID']);
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
