<!----------------Pas finis et en cours de modification----->

<?php
// Start the session 
session_start();

// Creation de la connexion
$con = mysqli_connect('localhost', 'root', 'root', 'test') or die('Impossible de se connecter');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      text-align: center;
    }

    .fiel {
      margin-bottom: 20px;
    }
  </style>
  <title>Accueil</title>
</head>

<body>

  <h2>Connexion</h2>

  <select class="form-select" name="role" aria-label="Default select example">
    <option selected value ="user" >Etudiant</option>
    <option value="entreprise">Entreprise</option>
    <option value="admin">Admin</option>
   
  </select>
  <br>
  <br>

  <div>
    <form action="index_anais.php" method="post">
      <input type="text" class="fiel" name="username" placeholder="username" required=""></br>
      <input type="password" class="fiel" name="password" placeholder="password" required=""></br>
      <input type="submit" class="fiel" name="login" value="Login"></br>
    </form>

  </div>

  <?php


  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];



   /* $select = mysqli_query($con, "SELECT * FROM connexion WHERE username = '$username' AND password = '$password'");
    if ((empty(username)){
      $select = mysqli_query($con, "SELECT * FROM etudiant  WHERE username = '$username' AND password = '$motdepasse'");
    }
    else if(empty($password))){
      $select = mysqli_query($con, "SELECT * FROM contact  WHERE username = '$username_contact' AND password = '$mdp_contact'");
    }
    else(){}
    $select = mysqli_query($con, "SELECT * FROM  WHERE username = '$username' AND ")
    $row = mysqli_fetch_array($select);*/



    if (is_array($row)) {
      $_SESSION["username"] = $row['username'];
      $_SESSION["password"] = $row['password'];
    } else {
      echo 'Veuillez entrer un username ou un mot de passe correct';
    }

    if (isset($_SESSION["username"])) {
      header("Location:connexion.php");
    }
  }

  ?>


</body>

</html>