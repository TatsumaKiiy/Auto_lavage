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
      	private static $bdd='dbname=htAuto';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoHtAuto = null;
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
	public function getLesCategories()
	{
		$req = "select * from categorie";
                $res=  PdoHtAuto::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne sous forme d'un tableau associatif tous les produits de la
 * catégorie passée en argument
 * 
 * @param $idCategorie 
 * @return un tableau associatif  
*/

	public function getLesProduitsDeCategorie($idCategorie)
	{
	    $req="select * from produit where idCategorie = '$idCategorie'";
		$res=  PdoHtAuto::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}
	/**
 * Retourne sous forme d'un tableau associatif tous les produits de la
 * catégorie passée en argument
 * 
 * @param $idCategorie 
 * @return un tableau associatif  
*/

public function getLesProduits()
{
	$req="select * from produit ";
	$res=  PdoHtAuto::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes; 
}
/**
 * Retourne les produits concernés par le tableau des idProduits passée en argument
 *
 * @param $desIdProduit tableau d'idProduits
 * @return un tableau associatif 
*/
	public function getLesProduitsDuTableau($desIdProduit)
	{
		$nbProduits = count($desIdProduit);
		$lesProduits=array();
		if($nbProduits != 0)
		{
			foreach($desIdProduit as $unIdProduit)
			{
				$req = "select * from produit where id = '$unIdProduit'";
				$res=  PdoHtAuto::$monPdo->query($req);
				$unProduit = $res->fetch();
				$lesProduits[] = $unProduit;
			}
		}
		return $lesProduits;
	}
	public function getVerifConnex($login, $mdp) 
	{
		$req = "select * from utilisateur where login = '$login' and motDePasse = '$mdp' and roleUser = 'admin'";
		var_dump($req);
		$res= PdoHtAuto::$monPdo->query($req);
		$unUtilisateur = $res->fetch();
		return $unUtilisateur;
	}
	
	public function nouveauProduit($description, $prix, $image, $type)
	{
		
	}
	public function modifProduit($description, $prix, $image, $type)
	{
		/*A Compléter*/
	}
	public function supprimerProduit($idProduit)
	{
			/*A Compléter*/
		$req = "delete from Produit where id = $idProduit";
		PdoHtAuto::$monPdo->exec($req);
	} 

	public function recherhe($marque, $modele, $prix)
	{
		$req = "select * from produit where marque";
		if(isset($marque))
		{

	/*	$req = $req."='".$marque"'"; */
		}
		else
		{
			$req = $req."IS NOT NULL";
		}
		if(isset($prix)) {
				$req .= " AND id_prix <= :id_prix";
				$params[':id_prix'] = $prix;
			}


	}






/*
			if(isset($modele))
		
			{
				$req .= " AND modele LIKE :modele";
				$params[':modele'] = "%".$modele."%";
			}

			if(isset($prix)) {
				$req .= " AND prix <= :prix";
				$params[':prix'] = $prix;
			}

}

*/

		
}
?>
