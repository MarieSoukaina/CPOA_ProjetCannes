<?php
    require_once ("Model.php");
    class Membre_staff extends Modele
    {

      public function getMembre_staff()
      {
        $requete = $this->execution('SELECT ... FROM ...');
      }

    }

?>
