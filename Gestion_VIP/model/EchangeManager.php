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
        $req = $this->executerRequete('SELECT echangeID, expediteur, contenuEchange, dateEchange, type, destinataire FROM echange WHERE echangeID=?', array($id));
        $result=$req->fetch(PDO::FETCH_ASSOC); //on fait pas fecthAll mais fetch car on récupère qu'une seule ligne
        return $result;
      }

      public function ajouterEchange($expediteur,$contenuEchange,$dateEchange,$type,$destinataire)
      {
        $req=$this->executerRequete('INSERT INTO echange (expediteur,contenuEchange,dateEchange,type,destinataire) VALUES (?,?,?,?,?)', array($expediteur,$contenuEchange,$dateEchange,$type,$destinataire));
      }

      public function modifierEchange($expediteur,$contenuEchange,$dateEchange,$type,$destinataire,$id)
      {
        $req = $this->executerRequete('UPDATE echange SET expediteur=?, contenuEchange=?, dateEchange=?, type=?, destinataire=? WHERE echangeID=?', array($expediteur,$contenuEchange,$dateEchange,$type,$destinataire,$id));
      }

      public function supprimerEchange($id)
      {
        $req = $this->executerRequete('DELETE FROM echange WHERE echangeID=?', array($id));
      }


    }



?>
