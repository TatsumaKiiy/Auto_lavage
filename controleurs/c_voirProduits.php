<?php
//initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirLesProduits':
	{
  		$lesVoitures = $pdo->getLesProduits();
		include("vues/v_lesVoitures.php");
  		break;
	}
	
	case 'recherche':
		{
			  $lesVoitures = $pdo->getLesProduits();
			include("vues/v_recherche.php");
			break;
		}
        
	
}
?>

