<section>
	<div class="col-lg-6" id="main-first-row" >
					<img class="img-responsive" id="sentry-gun" src="img/webimages/background.png" alt="sentry gun"/>
					
    </div>
	<div class="col-lg-4 col-lg-offset-2" id="entry">
			<span class="glyphicon glyphicon-user"><h3><?php echo htmlentities($message151, ENT_QUOTES,"utf-8")?></h3></span>
			<br/>
			<br/>
            <form id="login" class="login-form" method="post"><!-- action="login.php" -->
					<p class="fieldset">
						<label class="login-username" for="login-username"><?php echo htmlentities($message110, ENT_QUOTES,'utf-8') ?></label><br/>
						<input class="input-login-username"  name="loginusername" type="text" placeholder="">
						<!-- <span class="cd-error-message">Error message here!</span> -->
					</p>

					<p class="fieldset">
						<label class="login-password" for="login-password"><?php echo htmlentities($message111, ENT_QUOTES,'utf-8') ?></label><br/>
						<input class="input-login-password" name="loginpassword" type="password"  placeholder="">
					</p>

					<br/>
					<p class="fieldset">
						<button class="submit" id="login" name="login"><?php echo htmlentities($message14, ENT_QUOTES,'utf-8') ?></button>
					</p>
		</form>  		
		<div id="ack2"></div> 
		<br/>
		<br/>
		<br/>
			<label><a href="#modal-forget" id="forgetpass-btn"><?php echo htmlentities($message145, ENT_QUOTES,'utf-8') ?></a></label>
    </div>
</section>
