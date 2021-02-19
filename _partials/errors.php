

<?php if(isset($errors) && count($errors)!=0 )

{


// code à afficher s'il y a des erreurs 


echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">';
 
	foreach ($errors as $error) {

		echo $error.'<br>' ; 
	}
	

echo ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">

    	<span aria-hidden="true">&times;</span>
  		</button>
	</div> ';


}

?>