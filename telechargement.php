<?php
	$user = "root";
	$pass = "root";
	$file_nameCV = $_FILES['CV']['name'];
	$file_nameLM = $_FILES['LM']['name'];

	//POUR LE TEST 
	//TO DO : modifier les variables
	$_SESSION["num_etudiant"]="21240215";
	$_POST["idstage"]=1;
	
	var_dump($_FILES);
	$pathLM = 'files/LM_'.$_SESSION['num_etudiant'].'_'.$_POST['idstage'].$file_nameLM;
	$pathCV = 'files/CV_'.$_SESSION['num_etudiant'].'_'.$_POST['idstage'].$file_nameCV;
	if($_FILES['CV']==NULL || $_FILES['LM']==NULL){
		echo "Veuillez entrer un fichier !";
		include("candidature.php");
		return;
	}
	if(($_FILES['CV']['type']!="application/pdf") || ($_FILES['LM']['type']!="application/pdf")){
		echo "Le fichier doit être au format pdf !";
		include("candidature.php");
		return;
	}
	
	if(copy($_FILES['CV']['tmp_name'], $pathCV)){
	
	} else {
		echo "Problème de téléchargement du fichier !";
		include("candidature.php");
		return;
	}
	
	
	if(copy($_FILES['LM']['tmp_name'], $pathLM)){
		
	} else {
		echo "Problème de téléchargement du fichier !";
		include("candidature.php");
		return;
	}
	
	try{
	//Insertion de la candidature dans le base de données
	$myPdo = new PDO("mysql:host=localhost;dbname=gestion_stage", $user, $pass);
		$myPdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	$req = $myPdo->prepare("INSERT INTO `candidater`(`id_stage`, `num_etudiant`, `CV`, `LM`,`commentaires`) VALUES (?,?,?,?,?)");
	if ($req == FALSE) {
		print("Erreur preapre");
	}

	$req->execute(array($_POST["idstage"], $_SESSION['num_etudiant'], $pathCV, $pathLM, $_POST["commentaires"]));
	echo "Votre candidature a bien été envoyée !";
	include("accueil.php");
	return;
?>