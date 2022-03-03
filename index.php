<?php include('views/header.php'); ?>
<section>
  <!-- Header de la section: Images iconiques et résumé-->
  <header>
    <!-- h1 invisible pour le référencement-->
    <h1 class="d-none">L'essentiel de Christine's, images et texte</h1>
    <div class="container">
      <div class="row mt-2">
        <figure class="figure">
          <img src="public/img/lhonorable.jpg" class="figure-img img-fluid" alt="lhonorable">
          <figcaption class="legendephoto">©lhonorable</figcaption>
        </figure>
      </div>
      <div class="row mt-4 mb-5">
        <div class="card-text text-center textelong mt-5 mb-3">
          <?=$lang['introduction']?>
        </div>
      </div>
      <div class="row pb-5 gx-3">
        <div class="col-3">
          <img src="public/img/lhonorable2.jpg" class="img-responsive" style=width:100% alt="lhonorable">
        </div>
        <div class="col-3">
          <img src="public/img/leilariaza.png" class="img-responsive" style=width:100% alt="leilariaza">
        </div>
        <div class="col-3">
          <img src="public/img/vivekabergstrom.png" class="img-responsive" style=width:100% alt="viveka bergstrom">
        </div>
        <div class="col-3">
          <img src="public/img/johannabramble.jpeg" class="img-responsive" style=width:100% alt="johanna bramble">
        </div>
      </div>
    </div>
    <hr>
    </hr>
  </header>
  <!-- Texte à propos et photo-->
  <article id="aboutChristine">
    <div class="container">
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
          <figure class="figure">
            <img src="public/img/portraitChristine.jpg" class="figure-img img-fluid"
              alt="portrait de Christine par Antoine Tempé">
            <figcaption class="legendephoto">©Antoine Tempé</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <hr>
    </hr>
  </article>
  <article id="designers">
    <div class="container">
      <div class="pb-5">
        <div class="row pt-5">
          <div class="card-text pt-2  pb-5 text-center textelong">
            <h3><?=$lang['designers']?></h3>
          </div>
        </div>
        <div class="row py-5 gx-3">
          <div class="col-6 d-flex justify-content-center">
            <div class="thumbnail-container">
              <img src="public/img/johannabramble2.jpeg" class="thumbnail" alt="johanna bramble">
              <div class="card-text pt-3 pb-4 textelong text-center">
                <h5>Johanna Bramble</h5>
                <a><?=$lang['more']?><i class="bi bi-caret-right-fill icones"></i></a>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-center">
            <div class="thumbnail-container">
              <img src="public/img/leilariaza3.png" class="thumbnail" alt="leila riaza">
              <div class="card-text pt-3 pb-4 textelong text-center">
                <h5>Leila Riaza</h5>
                <a><?=$lang['more']?><i class="bi bi-caret-right-fill icones"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row py-5 gx-3">
          <div class="col-6 d-flex justify-content-center">
            <div class="thumbnail-container">
              <img src="public/img/lhonorable3.jpg" class="thumbnail" alt="lhonorable">
              <div class="card-text pt-3 pb-4 textelong text-center">
                <h5>Lhonorable</h5>
                <a><?=$lang['more']?><i class="bi bi-caret-right-fill icones"></i></a>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-center">
            <div class="thumbnail-container">
              <img src="public/img/vivekabergstrom4.png" class="thumbnail" alt="viveka bergstrom">
              <div class="card-text pt-3 pb-4 textelong text-center">
                <h5>Viveka Bergström</h5>
                <a><?=$lang['more']?><i class="bi bi-caret-right-fill icones"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      </hr>
    </div>
  </article>
  <!-- Informations de contact -->
  <article id="contactChristine">
    <div class="container">
      <div class="row pt-5">
        <div class="card-text pt-2  pb-5 text-center textelong">
          <h3><?=$lang['contact']?></h3>
        </div>
      </div>
      <div class="card-text pb-5 text-center textelong">
        <h6> <?=$lang['message']?></h6>
        <div class="card-text pt-2 pb-5">
          <!--<a href="Views/contact.php"><i class="bi bi-envelope-open iconesbig"></i></a>-->
          <a href="Views/Contact.php"><i class="bi bi-envelope-open iconesbig"></i></a>
        </div>
        <h6><?=$lang['visit']?></h6>
        <div class="card-text pt-2 pb-5">
          <p>13, rue d'Alençon – 61130 Bellême</p>
          <p>+33 (0)6 71 87 85 04</p>
          <a href="https://goo.gl/maps/zVWdqiWP3w7hA3Q98" target="_blank"><i class="bi bi-geo-alt iconesbig"></i></a>
        </div>
        <h6><?=$lang['join']?></h6>
        <div class="card-text pt-2 pb-5">
          <span class="mx-2"><a href="https://www.facebook.com/pages/Christines/244740169024487?fref=ts"
              target="_blank"><i class="bi bi-facebook iconesbig"></i></a></span>
          <span class="mx-2"><a href="https://www.instagram.com/christinesstoreaccessories/" target="_blank"><i
                class="bi bi-instagram iconesbig"></i></a></span>
        </div>
        <h6><?=$lang['newsletter']?></h6>
        <div class="card-text pt-2 pb-5">
          <a href="Controllers/NewsletterAjoutController.php"><i class="bi bi-send iconesbig"></i></a>
        </div>
      </div>
    </div>
  </article>
</section>








<?php include_once('views/footer.php'); ?>