<?php

require_once "/Applications/XAMPP/xamppfiles/htdocs/christineStore/lang/config.php";
require_once dirname(__FILE__).'/../utils/database.php';
 // Validation de l'adresse mail avec filter_var($, FILTER_VALIDATE_EMAIL)//
if (!empty($_POST["mail"])){
    $mail = $_POST["mail"];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        // Si l'e-mail est valide, il est enregistré dans la bdd //
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){   
            try { 
             // Construction de la requête INSERT sans injection SQL//          
                 $requete = $pdo->prepare("INSERT INTO newsletter_mails (mails)  
                 VALUES (:mails)");                    
                 $requete->bindValue(':mails', $_POST["mail"], PDO::PARAM_STR);           
                 $requete->execute(); 
                 $success = $lang['successmessage'];
                 echo "<script>alert('$success');</script>"; 
                 echo "<script>window.location.href = '../index.php';</script>";
            }
            catch (Exception $e) {
             echo "<div class='alert alert-danger' role='alert'>
             L'ajout du mail à échoué!
             </div>"; 
            }
        }
    }
    // Si e-mail non valide affichage du message d'erreur//
    else{
        $erreur_mail = $lang['errormail'];       
    }
}


include dirname(__FILE__).'/../Views/newsletter_ajout.php';