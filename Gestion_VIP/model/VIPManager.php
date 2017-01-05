<?php
    require_once ("Model.php");
    class VIPManager extends Model
    {

      public function ajouterVIP($nomVIP, $prenomVIP, $dateNaissance, $typeVIP, $infoVIP)
      {
        $requete = $this->executerRequete('INSERT INTO vip(nom, prenom, dateNaissance, typeVIP, infoUtile) VALUES (?, ?, ?, ?, ?)', array($nomVIP, $prenomVIP, $dateNaissance, $typeVIP, $infoVIP));
      }

      public function modifierVIP()
      {
        $requete = $this->executerRequete('UPDATE ... SET .... WHERE....');
      }

      public function supprimerVIP()
      {
        $requete = $this->executerRequete('DELETE FROM ... WHERE ... ');
      }

      public function getAllVIP()
      {
        $requete = $this->executerRequete('SELECT * FROM vip');
        $data = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $data;
      }

    }
?>
