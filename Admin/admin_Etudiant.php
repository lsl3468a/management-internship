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
echo " " . date("d-m-y");
?>  
</title>
<?php
	 echo '<link rel="stylesheet" href="admin_Etudiant.css">';
	
	?>
</head>
<body>

		<header>
			<img id="univ" src= "univ.png">
			<img id="logo" src="Stage-Water-Logo.png">
			
		</header>
    <h1 align="center"> Admin </h1> </br>
    <h2 align="center">Supprimer un Etudiant <h2/>
	
	     <ul class="menu">
			    <li>
			        <a href="deconnexion.php">Deco_admin</a>
			    </li>
			    <li>
			        <a href="admin_Annonce.php">Supprimer Annonce</a>
			    </li>
			    <li>
			        <a href="admin_Entreprise.php">Supprimer Entreprise</a>
			    </li>
			</ul>
   
   
   <?php
     $req="SELECT * FROM `etudiant`";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		<table align="center">
		 <tr id="<?php echo $row['num_etudiant'] ?>">
                    <td><?php echo $row['num_etudiant']?></td>
                    <td><?php echo $row['nom_etudiant']?></td>
					<td><?php echo $row['prenom_etudiant']?></td>
					<td><?php echo $row['mail_etudiant']?></td>
					<td><?php echo $row['inscription_alerte']?></td>
				    
					<td><form action="supprimer.php" method="POST">
					<input type="hidden" name="num_etudiant" value="<?php echo $row['num_etudiant']; ?>"/>
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