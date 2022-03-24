<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inscription</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container-fluid">
<div class="row">
		<div class="col-md-12">
			<h3 class="text-center"> <br> <br>
			 Inscription pour étudiant
			</h3>
		</div>
	</div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<br>
  <form action="inscription_etudiant_traitement.php" method="post">
       <div class="form-group">
          <input type="text" name="nom_etudiant" class="form-control" placeholder="Nom" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="text" name="prenom_etudiant" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
       </div>
       <div class="form-group">
            <input type="text" name="num_etudiant" class="form-control" placeholder="N° étudiant" required="required" autocomplete="off">
       </div>
       <div class="form-group">
          <input type="email" name="mail_etudiant" class="form-control" placeholder="Adresse mail" required="required" autocomplete="off">
       </div>
       <div class="form-group">
          <input type="password" name="mdp_etudiant" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
       </div>
       <div class="form-group">
          <input type="password" name="retape_mdp" class="form-control" placeholder="Confirmez le mot de passe" required="required" autocomplete="off">
       </div>
       <div class="form-group">
          <div class="position-relative w-100">
              <label><input class="checkbox" type="checkbox" name="inscription_alerte"> Activer les notifications</label><br>
          </div>
       </div>

       <div class="form-group">
          <button type="submit" class="btn btn-primary">
           Inscription
          </button>
       </div>
  </form>
            <div class="login-form">
                        <?php
                            if(isset($_GET['reg_err']))
                            {
                                $err = htmlspecialchars($_GET['reg_err']);

                                switch($err)
                                {
                                    case 'success':
                                    ?>
                                        <div class="alert alert-success">
                                            <strong>Succès</strong> inscription réussie !
                                        </div>
                                    <?php
                                    break;

                                    case 'nom_etudiant_length':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> nom trop long
                                        </div>
                                    <?php
                                    break;

                                    case 'prenom_etudiant_length':
                                    ?>
                                        <div class="alert alert-danger">
                                             <strong>Erreur</strong> prénom trop long
                                        </div>
                                    <?php
                                    break;

                                    case 'num_etudiant_length':
                                    ?>
                                        <div class="alert alert-danger">
                                             <strong>Erreur</strong> numéro étudiant incorrecte
                                        </div>
                                    <?php
                                    break;

                                    case 'mail_etudiant':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> email non valide
                                        </div>
                                    <?php
                                    break;

                                    case 'mail_etudiant_length':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> email trop long
                                        </div>
                                    <?php
                                    break;

                                    case 'mdp_etudiant':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> mot de passe différent
                                        </div>
                                    <?php
                                    break;

                                    case 'already':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> compte déja existant
                                        </div>
                                    <?php

                                }
                            }
                            ?>
            </div>
            </div>

</div>
</div>
</div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>