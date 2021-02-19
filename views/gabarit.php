<?php require_once'_partials/header.php';  ?>


<?php require_once'_partials/nav.php';  ?>  




<main class="container">
    

	<?php 
			if (!empty ($_SESSION['messages_flash']))

			{	

	echo $_SESSION['messages_flash'] ;
	$_SESSION['messages_flash']=[];			//apres avoir fait apparaitre le message, on supprime la variable pour que ne continue pas de s'afficher sur chaque page

			}	


	?>

<?=	$content; 	 ?> 			<!--   on affiche le contenu.  Le gabarit est la dernière étape après laquelle le contenu voulu est affiché sur le navigateur. Dans $content il y a le contenu de la mémoire tampon créé dans la view. Chaque view appelle le gabarit      -->



</main>



<?php require_once'_partials/footer.php'  ?>