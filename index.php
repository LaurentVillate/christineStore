<?php include('views/header.php'); ?>

<div class="container">

<div class="card">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/img/lhonorable.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/img/vivekabergstrom.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/img/johannabramble.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/img/lhonorable.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <p>©lhonorable</p>
      </div>
            </div>
            <div class="carousel-item">
                <img src="public/img/vivekabergstrom.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/img/johannabramble.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="card-text text-center">
        <p>blablabla</p>
        <p>blablabla</p>
        <p>blablabla</p>
    </div>
</div>

<?php include_once('views/footer.php'); ?>