<?php 


	function getLogin($pseudo,$password)   {

		$bdd = getBdd();						 // ":pseudo" est la clé qui sera remplie quand la requete sera executée


		$q=$bdd->prepare("SELECT id,pseudo,password FROM users WHERE (pseudo=:pseudo OR email=:pseudo) ");

		$q->execute(['pseudo'=>$pseudo]);


		$userHasBeenFound=$q->rowCount();
		$user=$q->fetch();



		// debug :

		// echo '<pre>';
		// print_r($user);     
		// echo '</pre>';


	}							









 ?>