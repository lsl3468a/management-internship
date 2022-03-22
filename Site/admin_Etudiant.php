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
    <h1 align="center"> Supprimer un étudiant </h1> </br>
	
	     <ul class="menu"><!-- Liste des boutons pour naviguer entre les pages admin-->
			    <li>
			        <a href="deconnexion.php">Deconnexion</a>
			    </li>
			    <li>
			        <a href="admin_Annonce.php">Supprimer Annonce</a>
			    </li>
			    <li>
			        <a href="admin_Entreprise.php">Supprimer Entreprise</a>
			    </li>
				<li>
			        <a href="admin.php">Retour page admin</a>
			    </li>
			</ul>
   
  	<div><!--Tableau déroulent-->
			<table align="center">
					<thead>
						<tr>
							<th>Numéro étudiant</th>
							<th>Nom étudiant</th>
							<th>Prénom étudiant</th>
							<th>Mail étudiant</th>
							<th>Inscription alerte</th>
						</tr>
					</thead>
					<tbody> 
   <?php
     $req="SELECT * FROM `etudiant`";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		
		 <tr>
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
	<!--fin du tableau déroulent-->
	
	
	
    

</body>
</html>