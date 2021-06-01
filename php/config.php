<?php
// Informations d'identification
$source = 'mysql:host=localhost;dbname=registration';
$user = 'root';
$mdp = '';
try{
    $pdo = new PDO($source, $user, $mdp);
    //var_dump($pdo);
}
catch (PDOException $error ) {
    $message = '<p>Erreur à la connexion : ' . $erreur->getMessage(). '</p>';
    echo $message; die();
}

?>