<?php
if(!isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else
    $action = $_REQUEST['action'];
switch($action)
{     
	case 'connexion' :
	  { 
            $action = $pdo->getLesProduits();
            include("vues/v_formConnex.php");
            break;  
        
          }
        case 'verifConnex':
            {
            $login=$_POST['username'];
            $mdp=$_POST['password'];
            $unUtilisateur = $pdo->getVerifConnex($login,$mdp);
            if(isset($unUtilisateur) && !empty($unUtilisateur))
                {
                    $lesVoitures = $pdo->getLesProduits();

                    include("vues/v_gestionVoitures.php");
                }
            else
                {
                    echo 'Mot de passe incorrect';
                    include("vues/v_formConnex.php");
                }
                break;
            }
        case 'ajouter' :
            {
                $lesVoitures = $pdo->getLesProduits();
                include("vues/v_formAjout.php");

                break;
            }
            
        case 'supprimer' :
            {
                $lesVoitures = $pdo->getLesProduits();

                include("vues/v_gestionVoitures.php");
                $unIdProduit = $_REQUEST['id'];
                $supprimerProduit = $pdo->supprimerProduit($unIdProduit);
                break;
            }
        case 'modifier' :
            {
                $lesVoitures = $pdo->getLesProduits();
                include("vues/v_formAjout.php");

                break;
            }
    
    
}


?>
