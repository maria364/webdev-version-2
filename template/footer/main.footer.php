<!-- /*Είναι το js που χρησιμοποιείται για την είσοδο. */ -->
<!-- Modal gia allagi kwdikou -->
<!-- Dimiourgia modal gia aposundesi-->
<div id="modal-passrecover" class="modal-recoverpass" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <span title="Close" class="close close_modal" align="left">&times;</span>
        <h4 class="modal-title"><?php echo htmlentities($message142, ENT_QUOTES,"utf-8") ?></h4>
      </div>
      <div class="modal-body">
            <label><?php echo htmlentities($message143, ENT_QUOTES,"utf-8") ?></label>
                        
           
            <br/>
            <ul class="logout-btn">
                <input class="input-email-recovery"  name="forgetpass" type="text" placeholder="">
                <li><button type="button" id="send-rec-email" class="ok-btn"><?php echo htmlentities($message174, ENT_QUOTES,"utf-8") ?></button></li>
            </ul>
            <br/>
            <br/>
             <div id="ack8"></div>
      </div>
      <div class="modal-footer" >
        <span title="Close" class="close close_modal" align="left">&times;</span>
      </div>
    </div>

  </div>
</div>



<!--script gia modal anaktisis password-->
<script type="text/javascript">
    
$(document).ready(function() {
    $( "#forgetpass-btn" ).click(function() { //anoigma modal recovery
        $(".modal-recoverpass").css({
            "opacity": "1",
            "pointer-events": "auto"});
    });

    $( ".close_modal" ).click(function() {  //kleisimo modal recovery
        $(".modal-recoverpass").css({
            "opacity": "0",
            "pointer-events": "none"});
    });
    
});

</script>

<script>
        $('#send-rec-email').click(function (e) {
            e.preventDefault();

            if( $(".input-email-recovery").val() == "" )
				$("#ack8").html("<?php echo htmlentities($message80, ENT_QUOTES,'utf-8') ?>");
			else
				// all = $( "#login" ).serialize();
				email_reset = $(".input-email-recovery").val();
				//alert(email_reset);
		        $.post("/diplwmatiki/t_selida/ajax/change-password.php",	//Ajax file
		            {	'email_reset': email_reset},	// create an object will all values
		            function(data){	//function that is called when server returns a value.

						$("#ack8").html (data);

					    //window.location = "/diplwmatiki/t_selida/?p=main";
						clear();	

		            }
		        );
        });


function clear() {
 
	$(".register-form :input").each( function() {
	      $(this).val("");
	});
 
}
</script>




<script>
        $('#login').submit(function (e) {
            e.preventDefault();

            if( $(".input-login-username").val() == "" || $(".input-login-password").val() == "" )
				$("#ack2").html("<?php echo htmlentities($message19, ENT_QUOTES,'utf-8') ?>");
			else
				// all = $( "#login" ).serialize();
				username = $(".input-login-username").val();
				password = $(".input-login-password").val();

		        $.post("/diplwmatiki/t_selida/ajax/login.php",	//Ajax file
		            {	'username': username,
		            	'password': password},	// create an object will all values
		            function(data){	//function that is called when server returns a value.
		                /*Εδώ γίνεται ο έλεγχος και το redirect ανάλογα με τα δικαιώματα του χρήστη, μεταφέρεται στην κατάλληλη σελίδα-πίνακα ελέγχου.*/
						if(data == "admin")
						{
							location.href = "<?php echo htmlentities($message20, ENT_QUOTES,'utf-8') ?>";
							//location.href = 'http://localhost/diplwmatiki/t_selida/?p=dashboard';
						}else if(data == "fail"){
							location.href = "<?php echo htmlentities($message21, ENT_QUOTES,'utf-8') ?>";
							// location.href = 'http://localhost/diplwmatiki/t_selida/?p=main';
						}else if(data == "user" /*&& data != "fail"*/) {
							location.href = "<?php echo htmlentities($message20, ENT_QUOTES,'utf-8') ?>";
							// location.href = 'http://localhost/diplwmatiki/t_selida/?p=dashboard';
						} 
					
					/*Εμφάνιση σχολίων από τον php κώδικα. Χρησιμοποιούντε για να δούμε το αποτέλεσμα (εάν είναι σωστό ή όχι). Μπορούν να παραλειφθούν.*/
						$("#ack2").empty();
						$("#ack2").html (data);

						clear();	

		            }
		        );
        });

// $("#login").click( function() {
	
// 		if( $(".input-login-username").val() == "" || $(".input-login-password").val() == "" )
// 			$("#ack2").html("Παρακαλώ εισάγεται και τα δύο στοιχεία, username, password");
// 		else
// 			$.post( $(".login-form").attr("action"),
// 					$(".login-form :input").serializeArray(),
// 					function(data) {

// 					/*Εδώ γίνεται ο έλεγχος και το redirect ανάλογα με τα δικαιώματα του χρήστη, μεταφέρεται στην κατάλληλη σελίδα-πίνακα ελέγχου.*/
// 						if(data == "admin")
// 						{
// 							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/dashboard-admin.php';
// 						}else if(data == "fail"){
// 							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/main.php';
// 						}else if(data == "user" /*&& data != "fail"*/) {
// 							location.href = 'http://localhost/diplwmatiki/custom-bootstrap/dashboard-user.php';
// 						} 
					
// 					/*Εμφάνιση σχολίων από τον php κώδικα. Χρησιμοποιούντε για να δούμε το αποτέλεσμα (εάν είναι σωστό ή όχι). Μπορούν να παραλειφθούν.*/
// 						$("#ack2").empty();
// 						$("#ack2").html (data);			
					
// 					clear();	
// 			});
			
// 			/*έλεγχος για το αν έχουν εισαχθεί σωστά τα στοιχεία, ώστε να γίνει η ανακατεύθυνση*/
				
					
					
// 		$(".login-form").submit( function() {
// 			return false;
// 		})			
// });

function clear() {
 
	$(".register-form :input").each( function() {
	      $(this).val("");
	});
 
}
</script>
