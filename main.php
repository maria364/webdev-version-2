<!DOCTYPE html>
<html lang="en">
<?php
include('connect.inc');
/* 
$sql = "INSERT INTO members (id, usename, password)
VALUES ('8', 'bootstrap', '4722')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); */
?>
<head >
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--xrisimopoieitai gia na prosarmozetai i selida kathe fora sto megethos tis othonis-->
<meta name="description" content="">
<meta name="author" content="">

    <title></title>

   <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header page-scroll">
				<a class="home-button" style="margin-top:-30px" href="#page-top"><img class="logo" src="img/logo.png" alt="logo" height="70%" width="70%" ></a>   
								
			</div>
    </nav>

	<header>
	
    </header>
	<section>
	<div class="col-lg-6 " style="text-align: justify">
					<p>Στην παρούσα διπλωματική εργασία έχει αναπτυχθεί ένα σύστημαφύλαξης εσωτερικών χώρος μα τη βοήθεια της αναγνώρισης προσώπων. Το ενλόγω σύστημα αφορά τη «φύλαξη» του χώρου στον οποίο θα τοποθετηθεί το σύστημα και την άμεση ενημέρωση του χρήστη σχετικά με το τι συμβαίνει στο χώρο του. Αποτελείται από μια κάμερα και ένα όπλο (όχι πραγματικό, αλλά ένα αυτόματο παιδικό όπλο με σφαίρες από αφρολέξ). Το πρόγραμμα που θα συνδέει τα «μάτια» με το όπλο βασίζεται στην ανίχνευση κίνησης και έπειτα στην αναγνώριση των ατόμων που θα εισέρχονται στην «περιοχή φύλαξης» αυτού. Τα άτομα αυτά κατατάσσονται σε κατηγορίες γνωστών και αγνώστων σύμφωνα με τα στοιχεία που έχει εισάγει ο χρήστης, ώστε να γίνεται σωστά η αναγνώριση. </p>
                <br>
					<p>Η κατασκευή μπορεί να εγκατασταθεί ως φύλακας σε εσωτερικούς χώρους όπως π.χ. σπίτι, γραφείο, κατάστημα, αλλά και σε οποιοδήποτε άλλο χώρο (εργοστάσια, στρατιωτικά φυλάκια, κτλ), αρκεί να υπάρχει τροφοδότηση ρεύματος.</p>                </div>
    </div>
	<div class="col-lg-4 col-lg-offset-2">
			<span class="glyphicon glyphicon-user"><h3>Είσοδος</h3></span>
			<br/>
			<br/>
            <form class="login-form" action="login.php" method="post">
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
						<button class="submit" id="login">Είσοδος</button>
					</p>
		</form>  		
		<div id="ack2"></div> 
		<br/>
		<br/>
		<br/>
			<label><a href="#modal-forget" id="forget">Ξεχάσατε τον κωδικό σας?</a></label>
    </div>
	</section>
	
		<?php include 'footer.php'; ?>
