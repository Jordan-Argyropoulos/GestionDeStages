<!doctype html>
<html>
	<head>
		<title><?= $titre ?></title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>

<form class="box" action="./register.php" method="post">
	<h1 class="box-logo box-title"><a>Inscription</a></h1>
   <h1 class="box-title">S'inscrire</h1>
	<input type="text" class="box-input" name="nom_etudiant" placeholder="Nom" required />
   <input type="text" class="box-input" name="prenom_etudiant" placeholder="Prénom" required />
   <input type="text" class="box-input" name="email_etudiant" placeholder="Adresse mail" required />
   <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
   <input type="password" class="box-input" name="password_confirm" placeholder="Confirmation du mot de passe" required />
   <input type="submit" name="valider" value="S'inscrire" class="box-button" />
   <p class="box-register">Déjà inscrit? <a href="./login.php">Connectez-vous ici</a></p>
</form>


		
	</body>
</html>
