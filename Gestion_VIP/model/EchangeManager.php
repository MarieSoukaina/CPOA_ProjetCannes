<?php
    require_once ("Model.php");
    class EchangeManager extends Model
    {

      public function getEchange()
      {
        $req=$this->executerRequete('SELECT * FROM echange');
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
      }

    }



?>
