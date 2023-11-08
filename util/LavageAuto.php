<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application HtAuto (adaptation du cas lafleur)
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Patrice Grand
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoHtAuto
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=lavage_auto';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;
		
		private static $monPdo;
		private static $monPdoHtAuto = null;

		//online version
		/*
		private static $serveur='mysql:host=avofouafrancis.mysql.db';
		private static $bdd='dbname=avofouafrancis';   		
		private static $user='avofouafrancis' ;    		
		private static $mdp='DSfoijfhsd82sds' ;*/

/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoHtAuto::$monPdo = new PDO(PdoHtAuto::$serveur.';'.PdoHtAuto::$bdd, PdoHtAuto::$user, PdoHtAuto::$mdp); 
			PdoHtAuto::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoHtAuto::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoHtAuto = PdoHtAuto::getPdoHtAuto();
 * @return l'unique objet de la classe PdoHtAuto
 */
	public  static function getPdoHtAuto()
	{
		if(PdoHtAuto::$monPdoHtAuto == null)
		{
			PdoHtAuto::$monPdoHtAuto=new PdoHtAuto();
		}
		return PdoHtAuto::$monPdoHtAuto;  
	}
/**
 * Retourne toutes les catégories sous forme d'un tableau associatif
 *
 * @return le tableau associatif des catégories 
*/

	public function insertUser($nom,$email,$mdp)
	{
		$req="INSERT INTO user(nom,email,password) VALUES ('$nom','$email','$mdp')";
		$res= PdoHtAuto::$monPdo->prepare($req);
		$res->execute();
	}
	public function insertUser2($email,$mdp)
	{
		$req="INSERT INTO user(nom,email,password) VALUES ('$email','$mdp')";
		$res= PdoHtAuto::$monPdo->prepare($req);
		$res->execute();
	}
}
?>
