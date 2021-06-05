<?php
   session_start();

    echo "<p> Bienvenue $_SESSION[prenomNom].</p>";
?>

<!DOCTYPE html>
<html>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	 <div class="content">
	 
		<ul class="exo-menu">
			<li><a class="active" href="#"><i class="fa fa-toggle-right"></i> Informations sur les stages choisis</a></li>
            <li><a class="active" href="./liste_etudiants.php"><i class="fa fa-toggle-right"></i> Liste des étudiants</a></li>
            <li><a class="active" href="#"><i class="fa fa-toggle-right"></i> Liste des adresses des entreprises</a></li>
            <li><a class="active" href="#"><i class="fa fa-toggle-right"></i> Encoder l'adresse d'une entreprise</a></li>	
            <li><a class="active" href="#"><i class="fa fa-toggle-right"></i> Se déconnecter</a></li>	
	</ul>
	 
	 
	 </div>
</html>