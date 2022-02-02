<?php include('views/header.php'); ?>

<div class="container">
  <div class="row">
    <div id="carouselExampleSlidesOnly" class="carousel slide margincarousel" data-bs-ride="carousel" data-interval="100">
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
        <div class="carousel-item">
          <img src="public/img/leilariaza.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="card-text text-center textelong py-5">
      <p>Des créations en édition limitée ou une pièce unique au style affûté, confectionnées par des designers
        internationaux, issus de différents horizons.</p>
      <p>Artisans de talent que je souhaite mettre en lumière, séduite par leur originalité, leur personnalité et leur
        savoir-faire.</p>
      <p>Découvrez ma sélection de bijoux et d’accessoires pour se démarquer avec élégance et caractère.</p>
    </div>
  </div>
  <div id="aboutChristine">
    <div class="row">
    <div class="card-text pb-4 textelong">
        <h3><?=$lang['abouttitle']?></h3>
      </div>
    </div>
  <div class="row gx-5">
    <div class="cols-12 col-sm-7">
      <div class="card-text textelong">
        <?=$lang['bio']?>
      </div>
    </div>
    <div class="cols-12 col-sm-5">
      <img src="public/img/portraitChristine.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  </div>
  

</div>


<?php include_once('views/footer.php'); ?>