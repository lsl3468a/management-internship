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
			Etudiant
		<?php
			date_default_timezone_set("America/Guadeloupe");
			echo " " . date("d-m-j");
		?>  
		</title>
        <link rel='stylesheet' type='text/css' href='Etudiant.css'>
	</head>

	
	<body>
		<header>
			<figure>
				<img src = "Stage-Water-Logo.png">
			</figure>
		</header>

    
	<h1>
		Etudiant
	</h1>

<div>
	<table align="center">
			<thead>
				<tr id="tete">
					<th>Numéro de stage</th>
					<th>Sujet</th>
					<th>contenu</th>
					<th>pref_etu</th>
					<th>Niveau requis</th>
					<th>Date de debut</th>
					<th>Date de fin</th>
					<th>Méthode candidat</th>
					<th>Candidater</th>


				</tr>
			</thead>
			<tbody>
				<?php
					$req="SELECT * FROM stage";
					$result = $conn->query($req);
					if ($result->num_rows > 0 )
					{
						// affiche les donnees de chaque ligne
						while ($row = $result->fetch_assoc()) 
							{
							?>

									<tr id="stage" >
										
										<td><?php echo $row['id_stage']?></td>
										<td><?php echo $row['sujet']?></td>
										<td><?php echo $row['contenu']?></td>
										<td><?php echo $row['type']?></td>
										<td><?php echo $row['pref_etu']?></td>
										<td><?php echo $row['date_debut']?></td>
										<td><?php echo $row['date_fin']?></td>
										<td><?php echo $row['methode_cand']?></td>
										<td><button  type="button" onclick="window.location.href = 'http://localhost/Projdev/candidature.php';">Candidater</button></td>
									</tr>

							<?php
							//echo "<br> id : " . $row[ "id_stage" ]. " - Sujet : " . $row[ "sujet" ]. " - type : " . $row[ "type" ]. " - date de debut : " . $row[ "date_debut" ]. " " . " - date de fin : ". $row[ "date_fin" ] . "<br>" ;
							}
					}
					else 
					{
					echo "0 resultats" ;
					}
    ?>

	
	</tbody>
	<table>
</div>	




</body>
</html>