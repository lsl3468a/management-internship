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

	if (isset($_POST['id_stage']))
	{
		$id_stage = $_POST["id_stage"];
		$req1 = "DELETE FROM `stage`WHERE `id_stage` ='".$id_stage."'";
		$result = $conn->query($req1);
		$req="DELETE FROM `stage` WHERE `id_stage`='".$id_stage."'";
		$result = $conn->query($req);
		include("accueil_entreprise.php");
		return;
	}
	
?>	