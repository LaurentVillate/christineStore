<?php include_once('header.php');?>

<div class="container">
    <div class="row pt-4">
        <div class="card-text pt-3  pb-5 text-center textelong">
            <h3><?=$lang['newsletterintro']?></h3>
        </div>
    </div>
    <div class="card-text pt-4 d-flex justify-content-center">
        <form class="row g-3" action="NewsletterAjoutController.php" method="POST">
            <div class="col-auto">
                <input type="text" class="form-control form-control" id="email" name="mail"
                    placeholder="<?=$lang['youremail']?>">
                <!--message d'erreur... -->
                <?php if(isset($erreur_mail)){?>
                <?php echo "<span class='erreur'>$erreur_mail</span>";?>
                <?php }?>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-outline-dark icones mb-3"><?=$lang['newsletterbutton']?></button>
            </div>
        </form>
    </div>
    <div class="card-text pb-5 text-center textelongpetit">
        <?=$lang['newsletterlegal']?>
    </div>

    <?php include_once('footer.php'); ?>