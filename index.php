<?php include('views/header.php'); ?>

<div class="container">
  <!--CAROUSEL-->
  <!--<div class="row">
    <div id="carouselExampleSlidesOnly" class="carousel slide margincarousel" data-bs-ride="carousel" data-interval="100">
      <div class="carousel-inner">
        <div class="carousel-item active imgcarousel">
          <img src="public/img/lhonorable.jpg" class="d-block w-75" alt="...">
        </div>
        <div class="carousel-item imgcarousel">
          <img src="public/img/vivekabergstrom.png" class="d-block w-75" alt="...">
        </div>
        <div class="carousel-item imgcarousel">
          <img src="public/img/johannabramble.jpeg" class="d-block w-75" alt="...">
        </div>
        <div class="carousel-item imgcarousel">
          <img src="public/img/leilariaza.png" class="d-block w-75" alt="...">
        </div>
      </div>
    </div>
  </div>-->
  <div class="row mb-5 mt-2">
    <img src="public/img/lhonorable.jpg" alt="...">
  </div>
  <div class="row my-5">
    <div class="card-text text-center textelong mt-5 mb-3">
      <p>Des créations en édition limitée ou une pièce unique au style affûté, confectionnées par des designers
        internationaux, issus de différents horizons.</p>
      <p>Artisans de talent que je souhaite mettre en lumière, séduite par leur originalité, leur personnalité et leur
        savoir-faire.</p>
      <p>Découvrez ma sélection de bijoux et d’accessoires pour se démarquer avec élégance et caractère.</p>
    </div>
  </div>
  <div class="row pb-5 gx-3">
    <div class="col-3">
      <img src="public/img/lhonorable2.jpg" class="img-responsive" style=width:100% alt="...">
    </div>
    <div class="col-3">
      <img src="public/img/leilariaza.png" class="img-responsive" style=width:100% alt="...">
    </div>
    <div class="col-3">
      <img src="public/img/vivekabergstrom.png" class="img-responsive" style=width:100% alt="...">
    </div>
    <div class="col-3">
      <img src="public/img/johannabramble.jpeg" class="img-responsive" style=width:100% alt="...">
    </div>
  </div>
</div>
<hr>
</hr>
<div class="container">
  <div id="aboutChristine">
    <div class="row pt-3">
      <div class="card-text pt-5 pb-3 textelong">
        <h3><?=$lang['abouttitle']?></h3>
      </div>
    </div>
    <div class="row gx-5 pb-5">
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
<hr>
</hr>
<div class="container">
  <div class="row pt-5">
    <div class="card-text pt-3  pb-5 text-center textelong">
      <h3><?=$lang['contact']?></h3>
    </div>
  </div>
  <div class="card-text pb-5 text-center textelong">
    <h6>Ecrire à Christine's</h6>
    <div class="card-text pt-2 pb-5">
      <a href="#"><i class="bi bi-envelope-open icones"></i></a>
    </div>
    <h6>Visitez le concept store</h6>
    <div class="card-text pt-2 pb-5">
      <p>13, rue d'Alençon – 61130 Bellême</p>
      <p>+33 (0)6 71 87 85 04</p>
      <a href="#"><i class="bi bi-geo-alt icones"></i></a>
    </div>
    <h6>Rejoignez-nous sur</h6>
    <div class="card-text pt-2 pb-5">
      <span class="mx-2"><a href="#"><i class="bi bi-facebook icones"></i></a></span>
      <span class="mx-2"><a href="#"><i class="bi bi-instagram icones"></i></a></span>
    </div>
    <h6>Suivez les actualités de Christine's</h6>
    <div class="card-text pt-2 pb-5">
      <form>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre e-mail" aria-describedby="emailHelp">
      <button type="submit" class="btn btn-primary">S'abonner</button>
      </form>
    </div>
  </div>
</div>





<?php include_once('views/footer.php'); ?>