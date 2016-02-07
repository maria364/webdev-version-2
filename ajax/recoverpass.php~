<?php
include('../connect.php');
include('../lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 

$username = htmlentities($_POST['username'], ENT_QUOTES,"utf-8");
$password = htmlentities($_POST['password'], ENT_QUOTES,"utf-8");
$password = md5($password);
$email_rec = htmlentities($_POST['email'], ENT_QUOTES,"utf-8");;

$stmt = $conn->prepare("SELECT * FROM users_tsourma WHERE username= :username AND email= :email_rec");
$stmt->bindValue(':username', $username, PDO::PARAM_STR); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
$stmt->bindValue(':email_rec', $email_rec, PDO::PARAM_STR);
$stmt->execute();
// set the resulting array to associative
$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
if ( $res>0 ) {
	echo htmlentities($res, ENT_QUOTES,"utf-8");
//epivevaiwnetai oti o xristis uparxei sti vasi, epomenws kanoume allagi - update tou kwdikou tou
	$sql = "UPDATE users_tsourma SET password=:password WHERE username=:username";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':username', $username, PDO::PARAM_STR);
	$stmt->execute();
	echo htmlentities($stmt, ENT_QUOTES,"utf-8");->rowCount();

} else {
	echo htmlentities($res, ENT_QUOTES,"utf-8");
}


?>
