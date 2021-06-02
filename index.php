<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
   <h1 class="box-title">Connexion</h1>
   <form class="box" action="./login.php" method="post" name="login">
      <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail">
      <input type="password" class="box-input" name="password" placeholder="Mot de passe">
      <input type="submit" value="connexion" name="valider" class="box-button">
   </form>
   <p class="box-register">Vous êtes nouveau ici? <a href="frontregister.php">S'inscrire</a></p>
</body>
</html>