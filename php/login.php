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

   $email = $_POST["email_etudiant"];
   $pass = $_POST["password"];
   $erreur="";
   if(isset($_POST['valider'])){ // vérifier !empty mail + pass
      $sel=$pdo->prepare("SELECT * from etudiants where email_etudiant=? and password=? limit 1");
      $sel->execute(array($email,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom_etudiant"])).
         " ".strtoupper($tab[0]["nom_etudiant"]);
         $_SESSION["autoriser"]="oui";
         header("location:./php/index.php");
      }
      else
         $erreur="Mauvais email ou mot de passe!";
   }
?>