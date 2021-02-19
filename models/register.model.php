<?php 

	function register_user($name,$pseudo,$email,$password)   {
					

		$bdd = getBdd();		//  requete preparée   les valeurs dans VALUES sont en attente d'être rempli. Ils pourraient etre sous forme "?" mais :name est plus clair

		$q = $bdd->prepare('INSERT INTO users(name,pseudo,email,password)     
			VALUES (:name,:pseudo,:email,:password)');

		$q->execute(["name"=>$name,
					"pseudo"=>$pseudo,
					"email"=>$email,
					"password"=>$password,
						]);

		}



 ?>