<?php
	// PARAMETRES
	$titre = "Projet web";
?>

<!doctype html>
<html>
	<head>
		<title><?= $titre ?></title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php
        require('config.php');
		if (isset($_REQUEST['email'], $_REQUEST['password'])){
			// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($conn, $email);
			// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn, $password);
			//requéte SQL + mot de passe crypté
			  $query = "INSERT into `etudiants` (email, password)
						VALUES ('$email', '".hash('sha256', $password)."')";
			// Exécuter la requête sur la base de données
			  $res = mysqli_query($conn, $query);
			  if($res){
				 echo "<div class='sucess'>
					   <h3>Vous êtes inscrit avec succès.</h3>
					   <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
				 </div>";
			  }
		  }else{
		  ?>
		  <form class="box" action="" method="post">
			  <h1 class="box-title">S'inscrire</h1>
			  <input type="text" class="box-input" name="email" placeholder="Adresse mail" required />
			  <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
			  <input type="password" class="box-input" name="password_confirm" placeholder="Confirmation du mot de passe" required />
			  <input type="text" class="box-input" name="nom_etudiant" placeholder="Nom de l'étudiant" required />
			  <input type="text" class="box-input" name="prenom_etudiant" placeholder="Prénom de l'étudiant" required />
			  <input type="submit" name="submit" value="S'inscrire" class="box-button" />
			  <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
			  </form>
			  <?php } ?>


		?>
	</body>
</html>
