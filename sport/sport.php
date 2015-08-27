<!DOCTYPE html>
<html lang="en">
  <head>
<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/head.php";
 ?>
  </head>
  <body>
  
 <?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/navbar.html";
 ?>

    <h1>Sports Quiz</h1>
	
<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/bootstrap.php";
 ?>
 
  </body>
</html>