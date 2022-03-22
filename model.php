<?php
require("mail/class.smtp.php");
require("mail/class.phpmailer.php");

function generateur_code($longueur=30)
  {
      $bytes = random_bytes($longueur);
      $code=substr(bin2hex($bytes), 0, $longueur);
      return $code;
  }

function envoie_mail_validation($identite,$adresse,$lien) /* OK 03-09-17 */
  {
  global $HOSTMAIL,$MAIL,$USERMAIL,$PASSMAIL,$PORTMAIL;

  $message=
  "
  <p>
  Bonjour,
  </p>
  <p>
  Afin de valider votre compte, veuillez suivre ce lien :
  </p>
  <p>
  ".$lien."
  </p>
  <p>
  Vous souhaitant bonne reception,
  </p>
  ";

  $mail = new PHPMailer();

  //Tell PHPMailer to use SMTP
  $mail->IsSMTP();

  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug  = 0;

  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host       = $HOSTMAIL;

  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port       = $PORTMAIL;

  //Set the encryption system to use - ssl (deprecated) or tls
  //$mail->SMTPSecure = 'tls';

  $mail->SMTPAutoTLS = false;
  $mail->SMTPSecure = false;

  //Whether to use SMTP authentication
  $mail->SMTPAuth   = true;

  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username   = $USERMAIL;

  //Password to use for SMTP authentication
  $mail->Password   = $PASSMAIL;

  //Set who the message is to be sent from
  $mail->SetFrom($MAIL, 'ma structure');

  //Set an alternative reply-to address
  //$mail->AddReplyTo('nagau.jimmy@gmail.com','Jimmy NAGAU');

  //Set who the message is to be sent to
  $mail->AddAddress($adresse,utf8_decode($identite));
  $mail->AddAddress($MAIL,utf8_decode("Inscription de ".$identite));

  //Set the subject line
  $mail->Subject = "Validation d'inscription";

  //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
  //$mail->MsgHTML(file_get_contents('contents.html'), dirname(__FILE__));
  //Replace the plain text body with one created manually
  $mail->MsgHTML($message);
  $mail->AltBody = '...';

  //Attach an image file
  //$mail->AddAttachment($fichier);

  //Send the message, check for errors
  if(!$mail->Send())
    {
      //KO
    }
  else
    {
      //OK
    }
  unset($mail);
  }

function envoie_mail_alerte($identite,$adresse,$lien, $sujet, $contenu, $) 
  {
  global $HOSTMAIL,$MAIL,$USERMAIL,$PASSMAIL,$PORTMAIL;

  $message=
  "
  <p>
  Bonjour,
  </p>
  <p>
  Afin de valider votre compte, veuillez suivre ce lien :
  </p>
  <p>
  ".$lien."
  </p>
  <p>
  Vous souhaitant bonne reception,
  </p>
  ";

  $mail = new PHPMailer();

  //Tell PHPMailer to use SMTP
  $mail->IsSMTP();

  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug  = 0;

  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host       = $HOSTMAIL;

  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port       = $PORTMAIL;

  //Set the encryption system to use - ssl (deprecated) or tls
  //$mail->SMTPSecure = 'tls';

  $mail->SMTPAutoTLS = false;
  $mail->SMTPSecure = false;

  //Whether to use SMTP authentication
  $mail->SMTPAuth   = true;

  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username   = $USERMAIL;

  //Password to use for SMTP authentication
  $mail->Password   = $PASSMAIL;

  //Set who the message is to be sent from
  $mail->SetFrom($MAIL, 'ma structure');

  //Set an alternative reply-to address
  //$mail->AddReplyTo('nagau.jimmy@gmail.com','Jimmy NAGAU');

  //Set who the message is to be sent to
  $mail->AddAddress($adresse,utf8_decode($identite));
  $mail->AddAddress($MAIL,utf8_decode("Inscription de ".$identite));

  //Set the subject line
  $mail->Subject = "Validation d'inscription";

  //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
  //$mail->MsgHTML(file_get_contents('contents.html'), dirname(__FILE__));
  //Replace the plain text body with one created manually
  $mail->MsgHTML($message);
  $mail->AltBody = '...';

  //Attach an image file
  //$mail->AddAttachment($fichier);

  //Send the message, check for errors
  if(!$mail->Send())
    {
      //KO
    }
  else
    {
      //OK
    }
  unset($mail);
  }
//--------------------------------------------------------------------------------------------
?>

?>
