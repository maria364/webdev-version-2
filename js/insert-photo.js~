$("#upload-image").click( function() {
	
					$.post( $(".in-photo").attr("action"),
					$(".in-photo :input").serializeArray(),
					function(data) {
					
					/*Εμφάνιση σχολίων από τον php κώδικα. Χρησιμοποιούντε για να δούμε το αποτέλεσμα (εάν είναι σωστό ή όχι). Μπορούν να παραλειφθούν.*/
						$("#ack4").empty();
						$("#ack4").html (data);
											
					});	
					
			/*έλεγχος για το αν έχουν εισαχθεί σωστά τα στοιχεία, ώστε να γίνει η ανακατεύθυνση*/
				
					
					
		$(".in-photo").submit( function() {
			return false;
		})			
});


