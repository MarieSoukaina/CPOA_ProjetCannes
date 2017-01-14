<?php
/*----------------------------------------AJOUT D'UN ECHANGE----------------------------------------*/
    if(isset($_GET['action']))
    {
      if ($_GET["action"] == "ajouteEchange")
      {
        echo "ajout échange";

      }
/*----------------------------------------MODIFICATION D'UN VIP----------------------------------------*/
      elseif ($_GET["action"] == "modificationEchange")
  		{
        echo "modifier echange";

  		}

/*----------------------------------------SUPPRESSION D'UN VIP----------------------------------------*/
      elseif ($_GET["action"] == "suppressionEchange")
  		{
        echo "supprimer ECHANGE";

  		}

    }
    else
    {
      $echanges=$em->getEchange();
      require_once("/Views/echanges/accueilEchange.php");
    }


?>
