<?php
   session_start();
   include("config.php");
   $nom=$_POST["nom_etudiant"];
   $prenom=$_POST["prenom_etudiant"];
   $email=$_POST["email_etudiant"];
   $pass=$_POST["password"];
   $repass=$_POST["password_confirm"];
   $erreur="";
   var_dump($_POST);

   if(isset($_POST['valider'])){
      $sel=$pdo->prepare("SELECT id_etudiant from etudiants where email_etudiant=? limit 1");
      $sel->execute(array($email));
      $tab=$sel->fetchAll();
      if(count($tab)>0)
         $erreur="email existe déjà!";
      else{
         $ins=$pdo->prepare("INSERT into etudiants(nom_etudiant,prenom_etudiant,email_etudiant,password,password_confirm) values(:nom_etudiant,:prenom_etudiant,:email_etudiant,:password,:password_confirm)");
         if($ins->execute(array($nom,$prenom,$email,$pass,$repass)))
            header("location:login.php");
      }   
   }
?>