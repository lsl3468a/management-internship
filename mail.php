<?php
if(!function_exists('random_bytes') )
{
    function random_bytes($length = 6)
    {
        $characters = '0123456789';
        $characters_length = strlen($characters);
        $output = '';
        for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

        return $output;
    }
}

function generateur_code($longueur=4)
{
    $bytes = random_bytes($longueur);
    $code=substr(bin2hex($bytes), 0, $longueur);
    return $code;
}

function envoyermail($to, $code){
	$header="MIME-Version : 1.0\r\n";
	$header.='From:"MagicWeb"<magic.web.stage.com>'."\n";
	$header .= 'Content-Type:text/html;charset="utf-8"'."\n";
	$header .= 'Content-Transfer-Enconding :8bit';
	$message='
	<html>
		<body>
		<div align="center">
		Bonjour, <br>
		L\'équipe Magic Web vous remercie pour votre inscription sur notre site de gestion de stage ! <br>
		Pour finaliser votre inscription veuillez confirmer votre adresse mail sur la page suivante : <br>
		<a href="localhost/management-internship/confirmation.php">Confirmation</a> <br>

		Votre code de confirmation est le suivant : '.$code.' <br>
		Merci et à bientôt, <br>
		Toute l\'équipe Magic Web !

		</div>
		</body>
	</html>';

	mail($to,"Confirmation de mail",$message,$header);
}

function mail_inscrip_OK($to){
	$header="MIME-Version : 1.0\r\n";
	$header.='From:"MagicWeb"<magic.web.stage.com>'."\n";
	$header .= 'Content-Type:text/html;charset="utf-8"'."\n";
	$header .= 'Content-Transfer-Enconding :8bit';
	$message='
	<html>
		<body>
		<div align="center">
		Bonjour, <br>
		L\'équipe Magic Web vous remercie pour votre inscription sur notre site de gestion de stage ! <br>
		Nous vous confirmons que vous êtes correctement inscrit(e)s ! <br>
		Merci et à bientôt, <br>
		Toute l\'équipe Magic Web !

		</div>
		</body>
	</html>';

	mail($to,"Confirmation de mail",$message,$header);
}

function mail_alerte($to, $type, $sujet, $contenu){
	$header="MIME-Version : 1.0\r\n";
	$header.='From:"MagicWeb"<magic.web.stage.com>'."\n";
	$header .= 'Content-Type:text/html;charset="utf-8"'."\n";
	$header .= 'Content-Transfer-Enconding :8bit';
	$message='
	<html>
		<body>
		<div align="center">
		Bonjour, <br>
		Une nouvelle annonce est disponible sur notre site ! <br>
		Il s\'agit de : '.$type.' <br>
		'.$sujet.' <br>
		Contenu du stage : '.$contenu.' <br>
		Pour plus de détails, rendez-vous sur le <a href="localhost/management-internship/index.php">site web</a> ! <br> <br>
		Toute l\'équipe Magic Web !

		</div>
		</body>
	</html>';

	mail($to,"Confirmation de mail",$message,$header);
}

?>