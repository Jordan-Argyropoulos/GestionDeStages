<?php
   session_start();
   @$email=$_POST["email_etudiant"];
   @$pass=md5($_POST["password"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("config.php");
      $sel=$pdo->prepare("select * from etudiants where email_etudiant=? and password=? limit 1");
      $sel->execute(array($email,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom_etudiant"])).
         " ".strtoupper($tab[0]["nom_etudiant"]);
         $_SESSION["autoriser"]="oui";
         header("location:index.php");
      }
      else
         $erreur="Mauvais email ou mot de passe!";
   }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="connexion" name="valider" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>