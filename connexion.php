<?php

session_start();
$session = NULL;

if(isset($_POST["connect"])){
    $_SESSION["id"] = 1;
    $session = "connecté";
}

if(isset($_POST["deconnect"])){
    $_SESSION["id"] = NULL;
    $session = "deconnecté";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleaccueil.css" />

</head>
<body>
    <h1> Welcome <?php echo $_SESSION['username'];?></h1>
    <a href = "deconnexion_anais.php"><button class = "deco">Deconnexion</button></a>
   <!--<p> Etat de la session <?php echo $session; ?></p>-->

    <br> 
    <br>
    <br>

    <ul class="navbar">

  <li class ="nav-item"><a href="main.html">Accueil</a></li>
  <li class ="nav-item"><a href="depotcandidature.php">Deposer une annonce</a></li>
  <li class ="nav-item"><a href=".php">Profil</a></li>
</ul>

<?php 
    $con = mysqli_connect('localhost', 'root', 'root', 'test');
    $sql = "SELECT * FROM candidature";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

          
    while ($row = mysqli_fetch_array($result)){ 
         ?>
         <table>
            <tr>
                 <th>Numéro de candidat</th>
                 <th>Curriculum vitae</th>
                 <th>Lettre de motivation</th>
            </tr>
          <tr id="<?php echo $row['id_candidat'] ?>">
                     <td><?php echo $row['num_etudiant']?></td>
                     <td><?php echo $row['CV']?></td>
                     <td><?php echo $row['LM']?></td>       
           </tr>
           <table>
         <?php
    }


?> 

</body>
</html>
