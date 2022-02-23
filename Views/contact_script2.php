<?php
 //require_once "lang/config.php";
 require_once "/Applications/XAMPP/xamppfiles/htdocs/christineStore/lang/config.php";
//Conditions successives concernant chaque champ du formulaire: le champ ne doit pas être vide; une fois rempli, il doit être correct//
// Validation des noms : si non vide, la regex impose l'utilisation exclusive de lettres et de tirets. La même regex est utilisé pour le champ ville //
    if (empty($_POST["nom"])){
        $erreur_nom = $lang['emptyname'];
    }
    if (!empty($_POST["nom"])){
        $nom = $_POST["nom"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $nom)){
        }
        else{
        $erreur_nom = $lang['errorname'];
        }
    }
    // Validation de l'adresse mail avec filter_var($, FILTER_VALIDATE_EMAIL)//
    if (empty($_POST["mail"])){
        $erreur_mail = $lang['emptymail'];
    }
    if (!empty($_POST["mail"])){
        $mail = $_POST["mail"];
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        }
        else{
            $erreur_mail = $lang['errormail'];
        }
    }
    // Validation objet
    if (empty($_POST["objet"])){
        $erreur_objet = $lang['emptysubject'];
    }
    if (!empty($_POST["objet"])){
        $objet = $_POST["objet"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $objet)){
        }
        else{
        $erreur_objet = $lang['errorsubject'];
        }
    }
    // Validation du message
    if (empty($_POST["message"])){
        $erreur_message = $lang['emptymessage'];
    }
    if (!empty($_POST["message"])){
        $message = $_POST["message"];
        //Regex pour le message, permettant: chiffre, caractères, accentuations françaises, ponctuation, apostrophe et guillemets//
        if (preg_match("~^[0-9a-zA-Z-áàâçéèêëîïôöùûæœÀÂÇÉÈÊËÎÔÕÖÙÆŒ.:;,!\?\'\"_\s]+$~", $message)){ 
        }
        else{
        $erreur_message = $lang['errormessage'];
        }
    }
    
    if(isset($_POST["privacy"])){
    }
    else{
        $erreur_privacy = $lang['emptyprivacy'];
    }
    

    //Si toutes les variables d'erreur sont vides, le formulaire est envoyé, sinon on reste sur la page du formulaire//
    if (empty($erreur_nom) && empty($erreur_objet) && empty($erreur_mail) && empty($erreur_message) && empty($erreur_privacy)){
    // Le message de succès eest stocké dans une variabe puis s'affiche dans une alert JS. Redirection en JS//    
        $success = $lang['successmessage'];
        echo "<script>alert('$success');</script>"; 
        echo "<script>window.location.href = '../index.php';</script>";       
    }
    else{
    // En cas d'erreur(s) dans le formulaire, on reste sur la page//
        include("contact.php");
    }
?>