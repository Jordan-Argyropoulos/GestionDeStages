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
   if(!empty($_POST["email_etudiant"]) && ($_POST["password"])){ // vérifier !empty mail + pass
      $sel=$pdo->prepare("SELECT * from etudiants where email_etudiant=? and password=? limit 1");
      $sel->execute(array($email,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtoupper($tab[0]["nom_etudiant"])).
         " ".ucfirst(strtolower($tab[0]["prenom_etudiant"]));
         $_SESSION["email_etudiant"]=$email;
         header("location:./accueil.php");
      }
      else
         $erreur="Mauvais email ou mot de passe!";
         echo $erreur;
         
   }
?>