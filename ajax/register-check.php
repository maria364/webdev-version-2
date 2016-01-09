<?php 
include('../connect.php');

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname =  mysql_real_escape_string($_POST['lastname']);
$email = mysql_real_escape_string($_POST['e-mail']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string( md5 ($_POST['password']));


if( empty($username) || empty($password) )
	  {
	  	echo "Απαραίτητα username και password";
		exit();
	  }

/*Ελέγχω τη μοναδικότητα του username*/

//$first = "SELECT username FROM users WHERE username LIKE '$username'";
$first = $conn->prepare("SELECT `username` FROM `users` WHERE `username` = :username");
//$res = mysqli_query($conn, $first)or die("<br/><br/>".mysql_error());
$first->bindValue(':username', $username);
$first->execute();
// set the resulting array to associative
$row = $first->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
	
//$row = mysqli_fetch_row($res);

if ( $row> 0 )
	echo "To username που επιλέξατε χρησιμοποιείται ήδη."; 
else {  
	
	$sql = "INSERT INTO users (firstname, lastname, email, password, id, username, identity, sendemail) VALUES ('$firstname', '$lastname', '$email', '$password', '', '$username', '0','0' )";
	/* ('firstname, lastname, e-mail, usename, password) */
	if ($conn->exec($sql)) {
		echo "Ο χρήστης δημιουργήθηκε επιτυχώς!";
		
		//orizoume to path kai to onoma tou fakelou gia na dimiourgithei o fakelos fwtografiwn me to onoma tou xristi
		$temp22 = "uploads/".$username."/";
		$structure = $temp22;
		if (!file_exists($structure)) {
			mkdir($structure, 0777)or die('Αποτυχία δημιουργίας φακέλου..');
		}
		
	} else {
		echo "Αποτυχία εισαγωγής χρήστη.. ";
	}

}
/* mysqli_close($conn);
 */
?>
