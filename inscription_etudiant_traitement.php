<?php
    require_once 'dao.php';
    include("mail.php");
    if(!empty($_POST['nom_etudiant']) && !empty($_POST['prenom_etudiant']) && !empty($_POST['num_etudiant']) && !empty($_POST['mail_etudiant']) && !empty($_POST['mdp_etudiant']) && !empty($_POST['retape_mdp']))
    {
        $nom_etudiant = htmlspecialchars($_POST['nom_etudiant']);
        $prenom_etudiant = htmlspecialchars($_POST['prenom_etudiant']);
        $num_etudiant = htmlspecialchars($_POST['num_etudiant']);
        $mail_etudiant = htmlspecialchars($_POST['mail_etudiant']);
        $mdp_etudiant = htmlspecialchars($_POST['mdp_etudiant']);
        $retape_mdp = htmlspecialchars($_POST['retape_mdp']);


        $check = $bdd->prepare('SELECT * FROM etudiant WHERE num_etudiant = ?');
        $check->execute(array($num_etudiant));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){
            if(strlen($nom_etudiant) <= 20){
                if(strlen($prenom_etudiant) <= 20){
                    if(strlen($num_etudiant) == 8){
                        if(strlen($mail_etudiant) <= 50){
                            if(filter_var($mail_etudiant, FILTER_VALIDATE_EMAIL)){
                                if($mdp_etudiant == $retape_mdp){
                                  if($_POST['inscription_alerte']=='on'){
                                    $inscription_alerte = 1;
                                  } else {
                                    $inscription_alerte = 0;
                                  }
                                $code = generateur_code();
                                $confirmation = 0;
                                $insert = $bdd->prepare('INSERT INTO `etudiant`(`num_etudiant`, `nom_etudiant`, `prenom_etudiant`, `mdp_etudiant`, `mail_etudiant`, `inscription_alerte`, `code`,`confirmation`) VALUES (?,?,?,md5(?),?,?,?,?)');

                                $insert->execute(array($num_etudiant, $nom_etudiant, $prenom_etudiant, $mdp_etudiant, $mail_etudiant, $inscription_alerte, $code, $confirmation));
                                envoyermail($mail_etudiant,$code);
                                

                                  header('Location:connexion.php?reg_err=success');
                                 die();
                                }else{ header('Location: inscription_etudiant.php?reg_err=mdp_etudiant'); die();}
                            }else{ header('Location: inscription_etudiant.php?reg_err=mail_etudiant'); die();}
                        }else{ header('Location: inscription_etudiant.php?reg_err=mail_etudiant_length'); die();}
                    }else{ header('Location: inscription_etudiant.php?reg_err=num_etudiant_length'); die();}
                }else{ header('Location: inscription_etudiant.php?reg_err=prenom_etudiant_length'); die();}
            }else{ header('Location: inscription_etudiant.php?reg_err=nom_etudiant_length'); die();}
        }else{ header('Location: inscription_etudiant.php?reg_err=already'); die();}
    }
    ?>

