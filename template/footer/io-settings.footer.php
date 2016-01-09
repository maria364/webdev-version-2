	<script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>



<script> /*epilegoume tin*/
	$(document).ready(function(){
    		$("#delayed-start").click(function(){
        		$("#epilogi1").show();
    		});

    		$("#delayed-stop").click(function(){
        		$("#epilogi2").show();
    		});

   //  		$("#alarmset").click(function(){
			// 	$("#alarm-set").show();
   //  		});
		
			// $("#progr-susk").click(function(){
			// 	$("#alarm-set").hide();
			// 	$("#ftp-set").hide();
			// 	$("#http-set").hide();
   //  		});
		
		
	});

</script>

<script >
	$(document).ready(function(){
		$("#reboot").click(function(){

			//χτυπαω μονο το url για την επανεκκινηση του υπολογιστή. Με την επανεκκίνηση συμειώνετι ότι δεν θα ξεκινάει αυτόματα η συσκευή-πρόγραμμα. Θα πρέπει ο χρήστης να πατησει στο start για να ξεκινήσει ξανά.
		//η παραπάνω διαδικασία γίνεται με τη χρήση του ajax
    		$.ajax({url: "exec.php", success: function(result){
        		//alert("Ολόκληρο το σύστημά σας θα επανεκκινηθεί σε λίγα δευτερόλεπτα. Η υπηρεσία δεν θα ξεκινήσει αυτόματα. Σε περίπτωση που θελήσετε να την επανεκκινήσετε, πατήστε το κουμπί start.");
        		alert(result); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}});

		});
	});
	
</script>

<script type="text/javascript">

	// function choosetime(temp)
	// {
	//  	var temp;
	// 	var epistrof="";

	// 	if (temp =="delayed-start"){
			
	// 		alert(temp);
			
			
	// 	} else if (temp=="delayed-stop") {
	// 		alert(temp);
			
	// 	}
	// 	document.getElementById("epistr1").innerHTML = epistrof;


	// }
</script>






<script type="text/javascript">

	function procedures(val1) {

		// alert(val1);
		// alert(val2);
		var button= val1;
		alert(button);
		if(val1=="start"){
			// alert("eisai start");
			$.ajax({url: "socket-cl.php", type: "POST", data: {'button': val1},success: function(data){
        		alert(data); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}
    		});
		} else if (val1=="delayed-start"){
			var val2 = $(".delayed-time").val(); //pairnw tin timi apo to dropdown list poy epilegw tis wres argis energopoiisis kai apenergopoiisis sustimatos
			alert(val2);
			$.ajax({url: "socket-cl.php", dataType: "text", type: "POST", data: {'button': val1,'time':val2},success: function(result){
        		alert(result); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}});

		} else if (val1=="stop"){
			// alert("eisai stop");
			$.ajax({url: "socket-cl.php", dataType: "text", type: "POST", data: {'button': val1},success: function(result){
        		alert(result); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}});
		} else if (val1=="delayed-stop"){
			// alert("eisai delayed-stop");
			var val2 = $(".delayed-time2").val();
			alert(val2);
			$.ajax({url: "socket-cl.php", dataType: "text", type: "POST", data: {'button': val1,'time':val2},success: function(result){
        		alert(result); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}});
		}


		// $("#start-button").click(function(){

		// 	//χτυπαω μονο το url για την επανεκκινηση του υπολογιστή. Με την επανεκκίνηση συμειώνετι ότι δεν θα ξεκινάει αυτόματα η συσκευή-πρόγραμμα. Θα πρέπει ο χρήστης να πατησει στο start για να ξεκινήσει ξανά.
		// //η παραπάνω διαδικασία γίνεται με τη χρήση του ajax
    		

		// });
	}
</script>