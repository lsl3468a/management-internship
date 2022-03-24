<?php
// Start the session
session_start();
$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "gestion_stage";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if (!$conn) 
	{
    die("Echec de connexion a la BDD: " . mysqli_connect_error());
	}
	
?>



<!DOCTYPE html>
<html>
    <head>
	 <meta charset="utf-8">
        <title>
            Inscription
			<?php
				date_default_timezone_set("America/Guadeloupe");
				echo " " . date("d-m-y");
			?> 
        </title>
        <link rel='stylesheet' type='text/css' href='inscription_tmp.css'>
    </head>



	<body>

		<header>
			<img id="univ" src= "univ.png">
			<img id="logo" src="accueil.png">
		</header>

        <a href="inscription_etudiant.php"><button id="etu">Etudiant</button></a>
        <a href="inscription_entreprise.php"><button id="ent">Entreprise</button></a>
			

	</body>
</html>