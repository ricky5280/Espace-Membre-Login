<?php require_once 'models/login.model.php';  ?>


<?php 


if (isset($_POST['login']))	  {			// comme dans register  / login est le nom du bouton "connexion"
	 


		if (not_empty(['pseudo','password']))  {
			

				$_POST=array_map('htmlspecialchars',$_POST);    		// comme dans register

				
				extract($_POST,EXTR_SKIP);


				getLogin($pseudo,$password);


			}
 

	}



?>


<?php require_once 'views/login.view.php';  ?>