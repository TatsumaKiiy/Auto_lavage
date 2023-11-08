<?php
$pdo = PdoHtAuto::getPdoHtAuto();

if (!isset($_REQUEST['action']))
    $action = 'accueil';
else
    $action = $_REQUEST['action'];


switch($action)
{
    case'register':
        {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mdp = $_POST['password'];

            $pdo->insertUser($nom,$email,$mdp);

        }
}
switch($action)
{
    case'signin':
        {
            $email = $_POST['email'];
            $mdp = $_POST['password'];
            $pdo->insertUser2($email,$mdp);
        }
}
?>