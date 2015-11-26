<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset= iso-8859-7" />
    <title>Εγγραφή</title>
	<link rel="stylesheet" href="eggrafi.css" type="text/css"/>
</head>

<body>
<h3> ΝΕΟΣ ΧΡΗΣΤΗΣ </h3>

<?php 
require_once('connect.inc');
?>

<div id="stylized" class="column1">
	<form method="post" action="eggrafi.php">
		<p>
		<label> Όνομα* </label>
		<input name="firstname" tabindex="110" type="text" id="firstname"  />
		</p>
		<p>
		<label> Επώνυμο* </label>
		<input name="lastname" tabindex="110" type="text" id="lastname" />
		</p>
		<p>
		<label> Τηλέφωνο</label>
		<input name="phoneNumber" tabindex="110" type="int" id="phoneNumber" />
		</p>
		<p>
		<label> Ε-mail* </label>
		<input name="email" tabindex="110" type="text" id="email" />
		</p>
		<p>
		<label>Όνομα χρήστη*
		<span class="small">Το username είναι μοναδικό</span></label>
		<input name="username" tabindex="110" type="text" id="username" />
		</p>
		<p>
		<label> Κωδικός* 
		<span class="small">6-8 χαρακτήρες</span></label>
		<input name="password" tabindex="110" type="password" id="password" />
		</p>

		<p><span class="small">* υποχρεωτικά πεδία </span></p>
	
	
				    <div id="checkbox">
			<label>
			<input id="adult" name="adult" value="true" type="checkbox" class="cοlors" /></label>Bεβαιώνω ότι είμαι άνω των 18 και ότι έχω διαβάσει τους <a href="terms_and_conditions">όρoυς χρήσης.</a>
			<br/>
			</div>
			
					<div id="button" class="colors">
			<input type="submit" name="button" value="Εγγραφή" />
			</div>	
	



	</form>
	</div>
		  <br/>  <br/>  <br/>
	</body>
	</html>