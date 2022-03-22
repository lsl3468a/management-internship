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
	 echo '<link rel="stylesheet" href="admin.css">';
	
	?>
</head>
<body>
		<header>
			<img id="univ" src= "univ.png">
			<img id="logo" src="admin.png">
			
		</header>
    <h1> Bienvenue sur la page Admin </h1> </br>
	<?php
	 $_SESSION['prenom'] = 'Admin';
    $_SESSION['nom'] = 'Admin';
	?>
			     <ul class="menu">
			    <li>
			        <a href="deconnexion.php">Deconnexion</a>
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
    
	<div><!--Tableau déroulent-->
			<table align="center">
					<thead>
						<tr>
							<th>Numéro stage</th>
							<th>Type</th>
							<th>Sujet</th>
							<th>Contenue</th>
							<th>Préférence étudiant</th>
							<th>Date de début</th>
							<th>Date de fin</th>
							<th>Méthode de candidature</th>
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