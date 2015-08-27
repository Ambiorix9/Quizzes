<!doctype html>
<html>
<head>



<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/head.php";
 ?>
 
 	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
	<script src = '/Quizzes/js/bootstrap.min.js'></script>
 
    <title>Flags - Western Europe 1</title>


	
	<link rel="stylesheet" type="text/css" href="css/flags.css">

     
</head>

<body>

 <?php
	include "$root/Quizzes/includes/navbar.html";
 ?>

<div class="container">

<h1>Western European Flags</h1>
<p>Drag and Drop the correct country below its flag.</p>
<br>

	<div class="flag">
		<img src="images/uk.jpg"></img>
	</div>
	
	<div class="flag">
		<img src="images/portugal.jpg"></img>
	</div>
	
	<div class="flag">
		<img src="images/spain.jpg"></img>
	</div>
	
	<div class="flag">
		<img src="images/italy.jpg"></img>
	</div>
	
		<div class="flag">
		<img src="images/germany.jpg"></img>
	</div>
	
	<div class="flag">
		<img src="images/nl.jpg"></img>
	</div>
	
	<div class="flag">
		<img src="images/france.jpg"></img>
	</div>
	
		<div class="flag">
		<img src="images/ireland.jpg"></img>
	</div>	
	
	<div class="clear"></div>
	<!-- Droppables -->
	<div class="ans" id="UnitedKingdom" data-dragid=""></div>
	<div class="ans" id="Portugal" data-dragid=""></div>
	<div class="ans" id="Spain" data-dragid=""></div>
	<div class="ans" id="Italy" data-dragid=""></div>
	<div class="ans" id="Germany" data-dragid=""></div>
	<div class="ans" id="Netherlands" data-dragid=""></div>
	<div class="ans" id="France" data-dragid=""></div>
	<div class="ans" id="Ireland" data-dragid=""></div>
	
	<div class="clear"></div>
	
	<!-- Draggables -->
    <div class="answers">
		<div class="countries" id="de">Germany</div>
		<div class="countries" id="ie">Ireland</div>
		<div class="countries" id="pt">Portugal</div>
		<div class="countries" id="fr">France</div>
		<div class="countries" id="es">Spain</div>
		<div class="countries" id="es">United Kingdom</div>
		<div class="countries" id="it">Italy</div>
		<div class="countries" id="nl">Netherlands</div>
	</div>
	
	<div class="clear"></div>
	
	<br><br>
	
	<p><button type="submit">Submit</button></p>
	
	<div id="showResult"></div>
	
	
	<script type="text/javascript" src="js/flags.js">	</script>
	
</div>

  
</body>
</html>
