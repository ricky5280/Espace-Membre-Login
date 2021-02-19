<?php 
session_start();		// ça permet de créer des variables de session. Il n'y a pas besoin de le mettre sur les autres pages car toutes les pages passent par l'index

require_once'includes/functions.php';

require_once'config/database.php';


$errors=[];  // initialisation du tableau contenant les erreurs du formulaire



if (!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.php'  ) )

	{ 


  	require_once'controllers/'.$_GET['page'].'.php';  

	}

	else {

		require_once'controllers/accueil.php' ;

	}




 ?>