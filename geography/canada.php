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
    <h1>Canadian Capitals Quiz</h1>

	<script>

			var area = {} ;
			area["Ontario"] = "Toronto" ;
			area["Quebec"] = "Quebec City" ;
			area["Nova Scotia"] = "Halifax" ;
			area["New Brunswick"] = "Fredericton" ;
			area["Manitoba"] = "Winnipeg" ;
			area["British Colombia"] = "Victoria" ;
			area["Prince Edward Island"] = "Charlottetown" ;
			area["Saskatchewan"] = "Regina" ;
			area["Alberta"] = "Edmonton" ;
			area["Newfoundland and Labrador"] = "St. John's" ;

		displayForm(area);
		
	</script> 

</div>


</body>
</html>