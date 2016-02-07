<?php 
session_start();

include('connect.php');
include('lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 

$username = htmlentities($_POST['loginusername'], ENT_QUOTES,"utf-8");
$password = md5 ($_POST['loginpassword']);
$connection = 0;


$stmt = $conn->prepare("SELECT 	identity FROM users_tsourma WHERE username= :username AND password= :password");
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
			echo htmlentities($type, ENT_QUOTES,"utf-8");
			
		} else if ($row['identity'] ==0) {
			$type="user";
			echo htmlentities($type, ENT_QUOTES,"utf-8");;
		}
	//echo $username;
	
}else {  
	$type = "fail";
	echo htmlentities($type, ENT_QUOTES,"utf-8");; //$message31
}

/* mysqli_close($conn);
 */
?>
