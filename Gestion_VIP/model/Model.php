<?php
	abstract class Modele{

		// Objet PDO d'accès à la BDD
		private static $bdd;

		// Exécute une requête SQL éventuellement paramétrée
		protected function execution($sql, $params = null) {
			if ($params == null) {
				$resultat = self::connexionBD()->query($sql);// Exécution directe
			}
			else {
				$resultat = self::connexionBD()->prepare($sql);// Requête préparée
				$resultat->execute($params);
			}
			return $resultat;
		}

		private static function connexionBD() {
			if(self::$bdd == null){
				require_once('identifiants.php');

				try{
					self::$bdd = new PDO('mysql:host='.$host .';dbname='.$nombase ,$user,$password);
				}
				catch(Exception $e){
					die ('Erreur de connexion : '.$e->getMessage());
				}

				self::$bdd->exec('SET NAMES utf8');
				self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return self::$bdd;
		}
	}
?>
