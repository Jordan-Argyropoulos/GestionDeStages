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

   $error="";
   $register="null";

   if(isset($_POST["nom_etudiant"]) && ($_POST["prenom_etudiant"]) && ($_POST["email_etudiant"]) && ($_POST["password"]) && ($_POST["password_confirm"])){
      $nom=$_POST["nom_etudiant"];
      $prenom=$_POST["prenom_etudiant"];
      $email=$_POST["email_etudiant"];
      $pass=$_POST["password"];
      $repass=$_POST["password_confirm"];
      $stage=$_POST["stage"];
   }
   

   if(!empty($email) && ($pass)){
      $sel=$pdo->prepare("SELECT id_etudiant from etudiants where email_etudiant=? ");
      $sel->execute(array($email));
      $tab=$sel->fetchAll();
      
      if(count($tab)>0){
         echo "Email existe déjà!";
         //header("location:../frontregister.php");
      
      }
      if($pass != $repass){

         echo "mot de passe différent de la confirmation du mot de passe";
      }
      else{
         $ins=$pdo->prepare("INSERT into etudiants(nom_etudiant,prenom_etudiant,email_etudiant,password,password_confirm,stage) values(?,?,?,?,?,?)");
         if($ins->execute(array($nom,$prenom,$email,$pass,$repass,$stage)))
            header("location:./../index.php");
      }   
   }

   echo "<login><result>$register</result><error>$error</error></login>";
?>