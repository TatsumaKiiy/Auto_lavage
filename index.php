<?php
session_start();

include("vues/v_bandeau.php");


if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

switch ($uc) {
    case 'accueil':
        include("vues/v_entete.php");
        include("vues/v_accueil.php");

    break;

    case 'prestations':
        include("vues/v_entete.php");
        include("vues/v_prestations.php");
    break;

    case 'produits':
        include("vues/v_entete.php");
        include("vues/v_produits.php");
    break;
        
    case 'login':
        include("vues/v_login.php");
    
    break;
    case 'devis':
        include("vues/v_devis.php");
    
    break;
}

include("vues/v_pied.php");
?>
