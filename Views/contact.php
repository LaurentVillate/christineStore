<?php include_once('header.php');?>

<div class="container">
<div class="row pt-4">
        <div class="card-text pt-3  pb-5 text-center textelong">
          <h3><?=$lang['message']?></h3>
        </div>
      </div>
      <div class="card-text pb-5 text-center textelong">
        <?=$lang['introform']?>
</div>
<form method="POST" action="contact_script2.php" class= "textelong">
<div class="mb-3">
  <!-- php: Si l'utilisateur rempli le champ, les caractères saisis sont insérés dans value et persistent tant que le formulaire n'est pas correct et envoyé.-->
  <label for="nom" class="form-label"><?=$lang['yourname']?></label>
  <!-- Condition dans l'input (value): s'il y a un nom saisi il persiste pendant les erreurs-->
  <input type="text" class="form-control" id="nom" name="nom" value="<?php if (array_key_exists('nom', $_POST)) echo htmlentities($_POST['nom'])?>"><br>
   <!-- php =  affichage d'un message d'erreur si le champ est vide ou incorrect -->
  <?php if(isset($erreur_nom)){?>
    <?php echo "<span class='erreur'>$erreur_nom</span>";?>
  <?php }?>
</div>
<div class="mb-3">
  <!--champ persistant jusqu'à soumission si valide... -->
  <label for="mail" class="form-label"><?=$lang['youremail']?></label>
  <input type="text" class="form-control" id="mail" name="mail" placeholder="name@example.com" value="<?php if (array_key_exists('mail', $_POST)) echo htmlentities($_POST['mail'])?>"><br>
  <!--message d'erreur... -->
  <?php if(isset($erreur_mail)){?>
    <?php echo "<span class='erreur'>$erreur_mail</span>";?>
  <?php }?>
</div>
<div class="mb-3">
<!--champ persistant jusqu'à soumission si valide... -->  
  <label for="objet" class="form-label"><?=$lang['object']?></label>
  <input type="text" class="form-control" id="objet" name="objet" value="<?php if (array_key_exists('objet', $_POST)) echo htmlentities($_POST['objet'])?>"><br>
  <!--message d'erreur... -->
  <?php if(isset($erreur_objet)){?>
    <?php echo "<span class='erreur'>$erreur_objet</span>";?>
  <?php }?>
</div>
<div class="mb-3">
  <!--champ persistant jusqu'à soumission si valide... -->
  <label for="message" class="form-label"><?=$lang['yourmessage']?></label>
  <textarea class="form-control" id="message" name="message" rows="5"><?php if (array_key_exists('message', $_POST)) echo htmlentities($_POST['message'])?></textarea><br>
  <!--message d'erreur... -->
  <?php if(isset($erreur_message)){?>
    <?php echo "<span class='erreur'>$erreur_message</span>";?>
  <?php }?>
</div>
<div class="form-check">
  <!-- Champ d'acceptation de la politique de confidentialité-->
  <input class="form-check-input" type="checkbox" value="" id="privacy" name="privacy">
  <label class="form-check-label" for="privacy">
  <?=$lang['privacy']?>
  </label>
  <!--message d'erreur... -->
  <?php if(isset($erreur_privacy)){?>
    <?php echo "<span class='erreur'><br>$erreur_privacy</span>";?>
  <?php }?>
</div>
<div>
    <button type="submit" class="btn btn-outline-dark btn-sm icones mt-2 mb-5"><?=$lang['submit']?></button>
    <?php if(isset($successy)){?>
    <?php echo "<script>alert($success)</script>";?>
  <?php }?>
  </div>

    </form>


</div>

<?php include_once('footer.php'); ?>