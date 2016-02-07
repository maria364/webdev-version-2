<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
					<form id="register-form" class="register-form" action="register-check.php" method="post">
						<p class="fieldset">
							<label class="label-FirstName" for="e" align="left"><?php echo htmlentities($message131, ENT_QUOTES,"utf-8") ?></label>
							<input class="input-FirstName" type="text" name="firstname" placeholder="Μαρία">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>
						
						<p class="fieldset">
							<label class="label-LastName" for="" align="left"><?php echo htmlentities($message132, ENT_QUOTES,"utf-8") ?></label>
							<input class="input-LastName" type="text" name="lastname" placeholder="Τσούρμα">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>
						
						<p class="fieldset">
							<label class="register-email" for="register-email" align="left"><?php echo htmlentities($message133, ENT_QUOTES,"utf-8") ?></label>
							<input class="register-email" type="email" name="e-mail" placeholder="example@email.com">
						</p>
						
						<p class="fieldset">
							<label class="register-username" for="register-username" align="left"><?php echo htmlentities($message134, ENT_QUOTES,"utf-8") ?></label>
							<input class="register-username" type="text" name="username" placeholder="Username">
							<!--<span class="cd-error-message">Error message here!</span> -->					
						</p>

						<p class="fieldset">
							<label class="register-password" for="register-password" align="left"><?php echo htmlentities($message135, ENT_QUOTES,"utf-8") ?></label>
							<input class="register-password" type="password"  name="password"  placeholder="Password"> <!--o tupos einai password gia na emfanizetai doted kai oxi string o kwdikos pou pliktrologei o xristis-->
						</p>
						<br>
						<br>
						<p  id="accept-terms" for="accept-terms"><?php echo htmlentities($message136, ENT_QUOTES,"utf-8") ?></p>
						<br>
						<br>
						<p class="fieldset">
							<button class="submit" id="register" align="right"><h4><?php echo htmlentities($message137, ENT_QUOTES,"utf-8") ?><br> <?php echo htmlentities($message138, ENT_QUOTES,"utf-8") ?></h4></button>
						</p>
					</form>

					<div id="ack"></div>
				</div>
			</div>
		<div>
</header>	
	