
<section>
	<div class="col-lg-6" id="main-first-row" >
					<img class="img-responsive" id="sentry-gun" src="img/webimages/background.png" alt="sentry gun"/>
					<!-- <p>Στην παρούσα διπλωματική εργασία έχει αναπτυχθεί ένα σύστημαφύλαξης εσωτερικών χώρος μα τη βοήθεια της αναγνώρισης προσώπων. Το ενλόγω σύστημα αφορά τη «φύλαξη» του χώρου στον οποίο θα τοποθετηθεί το σύστημα και την άμεση ενημέρωση του χρήστη σχετικά με το τι συμβαίνει στο χώρο του. Αποτελείται από μια κάμερα και ένα όπλο (όχι πραγματικό, αλλά ένα αυτόματο παιδικό όπλο με σφαίρες από αφρολέξ). Το πρόγραμμα που θα συνδέει τα «μάτια» με το όπλο βασίζεται στην ανίχνευση κίνησης και έπειτα στην αναγνώριση των ατόμων που θα εισέρχονται στην «περιοχή φύλαξης» αυτού. Τα άτομα αυτά κατατάσσονται σε κατηγορίες γνωστών και αγνώστων σύμφωνα με τα στοιχεία που έχει εισάγει ο χρήστης, ώστε να γίνεται σωστά η αναγνώριση. </p> -->
                <!-- <br> -->
					<!-- <p>Η κατασκευή μπορεί να εγκατασταθεί ως φύλακας σε εσωτερικούς χώρους όπως π.χ. σπίτι, γραφείο, κατάστημα, αλλά και σε οποιοδήποτε άλλο χώρο (εργοστάσια, στρατιωτικά φυλάκια, κτλ), αρκεί να υπάρχει τροφοδότηση ρεύματος.</p>                </div> -->
    </div>
	<div class="col-lg-4 col-lg-offset-2">
			<span class="glyphicon glyphicon-user"><h3>Είσοδος</h3></span>
			<br/>
			<br/>
            <form id="login" class="login-form" method="post"><!-- action="login.php" -->
					<p class="fieldset">
						<label class="login-username" for="login-username">Όνομα χρήστη:</label><br/>
						<input class="input-login-username"  name="loginusername" type="text" placeholder="">
						<!-- <span class="cd-error-message">Error message here!</span> -->
					</p>

					<p class="fieldset">
						<label class="login-password" for="login-password">Κωδικός Πρόσβασης:</label><br/>
						<input class="input-login-password" name="loginpassword" type="password"  placeholder="">
					</p>

					<!--<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label class="remember-me" for="remember-me">Να παραμείνω συνδεδεμένος</label>
					</p>-->
					<br/>
					<p class="fieldset">
						<button class="submit" id="login" name="login">Είσοδος</button>
					</p>
		</form>  		
		<div id="ack2"></div> 
		<br/>
		<br/>
		<br/>
			<label><a href="#modal-forget" id="forget">Ξεχάσατε τον κωδικό σας?</a></label>
    </div>
</section>