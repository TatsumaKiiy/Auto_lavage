<?php
session_start();
include("vues/v_entete.php");
include("vues/v_bandeau.php");
require_once("util/class.PDO.HTAuto.inc.php");

$pdo = PdoHtAuto::getPdoHtAuto();

if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

switch ($uc) {
    case 'accueil':
        include("vues/v_accueil.php");
        break;

    case 'prestations':
        include("vues/v_prestations.php");
        break;

    case 'produits':
        include("vues/v_produits.php");
        break;

    case 'administrer':
        include("controleurs/c_gestionProduits.php");
        break;

    case 'recherche':
        include("vues/v_recherche.php"); // Vous aviez une erreur de nom de fichier ici
        break;
}

include("vues/v_pied.php");
?>
