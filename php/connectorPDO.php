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

    print "<table>";
    print "<th>Email</th>";
    print "<th>Nom</th>";
    print "<th>Prenom</th>";
    print "<th>Stage</th>";
    print "</table>";
foreach($pdo->query($sql) as $row){
    print $row['email_etudiant'].' ';
    print $row['nom_etudiant'].' ';
    print $row['prenom_etudiant'].' ';
    print $row['stage'] . "</br>";
 
}

?>
</html>