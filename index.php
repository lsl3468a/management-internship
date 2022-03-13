<?php
// Start the session
session_start();
$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "site-stage";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if (!$conn) 
	{
    die("Echec de connexion a la BDD: " . mysqli_connect_error());
	}
	
	echo "Conexion établie ";
	echo "<br/>";
?>	





<!DOCTYPE html>
<html>
    <head>
	 <meta charset="utf-8">
        <title>
            Trouve un Stage
			<?php
				date_default_timezone_set("America/Guadeloupe");
				echo " " . date("d-m-j");
			?> 
        </title>
        <link rel='stylesheet' type='text/css' href='site.css'>
    </head>



	<body>
		<header>
			<figure>
				<img src = "Stage-Water-Logo.png">
			</figure>
			<input id="searchbar" onkeyup="search_stage()" type="text"
			name="search" placeholder="Trouver un stage...">
			<button type="button" onclick="alert('Vous avez étez déconnecter!')" <?php //session_destroy;?> >Déconnexion</button>
			 <button type="button" onclick="window.location.href = 'http://localhost/Backend/Connexion.php';">Connexion</button>
			 <button type="button" onclick="window.location.href = 'http://localhost/Backend/Inscription.php';">Inscription</button>
			 <button type="button" onclick="window.location.href = 'http://localhost/Backend/a_propos';">A propos</button>
			 <button type="button" onclick="window.location.href = 'http://localhost/Backend/Etudiant.php';">test_co</button>
			 <div id="info"><?php
			 echo "<br/>";
			 echo 'Nom: ' .$_SESSION['nom']. '<br>';
			 echo 'Prenom :' .$_SESSION['prenom']. '<br>';
			 echo 'Numero étudiant :' .$_SESSION['id_etudiant']. '<br>';
			 ?></div>
		</header>

		<h1>
		Acceuil
		</h1>
		<?php
			 $_SESSION['prenom'] = 'Pierre';
			$_SESSION['nom'] = 'jack';
			$_SESSION['id_etudiant'] =223369;
			?>
<div>
	<table align="center">
			<thead>
				<tr id="tete">
					<th>Numéro stage</th>
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



					 <tr id="stage">
								<td><?php echo $row['id_stage']?></td>
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
	<table>
</div>			
			



	</body>
</html>