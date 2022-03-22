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
			<img id="logo" src="Stage-Water-Logo.png">
			
		</header>
    <h2 align="center">Supprimer une Entreprise </h2>

	
			     <ul class="menu">
			    <li>
			        <a href="deconnexion.php">Deco_admin</a>
			    </li>
			    <li>
			        <a href="admin_Etudiant.php">Supprimer Etudiant</a>
			    </li>
			    <li>
			        <a href="admin_Annonce.php">Supprimer Annonce</a>
			    </li>
			</ul>
	
 <div><!--Tableau déroulent-->
<table align="center">
	<thead>
				<tr>
				<th>Numéro Entreprise</th>
			<th>Nom société</th>
			<th>Adresse</th>
			<th>Ville</th>
			<th>Pays</th>
			<th>Code Postal</th>
		<th>Numero Siret</th>
		</tr>
	</thead>
		<tbody>
					   
					   <?php
						 $req="SELECT * FROM `entreprise`";
						 $result = $conn->query($req);
						 
						 if ($result->num_rows > 0 )
							 {
						// affiche les données de chaque ligne
						while ($row = $result->fetch_assoc()) 
						{
							 
							?>
							
							 <tr>
										<td><?php echo $row['id_entreprise']?></td>
										<td><?php echo $row['nom_societe']?></td>
										<td><?php echo $row['adresse']?></td>
										<td><?php echo $row['ville']?></td>
										<td><?php echo $row['pays']?></td>
										<td><?php echo $row['code_postal']?></td>
										<td><?php echo $row['num_siret']?></td>
										
										<td><form action="supprimer.php" method="POST">
										<input type="hidden" name="id_entreprise" value="<?php echo $row['id_entreprise']; ?>"/>
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