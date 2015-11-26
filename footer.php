
    
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h5>Copyright &copy <i>Πανεπιστήμιο Δυτικής Μακεδονίας, τμήμα Μηχανικών Πληροφορικής και Τηλεπικοινωνιών</i></h5>
                    </div>
                </div>
            </div>
        </div>          
	</footer>
   
<!-- Dimiourgia modal gia aposundesi-->
<div id="modal-logout" class="modal-logout" role="dialog">
  <div class="modal-dialog">

    <!-- Periexomeno Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <a href="dashboard-user.php" title="Close" class="close" data-dismiss="modal">&times;</a>
        <h4 class="modal-title">Αποσύνδεση</h4>
      </div>
      <div class="modal-body">
			<label>Είστε σίγουρος πως θέλετε να αποσυνδεθείτε;</label>
						
			<div id="ack2"></div>
			<br/>
			
			<ul class="logout-btn">
				<li><a href="logout.php"><button type="button" class="ok-btn">OK</button></a></li>
				<li><a href="#0"><button type="button" class="cancel-btn">Cancel</button></a></li>
			</ul>

			
      </div>
      <div class="modal-footer" >
        <a href="dashboard-user.php" title="Close" class="close" data-dismiss="modal" align="left">&times;</a>
      </div>
    </div>

  </div>
</div>
	

<!-- Dimiourgia modal gia diagrafi xristi-->
<div id="modal-delete" class="modal-delete" role="dialog">
  <div class="modal-dialog">

    <!-- Periexomeno Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <a href="dashboard-user.php" title="Close" class="close" data-dismiss="modal">&times;</a>
        <h4 class="modal-title">Διαγραφή χρήστη</h4>
      </div>
      <div class="modal-body">
			<label>Είστε σίγουρος πως θέλετε να διαγράψετε αυτόν τον χρήστη;</label>
						
			<div id="ack2"></div>
			<br/>
			
			<ul class="logout-btn">
				<li><a href="delete-user.php"><button type="button" class="ok-btn" onclick="delete-user()">OK</button></a></li>
				<li><a href="#0"><button type="button" class="cancel-btn">Cancel</button></a></li>
			</ul>

			
      </div>
      <div class="modal-footer" >
        <a href="#" title="Close" class="close" data-dismiss="modal" align="left">&times;</a>
      </div>
    </div>

  </div>
</div>








	

<!-- Dimiourgia modal gia ksexasate ton kwdiko sas-->
<div id="modal-forget" class="modal-forget" role="dialog">
  <div class="modal-dialog">

    <!-- Periexomeno Modal -->
    <div class="modal-content">
      <div class="modal-header">
			<a href="main.php" title="Close" class="close" data-dismiss="modal">X</a>
        <h4 class="modal-title">Αλλαγή κωδικού πρόσβασης</h4>
		<hr>
		<label>Παρακαλώ συμληρώστε τη διεύθυνσή σας για να σας αποσταλεί mail με τα στοιχεία για την αλλαγή του κωδικού.</label>
      </div>
		<div class="modal-body">
		<form class="forget-form" action="check.php" method="post">
					<p class="fieldset">
						<label class="forget-email" for="forget-email">E-mail</label>
						<input class="input-forget-email" type="email" name="forget-email" placeholder="example@email.com">
					</p>

					<p class="fieldset">
						<button class="submit" id="send">Αποστολή</button>
					</p>
		</form>      
		<div id="ack3"></div>		
      
		</div>
		
    </div>

  </div>
</div>	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/popup.js"></script> <!-- Gem jQuery --> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

	<script type="text/javascript" src="js/login-script.js"></script>
	<script type="text/javascript" src="js/check-script.js"></script>
	<script type="text/javascript" src="js/register-script.js"></script>
	<script type="text/javascript" src="js/close-modal.js"></script>	
	<script type="text/javascript" src="js/insert-photo.js"></script>
	<script type="text/javascript" src="js/renew-page.js"></script>

	
	<script type="text/javascript" src="widget/lib/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="widget/lib/jquery.ui.core.min.js"></script>
	<script type="text/javascript" src="widget/lib/jquery.ui.widget.min.js"></script>
	<script type="text/javascript" src="widget/lib/jquery.ui.rlightbox.min.js"></script>
	
	
	
	
<!--rlightbox javascript-->
	<script type="text/javascript">
		jQuery(function($) {
			$( ".lb_images" ).rlightbox();
		});
	</script>
	
	
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
			document.getElementById("counter1").innerHTML = "E-mail: <input type='text' name='email-edit' id='email-edit' value=''/>   <button id='update_email' style='margin-left:338px'>update</button><br />";
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
			document.getElementById("counter2").innerHTML = "Password: <input type='text' name='pass-edit' id='pass-edit' value=''/>   <button  id='update-pass' style='margin-left:320px'>update</button><br />";
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
		
//		function edit_user(value) {
			
//				var usname = value;
				//alert(usname);
				
//				$.ajax({
//				url: "edit_users.php", //klisi arxeiou
//				dataType: "text", //tupos minimatos
//				type: "GET", //POST i GET
//				data: {'username': usname },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
//				success: function(data){
					//alert(data); // this will print you any php / mysql error as an alert  
//					header('Location: edit_users.php');
//				}
//				});		
			
//		}
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
					if(data === "Record deleted successfully") location.href = "http://localhost/diplwmatiki/custom-bootstrap/users-list.php"
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
	
<script type="text/javascript">
	function insertphoto(value2) {
		var username=value2;
		//alert(username);
		//$.ajax({
						//url: "insert-user-photo.php",
						//type: "POST",
						//data: {  'username': username },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
						//success: function(data){
						//	alert(data); // this will print you any php / mysql error as an alert  
						//}
				//});	
						location.href = "http://localhost/diplwmatiki/custom-bootstrap/insert-user-photo.php"

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



	
</body>
</html>
