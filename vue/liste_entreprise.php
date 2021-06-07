<?php
session_start();
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

$sql = 'SELECT nom_entreprise, ville_entreprise FROM entreprise';

    print "<table>";
    print "<th>Nom de l'entreprise</th>";
    print "<th>Nom de la ville</th>";

    print "</table>";
foreach($pdo->query($sql) as $row){
    print $row['nom_entreprise'].' ';
    print $row['ville_entreprise'] . "</br>";
 
}

?>