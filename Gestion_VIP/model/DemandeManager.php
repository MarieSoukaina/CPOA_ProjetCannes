<?php
    require_once ("Model.php");
    class DemandeManager extends Model
    {

      public function getDemande()
      {
        $req = $this->executerRequete('SELECT demandeID,dateDemande,description,type,nomMembre,nom FROM demande,membrestaff,echange,vip WHERE responsableID=membrestaff.id AND demande.echangeID=echange.echangeID AND demandeurID=vip.id');
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
      }

      public function getDemandeID($id)
      {
        $req = $this->executerRequete('SELECT demandeID,dateDemande,description,type,nomMembre,nom FROM demande,membrestaff,echange,vip WHERE responsableID=membrestaff.id AND demande.echangeID=echange.echangeID AND demandeurID=vip.id AND demandeID=?', array($id));
        $result=$req->fetch(PDO::FETCH_ASSOC); //on fait pas fecthAll mais fetch car on récupère qu'une seule ligne
        return $result;
      }
/*
      public function ajouterDemande($nom,$prenom,$date,$description)
      {
        $req=$this->executerRequete('INSERT INTO demande (nom,prenom,date,description) VALUES (?,?,?,?)',array($nom,$prenom,$date,$description);
      }

*/
      public function modifierDemande($date,$description,$type,$nonMembre,$nom,$id)
      {
        $req = $this->executerRequete('UPDATE demande,membrestaff,echange,vip SET dateDemande=?, description=?, type=?, nomMembre=?, nom=? WHERE demandeID=?', array($date,$description,$type,$nonMembre,$nom,$id));
      }

      public function supprimerDemande($id)
      {
        $req = $this->executerRequete('DELETE FROM demande WHERE demandeID=?', array($id));
      }

      public function getMembre()
      {
        $req = $this->executerRequete('SELECT motDePasse FROM membrestaff');
        $result=$req->fetch(PDO::FETCH_ASSOC); //on fait pas fecthAll mais fetch car on récupère qu'une seule ligne
        return $result;
      }


    }

?>
