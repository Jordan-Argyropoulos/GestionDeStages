<!doctype html>
<html>
	<head>
		<title><?= $titre ?></title>
		<link rel="stylesheet" href="css/styles.css" />
      <script src="./js/common.js" type="text/javascript"></script>
      <script src="./js/script_register.js" type="text/javascript"></script>
	</head>
	<body>

<form class="box" action="./php/register.php" method="post" >
	<h1 class="box-logo box-title"><a>Inscription</a></h1>
	<input type="text" class="box-input" name="nom_etudiant" placeholder="Nom" required  />
   <input type="text" class="box-input" name="prenom_etudiant" placeholder="Prénom" required  />
   <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail" required id="email" />
   <input type="password" class="box-input" name="password" placeholder="Mot de passe" required id="password"/>
   <input type="password" class="box-input" name="password_confirm" placeholder="Confirmation du mot de passe" required  />
   <input type="number" class="box-input" name="stage" placeholder="Stage oui=1 non=0" required />
   <input type="submit" name="valider" class="box-button" onclick="validate()" />
   <p class="box-register">Déjà inscrit? <a href="index.php">Connectez-vous ici</a></p>
</form>
		
	</body>
</html>
