<?php
	include("mail.php");
	if(!isset($_SESSION["id_contact"])){
		session_start();
		$_SESSION["id_contact"] = $_COOKIE["id_contact"];
	}
	$user = "root";
	$pass = "root";
	$dbname = "gestion_stage";
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
	if(!isset($_POST["methode"]) || strlen($_POST["methode"])==0){
		include("ajout_stage.html");
		echo"Entrez la méthode de candidature!";
		return;
	}
	if(strlen($_POST['date_supp'])==0){
		$_POST['date_supp'] = $_POST['date_fin'];
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

	//Envoi d'une alerte
	$req = "SELECT mail_etudiant FROM etudiant WHERE inscription_alerte = 1";
	$res = $myPdo -> query($req);
	while($row = $res->fetch(PDO::FETCH_ASSOC)){
		mail_alerte($row["mail_etudiant"], $_POST["type"], $_POST["sujet"], $_POST["contenu"]);
	}
	include("accueil_entreprise.php");
	return;
?>