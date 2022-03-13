<!DOCTYPE html>
<html>
	<head> <title> Candidature </title>	</head>
	<body>
		<form enctype="multipart/form-data" method="POST" action="telechargement.php">
			<input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
			<input type="hidden" name="idstage" value=""/>
			<label for="CV"> Veuillez entrer votre CV : </label> <br>
			<input type="file" name="CV"/> <br>
			<label for="LM"> Veuillez entrer votre lettre de motivation : </label> <br>
			<input type="file" name="LM"/> <br>
			<input type="text" name="commentaires" placeholder="Commentaires"/>
			<input type="submit" name="submit" value="Candidater"/>
		</form>
	</body>
</html>