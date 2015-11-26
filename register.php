<?php include 'header.php'; ?>

<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
					<form class="register-form" action="register-check.php" method="post">
						<p class="fieldset">
							<label class="label-FirstName" for="e" align="left">Όνομα</label>
							<input class="input-FirstName" type="text" name="firstname" placeholder="Μαρία">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>
						
						<p class="fieldset">
							<label class="label-LastName" for="" align="left">Επώνυμο</label>
							<input class="input-LastName" type="text" name="lastname" placeholder="Τσούρμα">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>
						
						<p class="fieldset">
							<label class="register-email" for="register-email" align="left">E-mail*</label>
							<input class="register-email" type="email" name="e-mail" placeholder="example@email.com">
						</p>
						
						<p class="fieldset">
							<label class="register-username" for="register-username" align="left">Username*</label>
							<input class="register-username" type="text" name="username" placeholder="Username">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>

						<p class="fieldset">
							<label class="register-password" for="register-password" align="left">ΚωδικόςΠρόσβασης*</label>
							<input class="register-password" type="password"  name="password"  placeholder="Password"> <!--o tupos einai password gia na emfanizetai doted kai oxi string o kwdikos pou pliktrologei o xristis-->
						</p>
						<br>
						<br>
						<label  id="accept-terms" for="accept-terms">Τα πεδία με αστερίσκο (*) είναι υποχρεωτικά.</label>
						<br>
						<br>
						<p class="fieldset">
							<button class="submit" id="register" align="right" style="margin-left:70%"><h4>Δημιουργία<br> Λογαριασμού</h4></button>
						</p>
					</form>

					<div id="ack"></div>
				</div>
			</div>
		<div>
	
    </header>	
	
<?php include 'footer.php'; ?>
