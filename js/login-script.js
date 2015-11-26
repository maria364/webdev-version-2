/*Είναι το js που χρησιμοποιείται για την είσοδο. */


$("#login").click( function() {
	
		if( $(".input-login-username").val() == "" || $(".input-login-password").val() == "" )
			$("#ack2").html("Παρακαλώ εισάγεται και τα δύο στοιχεία, username, password");
		else
			$.post( $(".login-form").attr("action"),
					$(".login-form :input").serializeArray(),
					function(data) {
					
					/*Εδώ γίνεται ο έλεγχος και το redirect ανάλογα με τα δικαιώματα του χρήστη, μεταφέρεται στην κατάλληλη σελίδα-πίνακα ελέγχου.*/
						if(data == "admin")
						{
							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/dashboard-admin.php'
						}else if(data == "fail"){
							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/main.php'
						}else if(data != "admin" && data != "fail") {
							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/dashboard-user.php'
						} 
					
					/*Εμφάνιση σχολίων από τον php κώδικα. Χρησιμοποιούντε για να δούμε το αποτέλεσμα (εάν είναι σωστό ή όχι). Μπορούν να παραλειφθούν.*/
						$("#ack2").empty();
						$("#ack2").html (data);
						
					clear();	
			});
			
			/*έλεγχος για το αν έχουν εισαχθεί σωστά τα στοιχεία, ώστε να γίνει η ανακατεύθυνση*/
				
					
					
		$(".login-form").submit( function() {
			return false;
		})			
});

function clear() {
 
	$(".register-form :input").each( function() {
	      $(this).val("");
	});
 
}