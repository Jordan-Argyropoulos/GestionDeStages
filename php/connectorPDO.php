<!DOCTYPE html>

<?php
require 'config.php';

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