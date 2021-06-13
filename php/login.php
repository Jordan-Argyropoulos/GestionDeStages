<?php
header("Content-Type: text/xml");
session_start();

$source = 'mysql:host=localhost;dbname=registration';
$utilisateur = 'root';
$mdp = '';

$error = "";
$connexion = "null";

try
{
   $pdo = new PDO($source, $utilisateur, $mdp);
}
catch (PDOException $erreur)
{
   $message = '<p>Erreur à la connexion ! : ' . $erreur->getMessage(). '</p>';
   echo $message; die();
}


if ( !empty($_POST["email_etudiant"]) && !empty($_POST["password"]) ) {
   
   $email_etudiant=$_POST["email_etudiant"];
   $password=$_POST["password"];

   $stm = $pdo->prepare("SELECT COUNT(*) FROM etudiants WHERE email_etudiant = ? AND password = ?");
   $stm->execute(array($email_etudiant, $password));
   $nbr_record = $stm->fetch();

   if( $nbr_record[0] != 0)
      $connexion = "ok";
   else
      $error = "Aucun utilisateur trouvé, veuillez vérifier votre login ou mot de passe !!!";

} else {
   $error = "Veuillez remplir tous les champs !!!";
}

echo "<login><result>$connexion</result><error>$error</error></login>";

?>
