<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./js/common.js" type="text/javascript"></script>
  <script src="./js/script.js" type="text/javascript"></script>
</head>
<body>
  <div>
    <div id="scr_login">

    <!-- <form class="box" action="./php/login.php" method="post" name="login">
            <h1 class="box-title">Connexion</h1>
            <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail" id="inp_login">
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" id="inp_passwd">
            <input type="submit" value="connexion" name="valider" class="box-button" id="inp_enter">
            <p class="box-register">Vous êtes nouveau ici? <a href="frontregister.php">S'inscrire</a></p>
        </form> -->
      <table class="box">
        <h1 class="box-title"><a>Connexion</a></h1>
        <tr><td>Mail</td><td><input type="text" class="box-input" id="inp_login" required></td></tr>
        <tr><td>Password</td><td><input type="password" class="box-input" id="inp_passwd" required></td></tr>
        <tr><td></td><td><button type="button" class="box-button" id="inp_enter">Connexion</button></td></tr>
        <tr><td></td><td><p class="box-register">Vous êtes nouveau ici? <a href="frontregister.php">S'inscrire</a></p></td></tr>
      </table>
      <div id="div_error"></div>

    </div>
    <div id="scr_accueil">
    <?php session_start();
    require ('php/navbar.php');?>

    <h1><?php echo "<p> Bienvenue  $_SESSION[email_etudiant].</p>"; ?></h1>
      <ul class="exo-menu">
          <li><a class="active" href="./vue/info_stage"><i class="fa fa-toggle-right"></i> Informations sur les stages choisis</a></li>
                <li><a class="active" href="./vue/liste_etudiants.php"><i class="fa fa-toggle-right"></i> Liste des étudiants</a></li>
                <li><a class="active" href="./vue/liste_entreprise.php"><i class="fa fa-toggle-right"></i> Liste des adresses des entreprises</a></li>
                <li><a class="active" href="lieu_stage.html"><i class="fa fa-toggle-right"></i> Encoder l'adresse d'une entreprise</a></li>	
                <li><a class="active" href="" id="inp_logout"><i class="fa fa-toggle-right"></i> Se déconnecter</a></li>	
      </ul>


    </div>
  </div>
</body>
</html>