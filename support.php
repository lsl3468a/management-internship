<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Magic Web / Support</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12"> <br>
			<div class="row">
				<div class="col-md-4">
					<h2 class="text-center">
					   Magic Web
					</h2>
				</div>
				<div class="col-md-3">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="accueil.php">Accueil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="support.php">Support</a>
						</li>
						<li class="nav-item dropdown ml-md-auto">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Menu</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="commande_auto.php">Commande automatique</a> <a class="dropdown-item" href="commande_manu.php">Commande manuelle</a> <a class="dropdown-item" href="vue_camera.php">Vue caméra</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="parametre.php">Paramètre</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
				</div>
                 <div class="col-md-2">
                  <h4>
                  Id: <?php echo $_SESSION['nom']; ?>
                  </h4>
                  </div>
				<div class="col-md-1">
					 <a href="deconnexion.php" class="btn btn-danger ">Log out</a>
				</div>
			</div> <br><br><br>
<div class="row">
		<div class="col-md-12">
		 <h3 class="text-center text-success">
			Support
		 </h3>
		 </div>
   </div><br><br>
<div class="row">
		<div class="col-md-12">
        		<h6 class="text-center">
        		Pour tout éventuel problème rencontré sur le site, <br>
                veuillez contacter notre service client<a href="mailto:support@magicweb.com"> ici</a>.<br>
                Nous veillerons à traiter votre message dans de brefs délais.<br>
                Vos problèmes sont également les notres.
                </h6>
		 </div>
</div>
</div>
</div>

</div>

  </body>
</html>