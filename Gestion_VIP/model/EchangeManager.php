<?php
    require_once ("Model.php");
    class EchangeManager extends Model
    {

      public function getEchange()
      {
        $requete = $this->executerRequete('SELECT * FROM echanges ');
      }

    }



?>
