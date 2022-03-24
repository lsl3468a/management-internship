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
		<title> 
			Candidature 
		</title>
		<link rel='stylesheet' type='text/css' href='candidature.css'>
		<img id="univ" src = "univ.png">
	</head>
	<body>
		<header>
			<figure>
			<img id="site" src = "candidater.png">
			</figure>
		</header>

		<table>
			<td>
				<form enctype="multipart/form-data" method="POST" action="telechargement.php">
				<input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
				<input type="hidden" name="idstage" value=""/>
				<label for="CV"> Veuillez entrer votre CV : </label><br>
				<input type="file" name="CV"/> <br>
				<label for="LM"> Veuillez entrer votre lettre de motivation : </label>
				<input type="file" name="LM"/> <br>
				<input id="coment" type="text" name="commentaires" placeholder="Commentaires"/>
				
				</form>
			</td>
		</table>
		<form enctype="multipart/form-data" method="POST" action="telechargement.php">
			<input id="buttoncandi" type="submit" name="submit" value="Candidater"/>
	</body>
</html>