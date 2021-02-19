<?php 



	// verification que les champs ne sont pas vides


	function not_empty(array $fields)  {   // création tableau
	

		if (count($fields)!=0)	{     // verif.si il y a des elements dans le tableau
		

			foreach ($fields as $field) {

				if (empty($_POST[$field]) || trim($_POST[$field])=="")  {

				
						return false;      // verif.que tous les champs soient remplis, sinon "false"
					}

				}

				return true;

			}	


		}


	// verification de l'unicité d'une valeur (pseudo et email)

	function is_already_in_use($field, $value, $table)  {

		$bdd=getBdd();

		$q=$bdd->prepare('SELECT id FROM '.$table.' WHERE '.$field.' = ? ');    // soit on met ? et ensuite $value (tableau numerotée) ou sinon :value  et    [$value,
		 

		$q->execute([$value]);

		$count=$q->rowCount();    // compter les lignes où apparait $value et renvoie 1 s'il y a au moins une ligne et 0 s'il y en a pas

									//methode plus rapide par rapport à extraire une valeur de la bdd et le confronter avec la valeur saisie (ex.fetch, etc.) 


		return $count;


		}




	function messages_flash($message,$type='success')  {            // on donne une valeur par defaut à $type, donc on ne sera pas obligés de saisir 2 parametres quand on appelle la fonction (->register)

										//cotes simples pour ne pas créer conflit avec les classes html
											// et pour que les variables soient reconnues sans besoin de signe de concatenation 

											// on remplace "warning" dans le message avec variable $type

											// le contenu des variables session est affiché dans le gabarit

	$_SESSION['messages_flash']='       			


	<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">     
	  
	  '.$message.'											

	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>


	';



	}




	function save_input_data() {						// pour garder en memoire les valeurs des champs saisis en cas d'erreur sur un champ, pour qu'il ne soient pas effacés

		foreach	($_POST as $key => $value) {

				if (strpos($key,'password')==false)	 {	//on peut ne pas mettre d'accolade car il y a 1 seule instruction à executer, s'il y en avait plusieurs il executerait seulement la premiere	

				$_SESSION['input'][$key]=$value;				// risque: il pourrait y avoir une autre array avec le meme key
															// il faut créer un array à 2 dimensions pour l'identifier de manière univoque avec input
					
					}


			}	


		}
	



	function get_input($key) {				//ça sert a recuperer les champs deja saisis avant le message d'erreur

		if(!empty($_SESSION['input'][$key]))  {

				return htmlspecialchars($_SESSION['input'][$key]);	

			}


	} 



	function clear_input_data() 	{ 			// efface les données saisis dans le formulaire, une fois l'inscription validée. Autrement les champs restent remplis

		$_SESSION['input']=[];				// si on avait pas créé un array à 2 dim "input" on aurait du écrire 3 fois 
											//$_SESSION['name']=[]; $_SESSION['pseudo']=[]; $_SESSION['email']=[];

		}




?>