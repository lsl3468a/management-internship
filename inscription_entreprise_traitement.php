<?php
require_once 'dao.php';
include('mail.php');

if(!empty($_POST['nom_societe']) && !empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['pays']) && !empty($_POST['code_postal']) && !empty($_POST['num_siret']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail_contact']) && !empty($_POST['tel_contact']) && !empty($_POST['mdp_contact']) && !empty($_POST['retape_mdp']) ){
    $nom_societe = htmlspecialchars($_POST['nom_societe']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $pays = htmlspecialchars($_POST['pays']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $num_siret = htmlspecialchars($_POST['num_siret']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail_contact = htmlspecialchars($_POST['mail_contact']);
    $tel_contact = htmlspecialchars($_POST['tel_contact']);
    $mdp_contact = htmlspecialchars($_POST['mdp_contact']);
    $retape_mdp = htmlspecialchars($_POST['retape_mdp']);



    $check = $bdd->prepare('SELECT nom_societe, adresse, ville, pays, code_postal, num_siret FROM entreprise WHERE nom_societe = ? ');
    $check->execute(array($nom_societe));
    $data = $check->fetch();
    $row = $check->rowCount();
    $check = $bdd->prepare ('SELECT nom, id_entreprise, prenom, mdp_contact, mail_contact, tel_contact FROM contact WHERE mail_contact = ?');
    $check->execute(array($mail_contact));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        if(strlen($nom_societe) <= 100){
            if(strlen($adresse) <= 100){
                if(strlen($ville) <= 50){
                    if(strlen($pays) <= 50){
                        if(strlen($code_postal) <= 5){
                            if(strlen($num_siret) <= 14){
                                if(strlen($nom) <= 20){
                                    if(strlen($prenom) <= 20){
                                        if(preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel_contact)){
                                            if(strlen($mail_contact) <= 50){
                                                if(filter_var($mail_contact, FILTER_VALIDATE_EMAIL)){
                                                    if($mdp_contact == $retape_mdp){
                                                        $code = generateur_code();
                                                        $confirmation = 0;
                                                         $insert = $bdd->prepare('INSERT INTO `entreprise`(`nom_societe`, `adresse`, `ville`, `pays`, `code_postal`, `num_siret`) VALUES (:nom_societe, :adresse, :ville, :pays, :code_postal, :num_siret)');
                                                        $insert->execute(array(
                                                                      'nom_societe' => $nom_societe,
                                                                      'adresse' => $adresse,
                                                                      'ville' => $ville,
                                                                      'pays' => $pays,
                                                                      'code_postal' => $code_postal,
                                                                      'num_siret' => $num_siret
                                                                         ));

                                                         $select = $bdd->prepare('SELECT `id_entreprise` FROM `entreprise` WHERE nom_societe = ?');
                                                         $select-> execute(array($nom_societe));
                                                         $data = $select->fetch();


                                                         $insert = $bdd->prepare('INSERT INTO `contact`(`nom`, `id_entreprise`, `prenom`, `mail_contact`,`tel_contact`, `mdp_contact`,`code`,`confirmation`) VALUES (?,?,?,?,?,md5(?), ?, ?)');
                                                         $insert->execute(array($nom, $data['id_entreprise'], $prenom, $mail_contact, $tel_contact, $mdp_contact, $code, $confirmation));
                                                         envoyermail($mail_contact, $code);


                                                         header('Location: connexion.php?reg_err=success');
                                                        die();
                                                     }else{ header('Location: inscription_entreprise.php?reg_err=mdp_contact'); die();}
                                                }else{ header('Location: inscription_entreprise.php?reg_err=mail_contact'); die();}
                                             }else{ header('Location: inscription_entreprise.php?reg_err=mail_contact_length'); die();}
                                         }else{ header('Location: inscription_entreprise.php?reg_err=tel_contact_length'); die();}
                                     }else{ header('Location: inscription_entreprise.php?reg_err=prenom_length'); die();}
                                }else{ header('Location: inscription_entreprise.php?reg_err=nom_length'); die();}
                            }else{ header('Location: inscription_entreprise.php?reg_err=num_siret_length'); die();}
                        }else{ header('Location: inscription_entreprise.php?reg_err=code_postal_length'); die();}
                    }else{ header('Location: inscription_entreprise.php?reg_err=pays_length'); die();}
                }else{ header('Location: inscription_entreprise.php?reg_err=ville_length'); die();}
            }else{ header('Location: inscription_entreprise.php?reg_err=adresse_length'); die();}
        }else{ header('Location: inscription_entreprise.php?reg_err=nom_societe_length'); die();}
     }else{ header('Location: inscription_entreprise.php?reg_err=already'); die();}
 }
