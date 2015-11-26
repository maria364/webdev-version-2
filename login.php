<?php 
session_start();

include('connect.php');

$username = $_POST['loginusername'];
$password = md5 ($_POST['loginpassword']);
$connection = 0;


$stmt = $conn->prepare("SELECT 	* FROM `users` WHERE `username`= :username AND `password`= :password");
$stmt->bindValue(':username', $username); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
$stmt->bindValue(':password', $password);
$stmt->execute();
// set the resulting array to associative
$row = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
if ( $row== 1 ) {

	$connection = 1; //allagi metavlitis pou deixnei oti exei epiteuxthei i epikurwsi stoixeiwn
	
	/*εδώ βάζουμε το username για το session. το username που έχει εισάγει ο χρήστης.*/	
	$_SESSION['rightname'] = $username;
	echo "$username";
	
}else {  
	echo "fail";
}

/* mysqli_close($conn);
 */
?>
