<?php
    require_once ("Model.php");
    class EchangeManager extends Model
    {

      public function getEchange()
      {
        $req=$this->executerRequete('SELECT * FROM echange ORDER BY expediteur ASC, dateEchange DESC');
        $result=$req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
      }

      public function getEchangeID($id)
      {
        $req = $this->executerRequete('SELECT echangeID,expediteur,dateEchange,type,destinataire FROM echange WHERE echangeID=?', array($id));
        $result=$req->fetch(PDO::FETCH_ASSOC); //on fait pas fecthAll mais fetch car on récupère qu'une seule ligne
        return $result;
      }

      public function ajouterEchange($expediteur,$dateEchange,$type,$destinataire)
      {
        $req=$this->executerRequete('INSERT INTO echange (expediteur,dateEchange,type,destinataire) VALUES (?,?,?,?)', array($expediteur,$dateEchange,$type,$destinataire));
      }

      public function modifierEchange($expediteur,$dateEchange,$type,$destinataire,$id)
      {
        $req = $this->executerRequete('UPDATE echange SET expediteur=?, dateEchange=?, type=?, destinataire=? WHERE echangeID=?', array($expediteur,$dateEchange,$type,$destinataire,$id));
      }

      public function supprimerEchange($id)
      {
        $req = $this->executerRequete('DELETE FROM echange WHERE echangeID=?', array($id));
      }


    }



?>
