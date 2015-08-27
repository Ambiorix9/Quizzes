<!DOCTYPE html>
<html lang="en">
<head>

<script src="../js/buildform.js"></script>
<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/head.php";
 ?>
 
</head>
<body>
  
 <?php
	include "$root/Quizzes/includes/navbar.html";
	include "$root/Quizzes/includes/bootstrap.php";
 ?>

<div class ="container">
    <h1>Balkan Capitals Quiz</h1>

	<script>

			var area = {} ;
			area["Croatia"] = "Zagreb" ;
			area["Serbia"] = "Belgrade" ;
			area["Macedonia"] = "Skopje" ;
			area["Slovenia"] = "Ljubljana" ;
			area["Bosnia"] = "Sarajevo" ;
			area["Romania"] = "Bucharest" ;
			area["Bulgaria"] = "Sofia" ;
			area["Albania"] = "Tirana" ;
			area["Kosovo"] = "Pristina" ;
			area["Greece"] = "Athens" ;
			area["Turkey"] = "Ankara" ;
			area["Montenegro"] = "Podgorica" ;		

		displayForm(area);
		
	</script> 

</div>


</body>
</html>