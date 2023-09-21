<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
require_once("util/class.PDO.HTAuto.inc.php");


$pdo = PdoHtAuto::getPdoHtAuto();

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];


switch($uc)
{
	case 'accueil':
		{

		include("vues/v_accueil.php");break;

		}
	case 'voirProduits' :

		include("controleurs/c_voirProduits.php");
            
            break;       
	case 'administrer' :
	  { 
            include("controleurs/c_gestionProduits.php");
            break;  
        
		 }
	case 'recherche':
		{
		include("vues/v_.php");
        break;  
		}
}
include("vues/v_pied.php") ;


?>
