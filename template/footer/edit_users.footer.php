	
	<script type="text/javascript">
		
		function edit_name() {
			document.getElementById("counter").innerHTML = "Name: <input type='text' name='first-name' id='first-name' value='' />  <input type='text' name='last-name' id='last-name' value='' />  <button id='update-name' style='margin-left:143px'>update</button><br />";
			$("#update-name").click( function() {
				var check = 1;
				var fn    = $('#first-name').val();
				var ln    = $('#last-name').val();
				$.ajax({
				url: "update.php", //klisi arxeiou
				dataType: "text", //tupos minimatos
				type: "POST", //POST i GET
				data: { 'firstname': fn, 'lastname': ln, 'check': 1 },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});
		}
	</script>	
	
	<script type="text/javascript">
		
		function edit_email() {
			document.getElementById("counter1").innerHTML = "<p>E-mail: </p><input type='text' name='email-edit' id='email-edit' value=''/>   <button id='update_email' style='margin-left:338px'>update</button><br />";
			$("#update_email").click( function() {
				var check = 2;
				var email_edit = $('#email-edit').val();
				$.ajax({
				url: "update.php",
				type: "POST",
				data: { 'email': email_edit, 'check': 2},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});

		}
	</script>	
	
	<script type="text/javascript">
		function edit_pass() {
			document.getElementById("counter2").innerHTML = "<p>Password: </p><input type='text' name='pass-edit' id='pass-edit' value=''/>   <button  id='update-pass' style='margin-left:320px'>update</button><br />";
			$("#update-pass").click( function() {
				var check=3;
				var pass_edit = $('#pass-edit').val();
				$.ajax({
				url: "update.php",
				type: "POST",
				data: { 'password': pass_edit, 'check': 3},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});

		}
		
	</script>
	
	
	<script type="text/javascript">
		
		function edit_name() {
			document.getElementById("counter").innerHTML = "<align='left'>Ονοματεπώνυμο: <input type='text' name='first-name' id='first-name' value='' />  <input type='text' name='last-name' id='last-name' value='' />  <button id='update-name' >update</button><br />";
			$("#update-name").click( function() {
				var check = 1;
				var fn    = $('#first-name').val();
				var ln    = $('#last-name').val();
				$.ajax({
				url: "update.php", //klisi arxeiou
				dataType: "text", //tupos minimatos
				type: "POST", //POST i GET
				data: { 'firstname': fn, 'lastname': ln, 'check': 1 },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});
		}
	</script>	
	
	<script type="text/javascript">
		
		function edit_email(value) {
			
			//alert(usname);
			document.getElementById("counter1").innerHTML = "<align='left'>E-mail: <input type='text' name='email-edit' id='email-edit' value=''/>   <button id='update_email' >update</button><br />";
			$("#update_email").click( function() {
				var username= value;
				var check = 2;
				var email_edit = $('#email-edit').val();
				$.ajax({
				url: "update.php",
				type: "POST",
				data: { 'username':username, 'email': email_edit, 'check': 2},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});

		}
	</script>	
	
	<script type="text/javascript">
		function edit_pass(value) {
			document.getElementById("counter2").innerHTML = "<align='left'>Κωδικός πρόσβασης: <input type='password' name='pass-edit' id='pass-edit' value=''/>   <button  id='update-pass' >update</button><br />";
			$("#update-pass").click( function() {
				var username= value;
				var check=3;
				var pass_edit = $('#pass-edit').val();
				$.ajax({
				url: "update.php",
				type: "POST",
				data: { 'username':username, 'password': pass_edit, 'check': 3},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
				}
				});
			});

		}
		
	</script>

<script type="text/javascript">
	function ConfirmDelete(value)
	{
	  var usname = value;
	  var x = confirm("Είστε σίγουρος πως θέλετε να διαγράψετε τον χρήστη " +usname + "?" );
	  var choose = 1;
	  //alert(usname);
	  
	  if (x == true)
		//alert(usname);	
		$.ajax({
				url: "delete-user.php", //klisi arxeiou
				dataType: "text", //tupos minimatos
				type: "POST", //POST i GET
				data: {'username': usname, 'choose': choose },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
				success: function(data){
					alert(data); // this will print you any php / mysql error as an alert  
					if(data === "Record deleted successfully") location.href = "http://localhost/diplwmatiki/t_selida/?p=users-list"
				}
		});
		
		
		
	  else
		return false;
			
	
	}
</script>

<script type="text/javascript">
		function change_identity(value,name) {
			var identity = value;
			var name;
			
			//alert(identity);
			
			$("#change_to_admin").click( function() {
				
				var check = 4;
				//alert(name);
				$.ajax({
					url: "update.php",
					type: "POST",
					data: {  'username':name, 'identity':identity, 'check': check},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
					success: function(data){
						alert(data); // this will print you any php / mysql error as an alert  
					}
				});
				
			});
			
			$("#change_to_user").click( function() {
				
				var check = 5;
				
				$.ajax({
					url: "update.php",
					type: "POST",
					data: {  'username':name, 'identity':identity, 'check': check},      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
					success: function(data){
						alert(data); // this will print you any php / mysql error as an alert  
					}
				});
				
			});
		}
		
	</script>

<script type="text/javascript">
	
	function DeletePhoto(value)
		{
		  var photo_name = value;
		  var x = confirm("Είστε σίγουρος πως θέλετε να διαγράψετε τη φωτογραφία " +photo_name + "?" );
		  var choose = 2;
		  //alert(usname);
		  
		  if (x == true)
			//alert(usname);	
			$.ajax({
					url: "delete-user.php", //klisi arxeiou
					dataType: "text", //tupos minimatos
					type: "POST", //POST i GET
					data: {'photo_name': photo_name, 'choose': choose },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
					success: function(data){
						alert(data); // this will print you any php / mysql error as an alert  
					}
			});
			
			
			
		  else
			return false;
				
		
		}
</script>
