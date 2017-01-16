<?php
/*----------------------------------------AJOUT D'UN ECHANGE----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajouteEchange")
      {

        if(isset($_POST['expediteur']) && isset($_POST['contenuEchange']) && isset($_POST['dateEchange']) && isset($_POST['type']) && isset($_POST['destinataire']))
  			{
          $expediteur=$_POST['expediteur'];
          $contenu=$_POST['contenuEchange'];
          $dateEchange=$_POST['dateEchange'];
          $type=$_POST['type'];
          $destinataire=$_POST['destinataire'];
          $ajouter = $em->ajouterEchange($expediteur,$contenuEchange,$dateEchange,$type,$destinataire);
          header('Location: index.php?page=gestionechanges');
        }
        elseif(isset($_GET['idvip']))
        {
          $infoVIP = $vm->getInfoVIP($_GET['idvip']);
          require_once("/Views/echanges/ajoutEchange.php");
        }
        else
        {
          $infoVIP['nom']='';
          $infoVIP['prenom']='';
          require_once("/Views/echanges/ajoutEchange.php");
        }

      }
/*----------------------------------------MODIFICATION D'UN ECHANGE----------------------------------------*/
      elseif ($_GET["action"] == "modificationEchange")
  		{
        if(isset($_GET['echangeID']))
        {
          $infosEchange=$em->getEchangeID($_GET['echangeID']);
          require_once("Views/echanges/modificationEchange.php");
        }
          elseif (isset($_POST['expediteur']) && isset($_POST['contenuEchange']) &&isset($_POST['dateEchange']) && isset($_POST['type']) && isset($_POST['destinataire']))
        {
          echo "string";
          $em->modifierEchange($_POST['expediteur'],$_POST['contenuEchange'],$_POST['dateEchange'],$_POST['type'], $_POST['destinataire'],$_POST['echangeID']);
          header('Location: index.php?page=gestionechanges');
        }
  		}

/*----------------------------------------SUPPRESSION D'UN ECHANGE----------------------------------------*/
      elseif ($_GET["action"] == "suppressionEchange")
  		{
        $em->supprimerEchange($_GET['echangeID']);
        header('Location: index.php?page=gestionechanges');
  		}

    }
    else
    {
      $echanges=$em->getEchange();
      require_once("/Views/echanges/accueilEchange.php");
    }


?>
