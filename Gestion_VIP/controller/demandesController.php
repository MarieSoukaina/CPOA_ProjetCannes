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
        elseif(isset($_GET['idvip']))
        {
          $infoVIP = $vm->getInfoVIP($_GET['idvip']);
          require_once("Views/demandes/ajoutDemande.php");
        }
  			else
  			{
          $infoVIP['nom']='';
          $infoVIP['prenom']='';
  				require_once("./Views/demandes/ajoutDemande.php");
  			}
      }
/*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  		elseif ($_GET["action"] == "modificationDemande")
  		{
        echo "string";
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
