<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset= iso-8859-7" />
    <title>Εγγραφή</title>
	<link rel="stylesheet" href="arxiki.css" type="text/css"/>
</head>

<body>
<h3> Εισάγεται τα στοιχεία σας για πιστοποίηση </h3>

<?php 
require_once('connect.inc');
?>

<div id="stylized" class="column1">
	<form method="post" action="checklogin.php">
		<p>
		<label>Όνομα χρήστη*
		<span class="small"></span></label>
		<input name="username" tabindex="110" type="text" id="username" />
		</p>
		<p>
		<label> Κωδικός* 
		<span class="small">6-8 χαρακτήρες</span></label>
		<input name="password" tabindex="110" type="text" id="password" />
		</p>

					<div id="button" class="colors">
			<input type="submit" name="button" value="Εγγραφή" />
			</div>	
	



	</form>
	</div>
		  <br/>  <br/>  <br/>
	</body>
	</html>