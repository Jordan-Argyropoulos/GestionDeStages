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

   if(isset($_POST["nom_entreprise"]) && ($_POST["ville_entreprise"])){
      $nom_entreprise=$_POST["nom_entreprise"];
      $ville_entreprise=$_POST["ville_entreprise"];
   }
   
   $erreur="";
   var_dump($_POST);
   if(!empty($_POST["nom_entreprise"]) && ($_POST["ville_entreprise"])){
        if ((strlen($_POST["nom_entreprise"]) <= 2) && (strlen($_POST["ville_entreprise"]) <= 3)) {
            $erreur="Le nom de l'entreprise doit faire 2 lettres minimum et la ville doit faire au minimum 3 lettres.";
            echo $erreur;
        }
      else{
         $ins=$pdo->prepare("INSERT into entreprise(nom_entreprise,ville_entreprise) values(?,?)");
         if($ins->execute(array($nom_entreprise,$ville_entreprise)))
            header("location:./../lieu_stage.html");
      }   
   }
?>