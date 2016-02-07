<?php 
include('connect.php');
include('lang.gr.php');


error_reporting(E_ALL);
ini_set('display_errors', 1); 

$choose = htmlentities($_POST['choose'], ENT_QUOTES,"utf-8");
	
//echo $username;


if ($choose == 1) {

		$username =  htmlentities($_POST['username'], ENT_QUOTES,"utf-8");
		
		//diagrafoume prwta to fakelo tou xristi me ta arxeia tou 
		$temp23 = "uploads/".$username;
		$structure2 = $temp23; 
		echo $structure2;
		rmdir($structure2); //diagrafi tou arxeiou apo to path pou tou exei dwthei parapanw
		
		$first = "DELETE FROM users_tsourma WHERE username=:username";
		$stmt = $conn->prepare($first);
		$stmt->bindParam(':username', $username);   
		$stmt->execute();
			
		echo  $message26; 
		
		

} else if ($choose == 2) {
		
		$filename = filter_var($_POST['photo_name'], FILTER_SANITIZE_STRING);
			if (file_exists($filename)) {
				unlink($filename);
				echo  $message27."".$filename."". $message28;
			} else {
				echo  $message29 ."". $filename."". $message30;
			}
		
}
/* mysqli_close($conn);
 */
?>
