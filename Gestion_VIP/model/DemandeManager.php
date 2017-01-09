<?php
    require_once ("Model.php");
    class DemandeManager extends Model
    {

      public function getDemande()
      {
        $req = $this->executerRequete('SELECT * FROM demande');
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
      }

      public function supprDemande($id)
      {
        $req = $this->executerRequete('DELETE FROM demande WHERE demandeID=?', array($id));
      }

      public function getDemandeID($id)
      {
        $req = $this->executerRequete('SELECT demandeID FROM demande WHERE demandeID=?', array($id));
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result['demandeID'];
      }

    }

?>
