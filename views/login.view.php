<?php ob_start(); ?>                 

                <!-- ce qui est entre ob_start et ob_get_clean est mis en memoire tampon -->

<h1>Connexion</h1>

<form method="POST">
  
  <div class="form-group">
    <label>Pseudo</label>
    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
  </div>


  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>


  
  </div>
  <button type="submit" class="btn btn-primary" name="login">Connexion</button>
</form>



<?php $content = ob_get_clean(); ?>


<?php require_once'views/gabarit.php' ; ?>