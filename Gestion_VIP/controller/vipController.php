<?php
    require_once("Model/VIPManager.php");
    $vm = new VIPManager();

    if(!isset($_GET['action']))
    {
      header('Location: index.php?page=gestionvip&action=consultervip');
    }
/*----------------------------------------AJOUT D'UN VIP----------------------------------------*/
    elseif(isset($_GET['action']))
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
  				header('Location: index.php?page=gestionvip&action=consultervip');
  			}
  			else
  			{
  				require_once("./Views/ficheVIP/ajoutVIP.php");
  			}
      }

  /*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "modificationVIP")
  			{
          if(isset($_GET['idvip']))
          {
            $infoVIP = $vm->getInfoVIP($_GET['idvip']));
            require_once("Views/ficheVIP/modificationVIP.php");
          }
          elseif (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['typeVIP']) && isset($_POST['infoVIP']))
          {
            $vm->modifierVIP($_POST['nom'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['typeVIP'], $_POST['infoVIP'], $idVIP)
            header('Location: index.php?page=gestionvip&action=consultervip');
          }

  			}

  /*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "supprimervip")
  			{
  				if(isset($_GET['idvip']))
          {
            $vm->supprimerVIP($_GET['idvip']);
            header('Location: index.php?page=gestionvip&action=consultervip');
          }
  			}

  /*----------------------------------------CONSULTER LA FICHE D'UN VIP----------------------------------------*/
  			elseif ($_GET["action"] == "consultervip")
  			{
          $listeVIP = $vm->getAllVIP();
  				require_once("Views/ficheVIP/consultervip.php");
  			}
    }

?>
