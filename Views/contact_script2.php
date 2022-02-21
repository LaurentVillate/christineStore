<?php
//Conditions successives concernant chaque champ du formulaire: le champ ne doit pas être vide; une fois rempli, il doit être correct//
// Validation des noms : si non vide, la regex impose l'utilisation exclusive de lettres et de tirets. La même regex est utilisé pour le champ ville //
    if (empty($_POST["nom"])){
        $erreur_nom = "Veuillez renseigner votre nom";
    }
    if (!empty($_POST["nom"])){
        $nom = $_POST["nom"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $nom)){
        }
        else{
        $erreur_nom = "Saisissez seulement des lettres et des tirets";
        }
    }
    // Validation de l'adresse mail avec filter_var($, FILTER_VALIDATE_EMAIL)//
    if (empty($_POST["mail"])){
        $erreur_mail = "Veuillez renseigner le mail";
    }
    if (!empty($_POST["mail"])){
        $mail = $_POST["mail"];
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        }
        else{
            $erreur_mail = "Mail non valide";
        }
    }
    // Validation objet
    if (empty($_POST["objet"])){
        $erreur_objet = "Veuillez indiquer l'objet de votre message";
    }
    if (!empty($_POST["objet"])){
        $objet = $_POST["objet"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $objet)){
        }
        else{
        $erreur_objet = "Saisissez seulement des lettres et des tirets";
        }
    }
    // Validation du message
    if (empty($_POST["message"])){
        $erreur_message = "Ecrivez votre message";
    }
    if (!empty($_POST["message"])){
        $message = $_POST["message"];
        //Regex pour le message, permettant: chiffre, caractères, accentuations françaises, ponctuation, apostrophe et guillemets//
        if (preg_match("~^[0-9a-zA-Z-áàâçéèêëîïôöùûæœÀÂÇÉÈÊËÎÔÕÖÙÆŒ.:;,!\?\'\"_\s]+$~", $message)){ 
        }
        else{
        $erreur_message = "Votre message contient des caractères non acceptés";
        }
    }
    
    if(isset($_POST["privacy"])){
    }
    else{
        $erreur_privacy = "Merci d'accepter notre politique de confidentialité";
    }
    

    //Si toutes les variables d'erreur sont vides, le formulaire est envoyé, sinon on reste sur la page du formulaire//
    if (empty($erreur_nom) && empty($erreur_objet) && empty($erreur_mail) && empty($erreur_message) && empty($erreur_privacy)){
   //include("contact_script.php")//;
        header("Location:../index.php"); 
    }
    else{
        include("contact.php");
    }
?>