<?php ob_start(); ?>

<h1>Inscription</h1>


<?php require_once'_partials/errors.php' ; ?>



<form method="POST">
  <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" name="name" value="<?= get_input('name'); ?>" placeholder="Votre nom">
  </div>              <!-- dans value on met la valeur qui est recuperée grace à la fonction "save input data" -->

  <div class="form-group">
    <label>Pseudo</label>
    <input type="text" class="form-control" name="pseudo" value="<?= get_input('pseudo'); ?>" placeholder="Pseudo">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?= get_input('email'); ?>" placeholder="Email">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary" name="register">Inscription</button>
</form>



<?php $content = ob_get_clean(); ?>


<?php require_once'views/gabarit.php' ; ?>