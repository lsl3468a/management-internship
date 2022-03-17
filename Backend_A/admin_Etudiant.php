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
	
	echo "Conexion établie ";
	echo "<br/>";
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
    <h2>Page Admin <h2/>
	<?php
	 $_SESSION['prenom'] = 'Pierre';
    $_SESSION['nom'] = 'jack';
	$_SESSION['id_etudiant'] =223369;
	?>
	
	
    
     <button type="button" onclick="alert('Vous avez étez déconnecter!')" <?php //session_destroy;?> >Deco_admin</button>
	  <button type="button" onclick="window.location.href = 'http://localhost/Backend_A/admin_Annonce.php';">Annonce</button>
	  <a href="admin_Entreprise.php"><button type="button">Entreprise</button></a>
    
   
   <?php
     $req="SELECT * FROM `etudiant`";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		<table>
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
	
	<?php
	 echo "<br/>";
	 echo 'Nom: ' .$_SESSION['nom']. '<br>';
     echo 'Prenom :' .$_SESSION['prenom']. '<br>';
	 echo 'Numero étudiant :' .$_SESSION['id_etudiant']. '<br>';
     ?>
	
	
	
    

</body>