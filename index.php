<!DOCTYPE html>
<html>
<head>
	<title>conditions</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$heure_connexion=19;
		if($heure_connexion<18){
			 echo "passez une bonne journée </br> ";
			 $journée="oui";
		}

		else{
			echo "passez une bonne soiree </br>";
			$journée="non";
		}
		echo 'fait-il jour? la reponse est ' .$journée.'.</br>';
		
	 ?>
	 <?php
	 	$note=11;
	 	if($note<10){
	 		echo "vous n'avez pas eu la moyenne";
	 	}
	 	elseif($note==10){
	 		echo "vous avez eu juste la moyenne";
	 	}
	 	else{
	 		echo "vous avez eu la moyenne </br>";
	 	}

	  ?>
	  <?php  
	   	$note=17;
	   	$difficulté="difficulté";
	   	if($note<=10 AND $difficulté=="facile"){
	   		echo "c'est nul !";
	   	}
	   	elseif($note>12 AND $difficulté=="facile"){
	   		echo "pas mal, mais cètait facile";
	   	}
	   	elseif ($note<=15 AND $difficulté=="difficulté") {
	   		echo "ne vous decouragez pas,c'était difficile";
	   	}
	   	else{
	   		echo "bravo";
	   	}



	   ?>


</body>
</html>