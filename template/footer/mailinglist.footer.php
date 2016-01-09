	
	
	<script type="text/javascript">
		function SendEmail(name3,valuemail) {

			var usname2=name3;
			var sendemail2=valuemail;
			var check = 6;
			var select = "yes";
			var y = confirm("Είστε σίγουροι πως θέλετε να αποστέλεται e-mail ενημέρωσης στον χρήστη " +usname2 + "?" );
			//alert(usname2);
			//alert(sendemail2);
				  if (y == true)
					//alert(usname);
					$.ajax({
								url: "update.php",
								type: "POST",
								data: {  'username':usname2, 'select':select, 'check': check },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
								success: function(data){
									alert(data); // this will print you any php / mysql error as an alert  
								}
							});	
				  else
					return false;
		}	
	</script>

	
	<script type="text/javascript">	
	
		function NotSendEmail(usname,valuemail) {
			var usname;
			var valuemail;
			var z = confirm("Είστε σίγουροι πως θέλετε να μην αποστέλονται e-mail ενημέρωσης στον χρήστη " +usname + "?" );
			var check = 6;
			var select = "no";
				if (z == true)
						
					$.ajax({
							url: "update.php",
							type: "POST",
							data: {  'username':usname, 'select':select, 'check': check },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
							success: function(data){
								alert(data); // this will print you any php / mysql error as an alert  
							}
						});	

				else
					return false;
		}
	</script>