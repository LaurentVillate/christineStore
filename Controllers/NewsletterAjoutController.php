<?php
    require_once dirname(__FILE__).'/../utils/database.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){   
   try { 
        // Construction de la requête INSERT sans injection SQL//
       
            $requete = $pdo->prepare("INSERT INTO newsletter_mails (mails)  
            VALUES (:mails)");                    
            $requete->bindValue(':mails', $_POST["mail"], PDO::PARAM_STR);           
            $requete->execute(); 
            echo "<div class='alert alert-danger' role='alert'>
                 Le mail a été ajouté.
                 </div>";
           //header("location: index.php" );
    }
    catch (Exception $e) {
        echo "<div class='alert alert-danger' role='alert'>
        L'ajout du mail à échoué!
        </div>"; 
    }
    }
       
include dirname(__FILE__).'/../Views/newsletter_ajout.php';