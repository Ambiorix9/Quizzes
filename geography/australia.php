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

    <div class="container">
		
			<h2>Australian Capitals Quiz</h2>
			<p>Enter the names of the capitals in the boxes below:</p>
			<form action="" class="form-horizontal">
				<div class="form-group">
					<label for="act" class="col-sm-2 control-label">Australia</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="act" placeholder="Australia"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="actw">	</span>				
					<span class="glyphicon glyphicon-ok" id="actr"></span>
					<span class="answer" id="acta">Canberra</span>
				</div>
				
				<div class="form-group" method="post">
					<label for="nsw" class="col-sm-2 control-label">New South Wales</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nsw" placeholder="New South Wales"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="nsww"></span>
					<span class="glyphicon glyphicon-ok" id="nswr"></span>
					<span class="answer" id="nswa">Sydney</span>					
				</div>

				<div class="form-group">
					<label for="vic" class="col-sm-2 control-label">Victoria</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="vic" placeholder="Victoria"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="vicw"></span>
					<span class="glyphicon glyphicon-ok" id="vicr"></span>
					<span class="answer" id="vica">Melbourne</span>					
				</div>
				
				<div class="form-group">
					<label for="que" class="col-sm-2 control-label">Queensland</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="que" placeholder="Queensland"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="quew"></span>
					<span class="glyphicon glyphicon-ok" id="quer"></span>
					<span class="answer" id="quea">Brisbane</span>					
				</div>
				
				<div class="form-group">
					<label for="wa" class="col-sm-2 control-label">Western Australia</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="wa" placeholder="Western Australia"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="waw">	</span>				
					<span class="glyphicon glyphicon-ok" id="war"></span>
					<span class="answer" id="waa">Perth</span>					
				</div>	

				<div class="form-group">
					<label for="sa" class="col-sm-2 control-label">South Australia</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="sa" placeholder="South Australia"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="saw"></span>					
					<span class="glyphicon glyphicon-ok" id="sar"></span>
					<span class="answer" id="saa">Adelaide</span>					
				</div>
				
				<div class="form-group">
					<label for="tas" class="col-sm-2 control-label">Tasmania</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="tas" placeholder="Tasmania"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="tasw"></span>					
					<span class="glyphicon glyphicon-ok" id="tasr"></span>
					<span class="answer" id="tasa">Hobart</span>					
				</div>
				
				<div class="form-group">
					<label for="nt" class="col-sm-2 control-label">Northern Territory</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nt" placeholder="Northern Territory"/>
					</div>
					
					<span class="glyphicon glyphicon-remove" id="ntw"></span>					
					<span class="glyphicon glyphicon-ok" id="ntr"></span>
					<span class="answer" id="nta">Darwin</span>					
				</div>		

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" >Check Answers</button>
				 </div>
				 
				</div>				
				
			</form>
			
			<div class="alert alert-success alert-dismissable" id="myAlert" role="alert">
				<button id="button" class="close" data-dismiss="alert">x</button>
					You scored: 
			</div>
			
			
			
	</div> 

	
<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include "$root/Quizzes/includes/bootstrap.php";
 ?>
 
 <script>
	$("button").click(function(event) {
		
		event.preventDefault();
		
		var score = 0;
		
		
		if($('#act').val() ==="Canberra") {
			score++;
			$('#act').parent().parent().attr('class', 'form-group has-success');
			$('#actr').show();
			$('#actw').hide();
		} else {
			$('#act').parent().parent().attr('class', 'form-group has-error');
			$('#actw').show();
			$('#actr').hide();
			$('#acta').show();
		}
		
		if($('#nsw').val() ==="Sydney") {
			score++;
			$('#nsw').parent().parent().attr('class', 'form-group has-success');
			$('#nswr').show();
			$('#nsww').hide();			
		} else {
			$('#nsw').parent().parent().attr('class', 'form-group has-error');
			$('#nsww').show();
			$('#nswa').show();
			$('#nswr').hide();			
		}	

		if($('#vic').val() ==="Melbourne") {
			score++;
			$('#vic').parent().parent().attr('class', 'form-group has-success');
			$('#vicr').show();
			$('#vicw').hide();			
		} else {
			$('#vic').parent().parent().attr('class', 'form-group has-error');
			$('#vicw').show();
			$('#vica').show();
			$('#vicr').hide();			
		}		
		
		if($('#que').val() ==="Brisbane") {
			score++;
			$('#que').parent().parent().attr('class', 'form-group has-success');
			$('#quer').show();
			$('#quew').hide();				
		} else {
			$('#que').parent().parent().attr('class', 'form-group has-error');
			$('#quew').show();
			$('#quea').show();
			$('#quer').hide();				
		}		
		
		if($('#wa').val() ==="Perth") {
			score++;
			$('#wa').parent().parent().attr('class', 'form-group has-success');
			$('#war').show();
			$('#waw').hide();				
		} else {
			$('#wa').parent().parent().attr('class', 'form-group has-error');
			$('#waw').show();
			$('#waa').show();
			$('#war').hide();			
		}		
		
		if($('#sa').val() ==="Adelaide") {
			score++;
			$('#sa').parent().parent().attr('class', 'form-group has-success');
			$('#sar').show();
			$('#saw').hide();				
		} else {
			$('#sa').parent().parent().attr('class', 'form-group has-error');
			$('#saw').show();
			$('#saa').show();
			$('#sar').hide();			
		}		
		
		if($('#tas').val() ==="Hobart") {
			score++;
			$('#tas').parent().parent().attr('class', 'form-group has-success');
			$('#tasr').show();
			$('#tasw').hide();			
		} else {
			$('#tas').parent().parent().attr('class', 'form-group has-error');
			$('#tasw').show();
			$('#tasa').show();
			$('#tasr').hide();					
		}		
		
		if($('#nt').val() ==="Darwin") {
			score++;
			$('#nt').parent().parent().attr('class', 'form-group has-success');
			$('#ntr').show();
			$('#ntw').hide();			
		} else {
			$('#nt').parent().parent().attr('class', 'form-group has-error');
			$('#ntw').show();
			$('#nta').show();
			$('#ntr').hide();				
		}		
		
		$('#myAlert').html("You scored " + score + "/8");
		$('#myAlert').show();
		
		
	});

 </script>
 
  </body>
</html>