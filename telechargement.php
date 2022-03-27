<?php
	$user = "root";
	$pass = "root";
	$file_nameCV = $_FILES['CV']['name'];
	$file_nameLM = $_FILES['LM']['name'];

	
	$_SESSION["num_etudiant"]=$_POST["num_etudiant"];

	$pathLM = 'files/LM_'.$_SESSION['num_etudiant'].'_'.$_POST['id_stage'].$file_nameLM;
	$pathCV = 'files/CV_'.$_SESSION['num_etudiant'].'_'.$_POST['id_stage'].$file_nameCV;

	echo '<form type="POST" method="candidature.php"> <input type="hidden" name="id_stage" value="'.$_POST["id_stage"].'"/> </form>';
	if($_FILES['CV']==NULL || $_FILES['LM']==NULL){
		echo '<script language="Javascript">
				alert ("Veuillez entrer un fichier !")
				</script>';
		include("candidature.php");
		return;
	}
	if(($_FILES['CV']['type']!="application/pdf") || ($_FILES['LM']['type']!="application/pdf")){
		echo '<script language="Javascript">
				alert ("Le fichier doit être au format pdf !")
				</script>';

		include("candidature.php");
		return;
	}
	
	if(copy($_FILES['CV']['tmp_name'], $pathCV)){
	
	} else {
		echo '<script language="Javascript">
				alert ("Problème de téléchargement du fichier !")
				</script>';
		include("candidature.php");
		return;
	}
	
	
	if(copy($_FILES['LM']['tmp_name'], $pathLM)){
		
	} else {
		echo '<script language="Javascript">
				alert ("Problème de téléchargement du fichier !")
				</script>';
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
		print("Erreur prepare");
	}
	
	$req->execute(array($_POST["id_stage"], $_SESSION['num_etudiant'], $pathCV, $pathLM, $_POST["commentaires"]));
	include("etudiant.php");
	return;
?>