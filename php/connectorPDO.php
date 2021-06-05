<!DOCTYPE html>

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

$sql = 'SELECT email_etudiant, nom_etudiant, prenom_etudiant, stage FROM etudiants';

foreach($pdo->query($sql) as $row){
    print "<table>";
    print "<th>Email</th>";
    print $row['email_etudiant'];
    print "<th>Nom</th>";
    print $row['nom_etudiant'];
    print "<th>Prenom</th>";
    print $row['prenom_etudiant'];
    print "<th>Stage</th>";
    print $row['stage'] . "\n";
    print "</table>";
}

?>
</html>