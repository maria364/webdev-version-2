<?php 
include('connect.php');
include('lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 

$firstname = htmlentities($_POST['firstname'], ENT_QUOTES,"utf-8");
$lastname =  htmlentities($_POST['lastname'], ENT_QUOTES,"utf-8");
$email = htmlentities($_POST['e-mail'], ENT_QUOTES,"utf-8");

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
//$res = mysqli_query($conn, $first)or die("<br/><br/>".mysql_error());
$first->bindValue(':username', $username);
$first->execute();
// set the resulting array to associative
$row = $first->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
	
//$row = mysqli_fetch_row($res);

if ( $row> 0 )
	echo htmlentities($message47, ENT_QUOTES,"utf-8"); 
else {  
	
	$d=null;
	$a=0;
	$b=0;

	$sql = "INSERT INTO users_tsourma (firstname, lastname, email, password, id, username, identity, sendemail) VALUES (:firstname, :lastname, :email, :password, :id, :username, :identity, :sendemail )";
	/* ('firstname, lastname, e-mail, usename, password) */
	$stmt = $conn->prepare($sql);                                          
	$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);       
	$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);       
	$stmt->bindParam(':email', $email, PDO::PARAM_STR);       
	$stmt->bindParam(':password', $password, PDO::PARAM_STR);       
	$stmt->bindParam(':id', $d, PDO::PARAM_INT);      
	$stmt->bindParam(':username', $username, PDO::PARAM_STR);        
	$stmt->bindParam(':identity', $a, PDO::PARAM_INT);       
	$stmt->bindParam(':sendemail', $b, PDO::PARAM_INT);       

	if ($stmt->execute()) {
		echo htmlentities($message48, ENT_QUOTES,"utf-8");;
		
		//orizoume to path kai to onoma tou fakelou gia na dimiourgithei o fakelos fwtografiwn me to onoma tou xristi
		$temp22 = "uploads/".$username."/";
		$structure = $temp22;
		if (!file_exists($structure)) {
			mkdir($structure, 0777)or die($message49);
		}
		
	} else {
		echo htmlentities($message50, ENT_QUOTES,"utf-8");
	}

}
/* mysqli_close($conn);
 */
?>
