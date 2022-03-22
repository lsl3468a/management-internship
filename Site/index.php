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
	 <meta charset="utf-8">
        <title>
            Trouve un Stage
			<?php
				date_default_timezone_set("America/Guadeloupe");
				echo " " . date("d-m-y");
			?> 
        </title>
        <link rel='stylesheet' type='text/css' href='site.css'>
    </head>



	<body>

		<header>
			<a href="index.php"><img id="univ" src= "univ.png"></a>
			<img id="logo" src="Stage-Water-Logo.png">
			
			 <a href="Etudiant.php"><button id="co">Connexion</button></a>
			 <a href="inscription_etudiant.php"><button id="insc">Inscription</button></a>
		</header>

		<?php
			 $_SESSION['prenom'] = 'Pierre';
			$_SESSION['nom'] = 'jack';
			$_SESSION['id_etudiant'] =223369;
			?>
			<h2 align="center"> Voici la liste des stages disponible à la date du :  <?php echo " " . date("d-m-y"); ?></h2>
	<div>
			<table align="center">
					<thead>
						<tr>
							<th>Type</th>
							<th>Sujet</th>
							<th>Date de début</th>
							<th>Date de fin</th>
						</tr>
					</thead>
					<tbody>
					  <?php
						 $req="SELECT * FROM stage";
						 $result = $conn->query($req);
						
						 if ($result->num_rows > 0 )
							 {
						// affiche les données de chaque ligne
						while ($row = $result->fetch_assoc()) 
						{
							 
							?>



							 <tr>
										<td><?php echo $row['sujet']?></td>
										
										<td><?php echo $row['type']?></td>
										
										<td><?php echo $row['date_debut']?></td>
										<td><?php echo $row['date_fin']?></td>
										
							  </tr>


							<?php
							//echo "<br> id : " . $row[ "id_stage" ]. " - Sujet : " . $row[ "sujet" ]. " - type : " . $row[ "type" ]. " - date de debut : " . $row[ "date_debut" ]. " " . " - date de fin : ". $row[ "date_fin" ] . "<br>" ;
						}
							 }
						else 
						{
						echo "0 résultats" ;
						}
						 
					   
						?>
					</tbody>
			</table>
		</div>
		
			

	</body>
	
</html>