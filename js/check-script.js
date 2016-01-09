$("#send").click( function() {
	
		if( $(".input-forget-email").val() == "")
			$("#ack3").html("Παρακαλώ εισάγεται το e-mail σας.");
		else
			$.post( $(".forget-form").attr("action"),
					$(".forget-form :input").serializeArray(),
					function(print) {
					
						$("#ack3").empty();
						$("#ack3").html (print);
						clear();

					});
		$(".forget-form").submit( function() {
			return false;
		})			
});

function clear() {
 
	$(".register-form :input").each( function() {
	      $(this).val("");
	});
 
}