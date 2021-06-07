<?php
session_start();
//var_dump($_SESSION);
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

$sql = "SELECT p.descritptif_sujets, p.nom_superviseur FROM sujets_stage p INNER JOIN etudiants j ON p.id_sujets = j.id_etudiant WHERE email_etudiant = '" . $_SESSION['email_etudiant'] . "'";
//$sql = "SELECT descritptif_sujets, nom_superviseur FROM sujets_stage ";


    print "<table>";
    print "<th>Descriptif des sujets</th>";
    print "<th>Nom du superviseur</th>";
    print "</table>";
foreach($pdo->query($sql) as $row){
    //var_dump($row);
    print $row['descritptif_sujets'].' ';
    print $row['nom_superviseur']."</br>";

}

?>