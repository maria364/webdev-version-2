<script>
        $('#recover').submit(function (e) {
            e.preventDefault();

            if( $(".input-recover-username").val() == "" || $(".input-recover-password").val() == "" || $(".input-recover2-password").val() == ""){
				$("#ack9").html("<?php echo $message84 ?>");
            
			}else if ( $(".input-recover-password").val() == $(".input-recover2-password").val() ) {

				// all = $( "#login" ).serialize();
				username = $(".input-recover-username").val();
				password = $(".input-recover-password").val();
				//me tis parakatw treis entoles pairnoume to mail tou xristi apo tin grammi dieuthinsewn wste na to tautopoiisoume gia na elenksoume to xristi
				var url = window.location.href;
				var params = url.split('=');
				email = params[3];

		        $.post("/diplwmatiki/t_selida/ajax/recoverpass.php",	//Ajax file
		            {	'username': username,
		            	'password': password,
		            	'email': email},	// create an object will all values
		            function(data){	//function that is called when server returns a value.
		            	if(data == 1){
		            		$("#ack9").html ("<?php echo htmlentities($message87, ENT_QUOTES,'utf-8') ?>");
		            	} else {
		            		$("#ack9").html ("<?php echo htmlentities($message86, ENT_QUOTES,'utf-8') ?>");
		            		setTimeout(function(){
							window.location.href = '/diplwmatiki/t_selida/?p=main';
							}, 3000);	

		            	}
					/*Εμφάνιση σχολίων από τον php κώδικα. Χρησιμοποιούντε για να δούμε το αποτέλεσμα (εάν είναι σωστό ή όχι). Μπορούν να παραλειφθούν.*/
						

						clear();	

		            }
		        );
			}else {
				$("#ack9").html("<?php echo htmlentities($message85, ENT_QUOTES,'utf-8') ?>");
			}
        });


function clear() {
 
	$(".register-form :input").each( function() {
	      $(this).val("");
	});
 
}
</script>