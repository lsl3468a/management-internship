<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="site.css">
    <title>Inscription</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <div class="container-fluid">
        <div class="row">
		  <div class="col-md-12">
			<h3 class="text-center"> <br> <br>
			 Inscription entreprise
			</h3>
		</div>
	</div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<br>
  <form action="inscription_entreprise_traitement.php" method="post">

        <div class="form-group">
           <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="on">
        </div>
        <div class="form-group">
           <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="on">
        </div>
        <div class="form-group">
            <input type="email" name="mail_contact" class="form-control" placeholder="Adresse mail" required="required" autocomplete="on">
        </div>
        <div class="form-group">
          <input type="text" name="tel_contact" class="form-control" placeholder="N° téléphone" required="required" autocomplete="on">
        </div>
        <div class="form-group">
          <input type="text" name="nom_societe" class="form-control" placeholder="Nom de la sociéte" required="required" autocomplete="on">
       </div>
       <div class="form-group">
          <input type="text" name="num_siret" class="form-control" placeholder="N° siret" required="required" autocomplete="on">
       </div>
       <div class="form-group">
           <input list="liste" name="pays" class="form-control" placeholder="Pays" required="required" autocomplete="off">

           <datalist id="liste">
             <option value="Afghanistan"><option value="Afrique du Sud"><option value="Aland (Îles)"><option value="Albanie"><option value="Algérie"><option value="Allemagne">
             <option value="Andorre"><option value="Angola"><option value="Anguilla"><option value="Antarctique"><option value="Antigua-et-Barbuda"><option value="Arabie saoudite">
             <option value="Argentine"><option value="Arménie"><option value="Aruba"><option value="Australie"><option value="Autriche"><option value="Azerbaïdjan"><option value="Bahamas">
             <option value="Bahreïn"><option value="Bangladesh"><option value="Barbade"><option value="Belgique"><option value="Belize"><option value="Bermudes"><option value="Bhoutan">
             <option value="Bolivie (État plurinational de)"><option value="Bonaire, Saint-Eustache et Saba"><option value="Bosnie-Herzégovine"><option value="Botswana">
             <option value="Bouvet (Île)"><option value="Brunéi Darussalam"><option value="Brésil"><option value="Bulgarie"><option value="Burkina Faso"><option value="Burundi">
             <option value="Bélarus"><option value="Bénin"><option value="Cabo Verde"><option value="Cambodge"><option value="Cameroun"><option value="Canada"><option value="Caïmans (Îles)">
             <option value="Chili"> <option value="Chine"><option value="Christmas (Île)"><option value="Chypre"><option value="Cocos (Îles) / Keeling (Îles)"><option value="Colombie">
             <option value="Comores"> <option value="Congo"> <option value="Congo (République démocratique du)"><option value="Cook (Îles)"><option value="Corée (République de)">
             <option value="Corée (République populaire démocratique de)"><option value="Costa Rica"><option value="Croatie"> <option value="Cuba"><option value="Curaçao">
             <option value="Côte d'Ivoire"><option value="Danemark"><option value="Djibouti"><option value="dominicaine (République)"><option value="Dominique"><option value="Egypte">
             <option value="El Salvador"><option value="Emirats arabes unis"><option value="Equateur"><option value="Erythrée"><option value="Espagne"><option value="Estonie">
             <option value="Etats-Unis d'Amérique"><option value="Ethiopie"><option value="Falkland (Îles) / Malouines (Îles)"><option value="Fidji"><option value="Finlande">
             <option value="France"><option value="Féroé (Îles)"><option value="Gabon"><option value="Gambie"><option value="Ghana"><option value="Gibraltar"><option value="Grenade">
             <option value="Groenland"><option value="Grèce"><option value="Guadeloupe"><option value="Guam"><option value="Guatemala"><option value="Guernesey"><option value="Guinée">
             <option value="Guinée équatoriale"><option value="Guinée-Bissau"><option value="Guyana"><option value="Guyane française"><option value="Géorgie"><option value="Géorgie du Sud-et-les Îles Sandwich du Sud">
             <option value="Haïti"><option value="Heard-et-MacDonald (Île)"><option value="Honduras"><option value="Hong Kong"><option value="Hongrie"><option value="Ile de Man">
             <option value="Iles mineures éloignées des États-Unis"><option value="Inde"><option value="Indien (Territoire britannique de océan)"><option value="Indonésie"><option value="Iran (République Islamique d')">
             <option value="Iraq"><option value="Irlande"><option value="Islande"><option value="Israël"><option value="Italie"><option value="Jamaïque"><option value="Japon">
             <option value="Jersey"> <option value="Jordanie"><option value="Kazakhstan"><option value="Kenya"><option value="Kirghizistan"><option value="Kiribati"><option value="Koweït">
             <option value="Lao, République démocratique populaire"><option value="Lesotho"><option value="Lettonie"><option value="Liban"><option value="Libye"><option value="Libéria">
             <option value="Liechtenstein"><option value="Lituanie"><option value="Luxembourg"><option value="Macao"><option value="Macédoine (ex-République yougoslave de)">
             <option value="Madagascar"><option value="Malaisie"><option value="Malawi"><option value="Maldives"><option value="Mali"><option value="Malte"><option value="Mariannes du Nord (Îles)"><option value="Maroc">
             <option value="Marshall (Îles)"><option value="Martinique"><option value="Maurice"><option value="Mauritanie"><option value="Mayotte"><option value="Mexique">
             <option value="Micronésie (États fédérés de)"><option value="Moldova (République de)"><option value="Monaco"><option value="Mongolie"><option value="Montserrat"><option value="Monténégro">
             <option value="Mozambique"><option value="Myanmar"><option value="Namibie"><option value="Nauru"><option value="Nicaragua"><option value="Niger"><option value="Nigéria"><option value="Niue">
             <option value="Norfolk (Île)"><option value="Norvège"><option value="Nouvelle-Calédonie"><option value="Nouvelle-Zélande"><option value="Népal"><option value="Oman"><option value="Ouganda">
             <option value="Ouzbékistan"><option value="Pakistan"><option value="Palaos"><option value="Palestine, État de"><option value="Panama"><option value="Papouasie-Nouvelle-Guinée">
             <option value="Paraguay"><option value="Pays-Bas"><option value="Philippines"><option value="Pitcairn"><option value="Pologne"><option value="Polynésie française"><option value="Porto Rico"><option value="Portugal">
             <option value="Pérou"><option value="Qatar"><option value="Roumanie"><option value="Royaume-Uni de Grande-Bretagne et d'Irlande du Nord"><option value="Russie (Fédération de)">
             <option value="Rwanda"><option value="République arabe syrienne"><option value="République centrafricaine"><option value="Réunion"><option value="Sahara occidental"><option value="Saint-Barthélemy"><option value="Saint-Kitts-et-Nevis">
             <option value="Saint-Marin"><option value="Saint-Martin (partie française)"><option value="Saint-Martin (partie néerlandaise)"><option value="Saint-Pierre-et-Miquelon"><option value="Saint-Siège">
             <option value="Saint-Vincent-et-Grenadines"><option value="Sainte-Hélène, Ascension et Tristan da Cunha"><option value="Sainte-Lucie"><option value="Salomon (Îles)"><option value="Samoa"><option value="Samoa américaines">
             <option value="Sao Tomé-et-Principe"><option value="Serbie"><option value="Seychelles"><option value="Sierra Leone"><option value="Singapour"><option value="Slovaquie"><option value="Slovénie">
             <option value="Somalie"><option value="Soudan"><option value="Soudan du Sud"><option value="Sri Lanka"><option value="Suisse"><option value="Suriname"><option value="Suède">
             <option value="Svalbard et Île Jan Mayen"><option value="Swaziland"><option value="Sénégal"><option value="Tadjikistan"><option value="Tanzanie, République-Unie de"><option value="Taïwan (Province de Chine)">
             <option value="Tchad"><option value="Tchéquie"><option value="Terres austrafrançaises"><option value="Thaïlande"><option value="Timor-Leste"><option value="Togo">
             <option value="Tokelau"><option value="Tonga"><option value="Trinité-et-Tobago"><option value="Tunisie"><option value="Turkménistan"><option value="Turks-et-Caïcos (Îles)"><option value="Turquie">
             <option value="Tuvalu"><option value="Ukraine"><option value="Uruguay"><option value="Vanuatu"><option value="Venezuela (République bolivarienne du)"><option value="Vierges britanniques (Îles)">
             <option value="Vierges des États-Unis (Îles)"><option value="Viet Nam"><option value="Wallis-et-Futuna "><option value="Yémen"><option value="Zambie"><option value="Zimbabwe">
           </datalist>
       </div>
       <div class="form-group">
          <input type="text" name="ville" class="form-control" placeholder="Ville" required="required" autocomplete="on">
       </div>
       <div class="form-group">
          <input type="text" name="code_postal" class="form-control" placeholder="Code postal" required="required" autocomplete="on">
       </div>
       <div class="form-group">
          <input type="text" name="adresse" class="form-control" placeholder="Adresse" required="required" autocomplete="on">
        </div>
       
             <div class="form-group">
                <input type="password" name="mdp_contact" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
             </div>
           
             <div class="form-group">
                <input type="password" name="retape_mdp" class="form-control" placeholder="Confirmez mot de passe" required="required" autocomplete="off">
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

                                    case 'nom_societe_length':
                                     ?>
                                     <div class="alert alert-danger">
                                       <strong>Erreur</strong> nom trop long
                                     </div>
                                    <?php
                                    break;

                                    case 'adresse_length':
                                    ?>
                                      <div class="alert alert-danger">
                                        <strong>Erreur</strong> adresse trop long
                                      </div>
                                    <?php
                                    break;

                                    case 'ville_length':
                                    ?>
                                       <div class="alert alert-danger">
                                           <strong>Erreur</strong> ville incorrecte
                                       </div>
                                    <?php
                                    break;

                                    case 'pays_length':
                                    ?>
                                        <div class="alert alert-danger">
                                           <strong>Erreur</strong> pays incorrecte
                                        </div>
                                    <?php
                                    break;

                                    case 'code_postal_length':
                                    ?>
                                        <div class="alert alert-danger">
                                           <strong>Erreur</strong> code postal incorrecte
                                        </div>
                                    <?php
                                    break;

                                    case 'num_siret_length':
                                    ?>
                                        <div class="alert alert-danger">
                                           <strong>Erreur</strong> Numéro de siret inccorecte
                                        </div>
                                    <?php
                                    break;

                                    case 'nom_length':
                                    ?>
                                        <div class="alert alert-danger">
                                           <strong>Erreur</strong> Nom trop long
                                        </div>
                                    <?php
                                    break;

                                    case 'prenom_length':
                                    ?>
                                        <div class="alert alert-danger">
                                           <strong>Erreur</strong> Prénom trop long
                                        </div>
                                    <?php
                                    break;

                                    case 'mdp_contact':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> mot de passe différent
                                        </div>
                                    <?php
                                    break;

                                    case 'mail_contact':
                                     ?>
                                         <div class="alert alert-danger">
                                             <strong>Erreur</strong> email non valide
                                         </div>
                                     <?php
                                     break;

                                     case 'mail_contact_length':
                                     ?>
                                         <div class="alert alert-danger">
                                             <strong>Erreur</strong> email trop long
                                         </div>
                                     <?php
                                     break;

                                     case 'tel_contact_length':
                                     ?>
                                         <div class="alert alert-danger">
                                             <strong>Erreur</strong> Numéro de téléphone incorrecte
                                         </div>
                                     <?php
                                     break;

                                    case 'already':
                                    ?>
                                        <div class="alert alert-danger">
                                            <strong>Erreur</strong> compte deja existant
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
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>