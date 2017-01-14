<?php
    require_once ("Model.php");
    class DemandeManager extends Model
    {

      public function getDemande()
      {
        $req = $this->executerRequete('SELECT demandeID,nomDemandeur,prenomDemandeur,dateDemande,description,echangeDemande FROM demande');
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
      }

      public function getDemandeID($id)
      {
        $req = $this->executerRequete('SELECT demandeID,nomDemandeur,prenomDemandeur,dateDemande,description,echangeDemande FROM demande WHERE demandeID=?', array($id));
        $result=$req->fetch(PDO::FETCH_ASSOC); //on fait pas fecthAll mais fetch car on récupère qu'une seule ligne
        return $result;
      }

      public function ajouterDemande($nom,$prenom,$date,$description,$echange=NULL)
      {
        $req=$this->executerRequete('INSERT INTO demande (nomDemandeur,prenomDemandeur,dateDemande,description,echangeDemande) VALUES (?,?,?,?,?)',array($nom,$prenom,$date,$description,$echange));
      }


      public function modifierDemande($nom,$prenom,$date,$description,$id)
      {
        $req = $this->executerRequete('UPDATE demande SET nomDemandeur=?, prenomDemandeur=?, dateDemande=?, description=? WHERE demandeID=?', array($nom,$prenom,$date,$description,$id));
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
