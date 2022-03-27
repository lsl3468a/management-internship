<?php
include('mail.php');

if(isset($_POST["login"]) && isset($_POST["code"])){
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
	if($_POST["role"]=="etudiant"){
		//Vérification si le code est bon
		$req = "SELECT code FROM etudiant WHERE mail_etudiant='".$_POST["login"]."'";
		$result = $conn->query($req);
		$code = $result->fetch_assoc();
		if($code["code"] == $_POST["code"]){
			//Mettre confirmation à 1
			$confirmation = 1;
			$reqC = "UPDATE etudiant SET confirmation ='".$confirmation."' WHERE mail_etudiant='".$_POST["login"]."'";
			$result = $conn->query($reqC);
		}
	} else {
		//Vérification si le code est bon
		$req = "SELECT code FROM contact WHERE mail_contact='".$_POST["login"]."'";
		$result = $conn->query($req);
		$code = $result->fetch_assoc();
		if($code["code"] == $_POST["code"]){
			//Mettre confirmation à 1
			$confirmation = 1;
			$reqC = "UPDATE contact SET confirmation ='".$confirmation."' WHERE mail_contact='".$_POST["login"]."'";
			$result = $conn->query($reqC);
		}	
		mail_inscrip_OK($_POST["login"]);
		include("connexion.php");
		return;
	}
}
?>

<!DOCTYPE html>
<html>
	<head><title> Confirmation </title>
	<meta charset="utf-8">
	<link rel='stylesheet' type='text/css' href='site.css'>
    </head>
	<body>
		<header>
			<ul>
				<li><a href="index.php"><img id="univ" src= "univ.png"></a></li>
				<li><a id="nav" href="index.php">Accueil</a></li>
				<li><a id="nav" href="connexion.php">Connexion</a></li>
			  	<li><a id="nav" href="choix_inscription.html">Inscription</a></li>
			</ul>
		</header>
		<div id="content">
			<h1>Confirmation de votre mail: </h1>
			<form method="POST" action="confirmation.php">
				<select class="form-select" name="role" aria-label="Default select example">
		          <option selected value ="etudiant" >Etudiant</option>
		          <option value="contact">Entreprise</option>
		        </select>
		        <br><br>
				<input type="text" id="login" name="login" placeholder="Votre adresse mail"/> </br>
				<input type="text" id="code" name="code" placeholder="Code de vérification"/> </br> </br>
				<input type="submit" id="confirmer" value="Confirmer">
			</form>
		</div>
</html>