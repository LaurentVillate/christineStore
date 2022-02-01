<?php
  include "lang/config.php"
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>
    <header>
    <nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#"><i class="bi bi-instagram"></i></a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#"><i class="bi bi-geo-alt"></i></a>
  <li class="nav-item">13, rue d'Alençon – 61130 Bellême</li>
  <a class="flex-sm-fill text-sm-center nav-link" href="#"><i class="bi bi-telephone-fill"></i> 02 33 85 74 53</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="index.php?lang=fr">FR</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="index.php?lang=en">EN</a>
</nav>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="public/img/christine-logo-white-small.png" alt="" width="30" height="24" class="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#"><?=$lang['home']?></a>
        <a class="nav-link" href="#"><?=$lang['designers']?></a>
        <a class="nav-link" href="#"><?=$lang['about']?></a>
        <a class="nav-link" href="#"><?=$lang['shop']?></a>
        <a class="nav-link" href="#"><i class="bi bi-person-fill"></i></a>
        <a class="nav-link" href="#"><i class="bi bi-cart4"></i></a>
        <a class="nav-link" href="#"><i class="bi bi-search"></i></i></a>
      </div>
    </div>
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