<!doctype html>
<html>
	<head>
		<title><?= $titre ?></title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>

<?php
   session_start();
   @$nom=$_POST["nom_etudiant"];
   @$prenom=$_POST["prenom_etudiant"];
   @$email=$_POST["email_etudiant"];
   @$pass=$_POST["password"];
   @$repass=$_POST["password_confirm"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($email)) $erreur="Login laissé vide!";
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
      else{
         include("config.php");
         $sel=$pdo->prepare("select id_etudiant from etudiants where email_etudiant=? limit 1");
         $sel->execute(array($email));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="email existe déjà!";
         else{
            $ins=$pdo->prepare("insert into etudiants(nom_etudiant,prenom_etudiant,email_etudiant,password,password_confirm) values(?,?,?,?,?)");
            if($ins->execute(array($nom,$prenom,$email,md5($pass),md5($repass))))
               header("location:login.php");
         }   
      }
   }
?>

<form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a>Inscription</a></h1>
   <h1 class="box-title">S'inscrire</h1>
	<input type="text" class="box-input" name="nom_etudiant" placeholder="Nom" required />
   <input type="text" class="box-input" name="prenom_etudiant" placeholder="Prénom" required />
   <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail" required />
   <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
   <input type="password" class="box-input" name="password_confirm" placeholder="Confirmation du mot de passe" required />
   <input type="submit" name="submit" value="S'inscrire" class="box-button" />
   <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>


		
	</body>
</html>
