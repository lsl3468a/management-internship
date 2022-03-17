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
Magic Web
<?php
date_default_timezone_set("America/Guadeloupe");
echo " " . date("d-m-j");
?>  
</title>
<?php
	 echo '<link rel="stylesheet" href="admin.css">';
	
	?>
</head>
<body>
		<header>
			<img id="univ" src= "univ.png">
			<img id="logo" src="Stage-Water-Logo.png">
			
		</header>
    <h1> Trouve un stage </h1> </br>
	<?php
	 $_SESSION['prenom'] = 'Admin';
    $_SESSION['nom'] = 'Admin';
	?>
			     <ul class="menu">
			    <li>
			        <a href="deconnexion.php">Deco_admin</a>
			    </li>
			    <li>
			        <a href="admin_Etudiant.php">Supprimer Etudiant</a>
			    </li>
			    <li>
			        <a href="admin_Entreprise.php">Supprimer Entreprise</a>
			    </li>
							    <li>
			        <a href="admin_Annonce.php">Supprimer Annonce</a>
			    </li>
			</ul>
		<?php
	 echo "<br/>";
	 echo 'Nom: ' .$_SESSION['nom']. '<br>';
     echo 'Prenom :' .$_SESSION['prenom']. '<br>';
     ?>
    

   <?php
     $req="SELECT * FROM stage";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		<table align="center">
		 <tr id="<?php echo $row['id_stage'] ?>">
                    <td><?php echo $row['id_stage']?></td>
                    <td><?php echo $row['sujet']?></td>
					<td><?php echo $row['contenu']?></td>
					<td><?php echo $row['type']?></td>
					<td><?php echo $row['pref_etu']?></td>
				    <td><?php echo $row['date_debut']?></td>
					<td><?php echo $row['date_fin']?></td>
					<td><?php echo $row['methode_cand']?></td>
					<td><form action="supprimer.php" method="POST">
					<input type="hidden" name="id_stage" value="<?php echo $row['id_stage']; ?>"/>
					<input  type="submit" value="Supprimer" name="supprimer" />
					</form></td>
					
					
			
					
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
	

	
	
	
    

</body>