<?php 
session_start();

include('connect.php');

$username = $_POST['loginusername'];
$password = md5 ($_POST['loginpassword']);
$connection = 0;


$stmt = $conn->prepare("SELECT 	`identity` FROM `users` WHERE `username`= :username AND `password`= :password");
$stmt->bindValue(':username', $username); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
$stmt->bindValue(':password', $password);
$stmt->execute();
// set the resulting array to associative
$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
if ( $res== 1 ) {

	$connection = 1; //allagi metavlitis pou deixnei oti exei epiteuxthei i epikurwsi stoixeiwn
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	/*εδώ βάζουμε το username για το session. το username που έχει εισάγει ο χρήστης.*/	
	$_SESSION['rightname'] = $username;
	$val=$row['identity'];
	//efoson exei pistopoiithei oti o xristis uparxei, zitame na paroume apo ti vasi tin identity tou gia na elenxthei se poia katigoria anoikei (admin/user), wste na tou anoiksei to katallilo dashboard
	
	
		if ( $val == 1) {
			$type="admin";
			echo $type;
			
		} else if ($row['identity'] ==0) {
			$type="user";
			echo $type;
		}
	//echo $username;
	
}else {  
	echo "fail";
}

/* mysqli_close($conn);
 */
?>
