<?php 
include('../connect.php');
include('../lang.gr.php');


error_reporting(E_ALL);
ini_set('display_errors', 1); 


$firstname = htmlentities($_POST['firstname'], ENT_QUOTES,"utf-8");
$lastname =  htmlentities($_POST['lastname'], ENT_QUOTES,"utf-8");
$email = htmlentities($_POST['email'], ENT_QUOTES,"utf-8");
$username = htmlentities($_POST['username'], ENT_QUOTES,"utf-8");
$password = md5 ($_POST['password']);


if( empty($username) || empty($password) )
	  {
	  	echo htmlentities($message46, ENT_QUOTES,"utf-8");
		exit();
	  }

/*Ελέγχω τη μοναδικότητα του username*/

//$first = "SELECT username FROM users WHERE username LIKE '$username'";
$first = $conn->prepare("SELECT username FROM users_tsourma WHERE username = :username");
$first->bindValue(':username', $username);
$first->execute();
$row = $first->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
	
//$row = mysqli_fetch_row($res);

if ( $row> 0 )
	echo htmlentities($message47, ENT_QUOTES,"utf-8");
else {  
	
	$sql = "INSERT INTO users_tsourma (firstname, lastname, email, password, id, username, identity, sendemail) VALUES ('$firstname', '$lastname', '$email', '$password', '', '$username', '0','0' )";
	/* ('firstname, lastname, e-mail, usename, password) */
	if ($conn->exec($sql)) {
		echo htmlentities($message48, ENT_QUOTES,"utf-8");
		
		//orizoume to path kai to onoma tou fakelou gia na dimiourgithei o fakelos fwtografiwn me to onoma tou xristi
		$temp22 = "uploads/".$username."/";
		$structure = $temp22;
		if (!file_exists($structure)) {
			mkdir($structure, 0777)or die( echo htmlentities($message49, ENT_QUOTES,"utf-8");
		}
		
	} else {
		echo htmlentities($message50, ENT_QUOTES,"utf-8");
	}

}
/* mysqli_close($conn);
 */
?>
