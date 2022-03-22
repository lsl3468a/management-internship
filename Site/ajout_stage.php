<?php
	$_SESSION["id_contact"]=1;
	$user = "root";
	$pass = "root";
	$dbname = "gestion_stage";
	var_dump($_POST);
	if(!isset($_POST["sujet"]) || strlen($_POST["sujet"])==0){
		include("ajout_stage.html");
		echo"Entrez le sujet de stage !";
		return;
	}
	if(!isset($_POST["contenu"]) || strlen($_POST["contenu"])==0){
		include("ajout_stage.html");
		echo"Entrez le contenu de stage !";
		return;
	}
	if(!isset($_POST["pref"]) || strlen($_POST["pref"])==0){
		include("ajout_stage.html");
		echo"Entrez la préférence étudiante !";
		return;
	}
	if(!isset($_POST["date_debut"]) || strlen($_POST["date_debut"])==0){
		include("ajout_stage.html");
		echo"Entrez la date de début de stage !";
		return;
	}
	if(!isset($_POST["date_fin"]) || strlen($_POST["date_fin"])==0){
		include("ajout_stage.html");
		echo"Entrez la date de fin de stage !";
		return;
	}
	if(!isset($_POST["methode_cand"]) || strlen($_POST["methode_cand"])==0){
		include("ajout_stage.html");
		echo"Entrez la méthode de candidature!";
		return;
	}

	try{
		//Insertion de la candidature dans le base de données
		$myPdo = new PDO("mysql:host=localhost;dbname=gestion_stage", $user, $pass);
		$myPdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	$req = $myPdo->prepare("INSERT INTO `stage`(`sujet`, `contenu`, `pref_etu`, `date_debut`, `date_fin`, `date_supp`, `methode_cand`, `type`, `id_contact`) VALUES (?,?,?,?,?,?,?,?,?)");
	if ($req == FALSE) {
		print("Erreur preapre");
	}

	$req->execute(array($_POST["sujet"], $_POST["contenu"],$_POST["pref"],$_POST["date_debut"], $_POST["date_fin"], $_POST["date_supp"], $_POST["methode"],$_POST["type"],$_SESSION["id_contact"]));
	echo "Votre annonce a bien été déposée !";
	include("accueil.php");
	return;
?>