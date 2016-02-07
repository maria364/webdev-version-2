<!-- sto prerender tha elegxetai an o arithmos pou dinetai sti dieuthinsi kai to mail uparxoun sti vasi dedomenwn -->
<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);  
include('connect.php');
include('lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 


$Randnumber = filter_var($_GET["No"], FILTER_SANITIZE_STRING); //einai o random arithmos pou emfanizetai stin dieuthinsi
$email_rec = filter_var($_GET["email"], FILTER_SANITIZE_STRING);

if(empty($Randnumber) || empty($email_rec)) {
    //header("Location: /diplwmatiki/t_selida/?p=main");
    echo $message82;
    header("Location: /diplwmatiki/t_selida/?p=main");
} else {


	$sqll= "SELECT  * FROM recover_pass_tsourma WHERE email = :email AND randomno = :Randnumber"; 
	$stmt = $conn->prepare($sqll);
	$stmt->bindValue(':email', $email_rec); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
	$stmt->bindValue(':Randnumber', $Randnumber); 
	$stmt->execute();
			// set the resulting array to associative
	$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
	echo $res; 
			    
	if ( $res == 0 ) {

		echo $message83;
 		header("Location: /diplwmatiki/t_selida/?p=main");
	} 



}




?>
