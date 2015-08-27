$(document).ready(function(){ 

if (typeof jQuery != "undefined")
	 {
		 console.log('jQuery loaded');
	 } else {
		 console.log('jQuery loaded');
	 }	

if (typeof jQuery.ui != 'undefined') {
  console.log('UI loaded');
}  else {
	  console.log('UI NOT loaded');
}
	

		
		$(".answers").droppable();
		
		$( ".ans" ).droppable({
			drop: function(event, ui) {
				   // do something with the dock
				   $(this).css("backgroundColor", "yellow");
				   $(this).droppable( "option", "accept", ui.draggable );
				   $(this).attr("data-dragid", ui.draggable.text().replace(/ /g, ""));
				},
			out: function(event, ui){
					$(this).css("backgroundColor", "blue");
				    $(this).droppable( "option", "accept", "*" );
				    $(this).attr("data-dragid", "");
				}  
		});
		
		$(".countries").draggable({
			revert: "invalid"
		});
		
		$("button").click(function (event){
			
			
		
			event.preventDefault();
		
			var score = 0;
			console.log('here');
			
			$('.ans').each(function(index){
				console.log($(this).attr('id') + ' : '  + $(this).attr('data-dragid'));
				if ($(this).attr('id')===$(this).attr('data-dragid')) {
					score++;
					console.log('Correct: ' + $(this).attr('id'));
				} else {
					console.log('Wrong: ' + $(this).attr('id'));
				}
			});
			
			$('#showResult').text(' You scored ' + score + '/8');
			
		});
});		