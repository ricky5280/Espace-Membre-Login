<?php require_once 'models/register.model.php';  ?>



<?php 
if (isset($_POST['register'])) 	{

		//si tous les champs sont remplis

		if (not_empty(['name','pseudo','email','password','confirm_password'])) 	{

				// $_POST=array_map('strip_tags',$_POST);
				$_POST=array_map('htmlspecialchars',$_POST);    // array_map permet d'executer une fonction sur chaque element d'un array

				extract($_POST,EXTR_SKIP);	  //extract crée une variable avec chaque element d'un array
												// EXTR_SKIP evite d'écraser une variable si elle existe déjà

					//verif longeur 

					if (mb_strlen($name)<=5) {
						$errors[]="Nom trop court (minimum de 6 caractères)" ;

						}

					if (mb_strlen($pseudo)<4) {
						$errors[]="Pseudo trop court (minimum de 4 caractères)" ;

						}


					if(!filter_var($email, FILTER_VALIDATE_EMAIL))   {

						$errors[]="Adresse email invalide";
						
						}



					// verif si le pseudo n'est pas déjà dans la base

					if (is_already_in_use('pseudo', $pseudo, 'users'))   {

						$errors[]="Le pseudo est déjà utilisé";


						}


					// verif si l'email n'est pas déjà dans la base

					if (is_already_in_use('email', $email, 'email'))   {

						$errors[]="L'email est déjà utilisé";


						}


					if (mb_strlen($password)<6) {

							$errors []="Password trop court (minimum de 6 caractères)" ;

							}  	else  {

										if ($password!=$confirm_password)  {		//  si le test de longeur n'est pas validé, on ne fait pas ce test

											$errors[]="Les deux passwords ne concordent pas";
										}


									}



				if (count($errors)==0)  {					// condition qui verifie s'il y a des erreurs

			

						$password = password_hash($password, PASSWORD_DEFAULT);

						
						register_user($name,$pseudo,$email,$password);



						messages_flash("Le compte a bien été crée");  // pas besoin du 2e parametre car deja "success" par defaut


							
						header('location: ?page=login');   //jamais d'html avant header
						exit;  // pour etre sur que les eventuelles commandes ecrites apres, ne soient pas executées


					}
			
							else  	{

									save_input_data();	    //  cas où au moins 1 champ n'est pas rempli correctement

								}


			}	



				else  {

						$errors[]=" Veuillez remplir tous les champs";

						save_input_data();				//  cas où au moins 1 champs est vide	

					}

	}



		else  {

			clear_input_data();


		}




 ?>





<?php require_once 'views/register.view.php';  ?>