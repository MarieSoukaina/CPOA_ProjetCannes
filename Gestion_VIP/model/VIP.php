<?php
    require_once ("Model.php");
    class VIP extends Modele
    {

      public function ajouterVIP()
      {
        $requete = $this->execution('INSERT INTO ... VALUES');
      }

      public function modifierVIP()
      {
        $requete = $this->execution('UPDATE ... SET .... WHERE....');
      }

      public function supprimerVIP()
      {
        $requete = $this->execution('DELETE FROM ... WHERE ... ');
      }

      public function getVIP()
      {
        $requete = $this->execution('SELECT ... FROM ...');
      }

    }
?>
