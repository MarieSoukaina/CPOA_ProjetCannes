<?php
    require_once ("Model.php");
    class VIPManager extends Model
    {

      public function ajouterVIP($nomVIP, $prenomVIP, $dateNaissance, $typeVIP, $infoVIP)
      {
        $requete = $this->executerRequete('INSERT INTO vip(nom, prenom, dateNaissance, typeVIP, infoUtile) VALUES (?, ?, ?, ?, ?)', array($nomVIP, $prenomVIP, $dateNaissance, $typeVIP, $infoVIP));
      }

      public function modifierVIP($nom, $prenom, $dateNaissance, $typeVIP, $infoVIP, $idVIP)
      {
        $requete = $this->executerRequete('UPDATE vip SET nom=?, prenom=?, dateNaissance=?, typeVIP=?, infoVIP=? WHERE id = ?', array($nom, $prenom, $dateNaissance, $typeVIP, $infoVIP, $idVIP));
      }

      public function supprimerVIP($idVIP)
      {
        $requete = $this->executerRequete('DELETE FROM vip WHERE id=?', array($idVIP));
      }

      public function getAllVIP()
      {
        $requete = $this->executerRequete('SELECT * FROM vip');
        $data = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $data;
      }

      public function getInfoVIP($idVIP);
        $requete = $this->executerRequete('SELECT * FROM vip WHERE id=?', array($idVIP));
        $data = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
?>
