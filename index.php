<?php
	if(!isset($_SESSION)){
		session_start();
		$_SESSION["co"]=0;
	}
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
            Magic Web
			<?php
				date_default_timezone_set("America/Guadeloupe");
				echo " " . date("d-m-y");
				$date = date("y-m-d");
			?> 
        </title>
        <link rel='stylesheet' type='text/css' href='site.css'>
    </head>
	<body>
		<header>
		<ul>
			<li><a href="index.php"><img id="univ" src= "univ.png"></a></li>
			<li><a id="nav" href="index.php">Accueil</a></li>
			<li><a id="nav" href="connexion.php">Connexion</a></li>
			<li><a id="nav" href="choix_inscription.html">Inscription</a></li>
			<li><a id="nav" href="support.php">Support</a></li>
		</ul>
		</header>
	<div id="layout">
		<div id="block">
			<img id="img" src='images/Stage-Water-Logo.png' alt=''>
		</div>
	</div>
		<h1> Voici la liste des stages disponibles à la date du :  <?php echo " " . date("d-m-y"); ?></h1>
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
						while ($row = $result->fetch_assoc()) 
						{
							?>
							<tr>
								<td><?php echo utf8_encode($row['sujet'])?></td>
								<td><?php echo utf8_encode($row['type'])?></td>
								<td><?php echo $row['date_debut']?></td>
								<td><?php echo $row['date_fin']?></td>	
							</tr>
							<?php
						}
					   
					?>
					</tbody>
			</table>
		</div>
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social">
                    	<a href="https://www.facebook.com/univ.antilles/"><i class="icon ion-social-facebook" data-icon="ion:logo-facebook"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" fill-rule="evenodd" d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16c24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31Z"/></svg></i></a>
                    	<a href="https://twitter.com/univantilles/"><i class="icon ion-social-twitter"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M496 109.5a201.8 201.8 0 0 1-56.55 15.3a97.51 97.51 0 0 0 43.33-53.6a197.74 197.74 0 0 1-62.56 23.5A99.14 99.14 0 0 0 348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 0 0 2.54 22.1a280.7 280.7 0 0 1-203-101.3A95.69 95.69 0 0 0 36 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0 1 35.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 0 1-25.94 3.4a94.38 94.38 0 0 1-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0 1 39.5 405.6a203 203 0 0 1-23.5-1.4A278.68 278.68 0 0 0 166.74 448c181.36 0 280.44-147.7 280.44-275.8c0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 0 0 496 109.5Z"/></svg></i></a>
                    	<a href="https://www.instagram.com/univantilles/"><i class="icon ion-social-instagram"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"/><path fill="currentColor" d="M377.33 162.67a28 28 0 1 1 28-28a27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256A74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112a112 112 0 0 0-112-112Z"/></svg></i></a>
                    </div>
                </div>
                <p class="copyright">Magic Web © 2022</p>
            </div>
        </footer>
    </div>
	</body>
</html>