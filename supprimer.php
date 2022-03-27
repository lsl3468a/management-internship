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
		return;
	}
	
	if(isset($_POST['num_etudiant']))
	{
		$num_etudiant = $_POST["num_etudiant"];
		$req = "DELETE FROM `candidater` WHERE `num_etudiant`='".$num_etudiant."'";
		$req = $conn->query($req);
		$req2="DELETE FROM `etudiant` WHERE `num_etudiant`='".$num_etudiant."'";
		$result2 = $conn->query($req2);
		include("admin_Etudiant.php");
		return;
	}
	
	if(isset($_POST['id_entreprise']))
	{
		$id_entreprise = $_POST["id_entreprise"];
		$req="SELECT id_contact FROM contact WHERE id_entreprise='".$id_entreprise."'";
		$result=$conn->query($req);
		while($row = $result->fetch_assoc()){
			$reqS = "SELECT id_stage FROM stage WHERE id_contact ='".$row["id_contact"]."'";
			$result2= $conn->query($reqS);
			while($row2 = $result2->fetch_assoc()){
				$reqC = "DELETE FROM candidater WHERE id_stage='".$row2["id_stage"]."'";
				$reqC = $conn->query($reqC);
			}
			$req1="DELETE FROM stage WHERE id_contact='".$row["id_contact"]."'";
			$req1=$conn->query($req1);
		}
		$req2="DELETE FROM contact WHERE id_entreprise='".$id_entreprise."'";
		$res = $conn->query($req2);
		$req3="DELETE FROM entreprise WHERE id_entreprise='".$id_entreprise."'";
		$result3 = $conn->query($req3);
		include("admin_Entreprise.php");
		return;
		
	}
?>	