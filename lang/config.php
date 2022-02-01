<?php
    session_start();
    // Si la variable $_SESSION['lang'] existe, est déclarée...//
    if (!isset($_SESSION['lang'])){
    // La variable en question prend comme valeur "fr". Donc le français est la langue par défaut de la session//
        $_SESSION['lang'] = "fr";
    }
    //Sinon si:
    // on récupère une variable dans $_GET['lang'] 
    // et que cette valeur est différente de la langue de session
    // et que cette valeur n'est pas vide
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        //Si la langue récupérée est le français, alors le français est la langue de session
        if ($_GET['lang'] == "fr"){
            $_SESSION['lang']= "fr";
        }
        // Sinon si la langue récupérée est l'anglais, alors la langue de session est l'anglais
        else if ($_GET['lang'] == "en"){
            $_SESSION['lang'] = "en";
        }   
    }

require_once "languages/".$_SESSION['lang'].".php";

// NB: $_SESSION et $_GET sont des superglobables