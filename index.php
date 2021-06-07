<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
<div id="page">
      <div id="scr_login">  
         <form class="box" action="./php/login.php" method="post" name="login">
            <h1 class="box-title">Connexion</h1>
            <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail" id="inp_login">
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" id="inp_passwd">
            <input type="submit" value="connexion" name="valider" class="box-button" id="inp_enter">
            <p class="box-register">Vous êtes nouveau ici? <a href="frontregister.php">S'inscrire</a></p>
         </form>
      </div>
</div>
</body>
</html>