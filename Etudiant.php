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
    <h2>Page test <h2/>
	<?php
	 $_SESSION['prenom'] = 'Pierre';
    $_SESSION['nom'] = 'jack';
	$_SESSION['id_etudiant'] =223369;
	?>
	
	
    
     <button type="button" onclick="alert('Vous avez étez déconnecter!')" <?php //session_destroy;?> >Déconnexion</button>
     <button type="button" onclick="window.location.href = 'http://localhost/Backend/connexion';">Connexion</button>
     <button type="button" onclick="window.location.href = 'http://localhost/Backend/inscription';">Inscription</button>
	 <button type="button" onclick="window.location.href = 'http://localhost/Backend/a_propos';">A propos</button>
	  <button type="button" onclick="window.location.href = 'http://localhost/Backend/acceuil.php';">test_deco</button>
   
   <?php
     $req="SELECT * FROM stage";
	 $result = $conn->query($req);
	 
	 if ($result->num_rows > 0 )
		 {
    // affiche les données de chaque ligne
    while ($row = $result->fetch_assoc()) 
	{
		 
		?>
		<table>
		 <tr>
                    <td><?php echo $row['id_stage']?></td>
                    <td><?php echo $row['sujet']?></td>
					<td><?php echo $row['contenu']?></td>
					<td><?php echo $row['type']?></td>
					<td><?php echo $row['pref_etu']?></td>
				    <td><?php echo $row['date_debut']?></td>
					<td><?php echo $row['date_fin']?></td>
					<td><?php echo $row['methode_cand']?></td>
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
</html>