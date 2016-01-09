<?php 
session_start();

include('../connect.php');

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$password = md5($password);
$connection = 0;


$stmt = $conn->prepare("SELECT * FROM `users` WHERE `username`= :username AND `password`= :password");
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
	//$_SESSION['user'] = json_encode(array('name'=>'value'...))
	$_SESSION['identity']=$row['identity'];
	$_SESSION['id']=$row['id'];
	//efoson exei pistopoiithei oti o xristis uparxei, zitame na paroume apo ti vasi tin identity tou gia na elenxthei se poia katigoria anoikei (admin/user), wste na tou anoiksei to katallilo dashboard

	
		if ( $_SESSION['identity'] == 1) {
			$type="admin";
			echo $type;
			
		} else if ($_SESSION['identity'] ==0) {
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
