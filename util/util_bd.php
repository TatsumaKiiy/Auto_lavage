<?php

function connexion()
{
    $serveur="localhost";
    $login="root";
    $mdp="";
    $base="";
    //Connexion  au serveur de BD
    $infosBdd=mysqli_connect($serveur, $login, $mdp, $base) or die("Erreur " . mysqli_error($infosBdd));

    return $infosBdd;
}

 public function nouveauProduit($description, $prix, $image, $type)
{
            /*A Compléter*/
}
public function modifProduit($description, $prix, $image, $type)
{
            /*A Compléter*/
}

public function getLesCategories($infosBdd)
{
	$req = "select * from voiture";
    $resultat=mysqli_query($resultat,$infosBdd);
		
	return $resultat;
	}