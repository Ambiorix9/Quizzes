	function displayForm(area) {
		document.write("<p>Enter the names of the capitals in the boxes below:</p>");
		
		this.area = area;
		
		var areaName, areaValue ;

		for(areaName in area) {
		   areaValue = area[areaName] ;
		   document.write('<form action="" class="form-horizontal">');
		   document.write('<div class="form-group">');
		   document.write('<label for="' + areaName + '" class="col-sm-2 control-label">' + areaName + '</label>');
		   document.write('<div class="col-sm-4">');
		   document.write('<input type="text" class="form-control" id="' + areaName.replace(/ /g, "") + '" placeholder="' + areaName + '"/>');
		   document.write('</div>');
		   document.write('<span class="glyphicon glyphicon-remove" id="' + areaName.replace(/ /g, "") + 'w">	</span>');
		   document.write('<span class="glyphicon glyphicon-ok" id="' + areaName.replace(/ /g, "") + 'r"></span>');
		   document.write('<span class="answer" id="' + areaName.replace(/ /g, "") + 'a">' + areaValue + '</span>');
		   document.write('</div>');
		} //for each question
		
		// add submit button
		document.write('<div class="form-group">');
		document.write('<div class="col-sm-offset-2 col-sm-10">');
		document.write('<button type="submit" class="btn btn-primary" >Check Answers</button>');
		document.write('</div>');
		document.write('</div>');
		document.write('</form>');
		
		//alert result
		document.write('<div class="alert alert-success alert-dismissable" id="myAlert" role="alert">');
		document.write('<button id="button" class="close" data-dismiss="alert">x</button>');
		document.write('You scored: ');
		document.write('</div>');

	// add event listener to check answers
	$("button").click(function(event) {
		event.preventDefault();
		
		var score = 0;
		
		for(areaName in area) {
			 if($('#' + areaName.replace(/ /g, '')).val() === area[areaName]) {
				 score++;
				$('#' + areaName.replace(/ /g, "") + 'r').show();
				$('#' + areaName.replace(/ /g, "") + 'w').hide();
			} else {
				$('#' + areaName.replace(/ /g, "") + 'w').show();
				$('#' + areaName.replace(/ /g, "") + 'r').hide();
				$('#' + areaName.replace(/ /g, "") + 'a').show();
			}				 
			 
		}
		
		$('#myAlert').html("You scored " + score + "/" + Object.keys(area).length);
		$('#myAlert').show();
	});

}  //end of displayForm()