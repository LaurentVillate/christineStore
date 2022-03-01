<?php

//code pour définir le chemin racine du localhost
$url = $_SERVER['REQUEST_URI']; //returns the current URL
//echo $url. '<br>';
$parts = explode('/',$url);
//print_r($parts);
//echo 'part : ' .print_r($parts). '<br> counts parts : '.count($parts).'<br>';
$dir_root = $_SERVER['SERVER_NAME'];
//echo 'serveur name :' .$dir_root. '<br>';
for ($i = 0; $i <= count($parts) - 1; $i++) {
    $racine ="christineStore";
    if($parts[$i] != $racine ){
    $dir_root .= $parts[$i] . "/";
    }else{
        $i = count($parts) ;
    }
}
//echo 'root directory : ' .$dir_root. '<br>';
?>
<?php
  //require_once "lang/config.php";
  require_once "/Applications/XAMPP/xamppfiles/htdocs/christineStore/lang/config.php"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>christinestore</title>
  <meta name="description" content="christine's accompagne designers et créateurs de mode, bijoux et accessoires" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link rel="stylesheet" href="public/CSS/style.css">-->
  <link rel="stylesheet" href="http://<?=$dir_root?>christineStore/public/CSS/style.css">
</head>

<body>

  <header>
    <nav class="navbar">
      <div class="container">
        <ul class="nav d-flex flex-grow-1 fonttopfoot">
          <!--<li class="nav-item">
            <a class="nav-link text-reset" href="#"><i class="bi bi-facebook"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" href="#"><i class="bi bi-instagram"></i></a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link text-reset" href="https://goo.gl/maps/zVWdqiWP3w7hA3Q98" target="_blank"><i
                class="bi bi-geo-alt"></i> 13, rue d'Alençon – 61130 Bellême</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" href="tel:+33233857453"><i class="bi bi-telephone-fill"></i> 02 33 85 74
              53</a>
          </li>
        </ul>
        <ul class="nav d-flex justify-content-end fontmenu">
          <li class="nav-item">
            <!--<a class="nav-link text-reset fw-bold text-decoration-underline" href="<?=$url?>?lang=fr">FR</a>-->
            <a class="nav-link text-reset fw-bold text-decoration-underline"
              href="<?=$_SERVER['PHP_SELF'].'?lang=fr'?>">FR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset fw-bold text-decoration-underline"
              href="<?=$_SERVER['PHP_SELF'].'?lang=en'?>">EN</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <hr>
  </hr>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand d-flex flex-grow-1" href="#">
        <img src="/christineStore/public/img/christine-logo.png" class="img-responsibvde" height="30"
          alt="logo de Christine's">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <!--<span class="navbar-toggler-icon"></span>-->
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav d-flex justify-content-between fontmenu" style="width:100%">
          <a class="nav-link text-reset" href="/christineStore/index.php#"><?=$lang['home']?></a>
          <a class="nav-link text-reset" href="/christineStore/index.php#designers"><?=$lang['designers']?></a>
          <a class="nav-link text-reset" href="/christineStore/index.php#aboutChristine"><?=$lang['about']?></a>
          <a class="nav-link text-reset" href="/christineStore/index.php#contactChristine"><?=$lang['contact']?></a>
          <a class="nav-link text-reset" href="#"><?=$lang['shop']?></a>
        </div>
      </div>
      <ul class="nav d-flex justify-content-md-end">
        <li class="nav-item">
          <a class="nav-link text-reset" href="#"><i class="bi bi-person-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-reset" href="#"><i class="bi bi-cart4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-reset" href="#"><i class="bi bi-search"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="/PDO/index.php"><i class="bi bi-house-door-fill py-0 text-danger"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-light py-0" aria-current="page"
                            href="/PDO/Controllers/PatientsListController.php">Liste des patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-light py-0" aria-current="page"
                            href="/PDO/Controllers/PatientAjoutController.php">Ajouter un patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-light py-0" aria-current="page"
                            href="/PDO/Controllers/RendezvousListController.php">Liste des rendez-vous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-light py-0" aria-current="page"
                            href="/PDO/Controllers/RendezvousAjoutController.php">Ajouter un rendez-vous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>-->
  <!-- fin header.-->