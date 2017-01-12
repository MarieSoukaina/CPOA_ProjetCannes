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
/*
      public function ajouterDemande($nom,$prenom,$date,$description)
      {
        $req=$this->executerRequete('INSERT INTO demande (nom,prenom,date,description) VALUES (?,?,?,?)',array($nom,$prenom,$date,$description);
      }

*/
      public function modifierDemande()
      {
        $req = $this->executerRequete('UPDATE FROM demande SET demandeID=?, date=?, description=? WHERE demandeID=?', array($id));
      }

      public function supprimerDemande($id)
      {
        $req = $this->executerRequete('DELETE FROM demande WHERE demandeID=?', array($id));
      }

    }

?>
