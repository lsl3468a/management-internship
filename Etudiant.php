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
TEST Backend
<?php
date_default_timezone_set("America/Guadeloupe");
echo " " . date("d-m-j");
?>  
</title>
<?php
	 echo '<link rel="stylesheet" href="styleT1.css">';
	
	?>
</head>
<body>
    <h1> Test backend </h1> </br>
    <h2>Page test <h2/>
		<?php
			$_SESSION['prenom'] = 'Pierre';
		  $_SESSION['nom'] = 'jack';
			$_SESSION['id_etudiant'] =223369;
		?>
    
     <ul class="menu">
			    <li>
			        <a href="etudiant.php">Accueil</a>
			    </li>
			    <li>
			        <a href="affichage_candidature.php">Mes candidatures</a>
			    </li>
			    <li>
			        <a href="deconnexion.php">Déconnexion</a>
			    </li>
			</ul>
   
   <?php
     $req="SELECT * FROM stage";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		<table>
		 <tr>
          <td><?php echo $row['id_stage']?></td>
          <td><?php echo $row['sujet']?></td>
					<td><?php echo $row['contenu']?></td>
					<td><?php echo $row['type']?></td>
					<td><?php echo $row['pref_etu']?></td>
				  <td><?php echo $row['date_debut']?></td>
					<td><?php echo $row['date_fin']?></td>
					<td><?php echo $row['methode_cand']?></td>
					<td><form method="POST" action="candidature.html">
								<input type="hidden" name="id_stage" value="<?php echo $row['id_stage']?>;"/>
								<input type="submit" value="Candidater"/>
							</form>
					</td>
          </tr>
		  <table>
		<?php
        //echo "<br> id : " . $row[ "id_stage" ]. " - Sujet : " . $row[ "sujet" ]. " - type : " . $row[ "type" ]. " - date de debut : " . $row[ "date_debut" ]. " " . " - date de fin : ". $row[ "date_fin" ] . "<br>" ;
    }
		 }
    else 
	{
    echo "0 résultats" ;
	}
	 
   
    ?>
	
	<?php
	 echo "<br/>";
	 echo 'Nom: ' .$_SESSION['nom']. '<br>';
     echo 'Prenom :' .$_SESSION['prenom']. '<br>';
	 echo 'Numero étudiant :' .$_SESSION['id_etudiant']. '<br>';
     ?>
	
	
	
    

</body>
</html>