<?php
    require_once ("Model.php");
    class Action extends Modele
    {

      public function getAction()
      {
        $requete = $this->execution('SELECT ... FROM ...');
      }

    }

?>
