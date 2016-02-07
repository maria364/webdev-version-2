<section>
	<div class="col-lg-6" id="main-first-row" >
					<img class="img-responsive" id="sentry-gun" src="img/webimages/background.png" alt="sentry gun"/>
					
    </div>
	<div class="col-lg-4 col-lg-offset-2">
			<h3><?php echo htmlentities($message109, ENT_QUOTES,"utf-8") ?></h3>
			<br/>
			<br/>
            <form id="recover" class="recovery-form" method="post"><!-- action="login.php" -->
					<p class="fieldset">
						<h4 class="recover-username" for="recover-username"><?php echo htmlentities($message110, ENT_QUOTES,"utf-8") ?></h4><br/>
						<input class="input-recover-username"  name="recoverusername" type="text" placeholder="">
						<!-- <span class="cd-error-message">Error message here!</span> -->
					</p>

					<p class="fieldset">
						<h4 class="recover-password" for="recover-password"><?php echo htmlentities($message111, ENT_QUOTES,"utf-8") ?></h4><br/>
						<input class="input-recover-password" name="recoverpassword" type="password"  placeholder="">
					</p>

					<p class="fieldset">
						<h4 class="recover2-password" for="recover2-password"><?php echo htmlentities($message112, ENT_QUOTES,"utf-8") ?></h4><br/>
						<input class="input-recover2-password" name="recover2password" type="password"  placeholder="">
					</p>

					<br/>
					<p class="fieldset">
						<button class="submit" id="login" name="login"><?php echo htmlentities($message113, ENT_QUOTES,"utf-8") ?></button>
					</p>
		</form>  		
		<div id="ack9"></div> 
		
    </div>
</section>
