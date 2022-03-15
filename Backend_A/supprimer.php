<?php

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
	
	//echo "Conexion établie ";
	echo "<br/>";
	
	if (isset($_POST['id_stage']))
	{
		$id_stage = $_POST["id_stage"];

		$req="DELETE FROM `stage` WHERE `id_stage`='".$id_stage."'";
		$result = $conn->query($req);
		include("admin_Annonce.php");
	}
	
	if(isset($_POST['num_etudiant']))
	{
		$num_etudiant = $_POST["num_etudiant"];	
		$req2="DELETE FROM `etudiant` WHERE `num_etudiant`='".$num_etudiant."'";
		$result2 = $conn->query($req2);
		include("admin_Etudiant.php");
	}
	
	if(isset($_POST['id_entreprise']))
	{
		$id_entreprise = $_POST["id_entreprise"];
		
		$req3="DELETE FROM `entreprise` WHERE `id_entreprise`='".$id_entreprise."'";
		$result3 = $conn->query($req3);
		include("admin_Entreprise.php");
		
	}
	
	
	
	
	 
	 
	
	 
	
	 
	
	 return;
	 
  	 
	 
?>	