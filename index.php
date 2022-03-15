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
	 <meta charset="UTF-8">
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
			<figure>
				<!-- <img src = "Stage-Water-Logo.png"> -->
			</figure>
			<input id="searchbar" onkeyup="search_stage()" type="text"
			name="search" placeholder="Trouver un stage...">
			<ul class="menu">
			    <li>
			        <a href="index.php">Accueil</a>
			    </li>
			    <li>
			        <a href="connexion.php">Connexion</a>
			    </li>
			    <li>
			        <a href="inscription_etudiant.php">Inscription</a>
			    </li>
			    <li>
			        <a href="Etudiant.php">test connexion</a>
			    </li>
			</ul>
			<div id="info">
			<?php
			 /*echo "<br/>";
			 echo 'Nom: ' .$_SESSION['nom']. '<br>';
			 echo 'Prenom :' .$_SESSION['prenom']. '<br>';
			 echo 'Numero étudiant :' .$_SESSION['id_etudiant']. '<br>';*/
			 ?></div> 
		</header>

		<h1>
		Accueil
		</h1>
		<?php
			$_SESSION['prenom'] = 'Pierre';
			$_SESSION['nom'] = 'jack';
			$_SESSION['id_etudiant'] =223369;
			?>
<div>
	<table align="center">
			<thead>
				<tr>
					<th>Numéro stage</th>
					<th>Sujet</th>
					<th>Type</th>
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