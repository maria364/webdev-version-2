<?php 
include('../connect.php');
include('../lang.gr.php');


error_reporting(E_ALL);
ini_set('display_errors', 1); 

$choose = htmlentities($_POST['choose'], ENT_QUOTES,"utf-8");
//echo $username;


if ($choose == 1) {

		$username = htmlentities($_POST['username'], ENT_QUOTES,"utf-8");
		
		//diagrafoume prwta to fakelo tou xristi me ta arxeia tou 
		$temp23 = "uploads/".$username."/";
		$structure2 = $temp23;
		rmdir($structure2); //diagrafi tou arxeiou apo to path pou tou exei dwthei parapanw
		
		$first = "DELETE FROM users_tsourma WHERE username='$username'";
		$conn->exec($first);
			
		echo htmlentities($message26, ENT_QUOTES,"utf-8");//"Ο χρήστης διαγράφηκε επιτυχώς."; 
		
		

} else if ($choose == 2) {
		
		$filename = $_POST['photo_name'];
			if (file_exists($filename)) {
				unlink($filename);
				echo  htmlentities($message27, ENT_QUOTES,"utf-8")."". htmlentities($filename, ENT_QUOTES,"utf-8")."". htmlentities($message28, ENT_QUOTES,"utf-8");
			} else {
				echo  htmlentities($message29, ENT_QUOTES,"utf-8") ."". htmlentities($filename, ENT_QUOTES,"utf-8")."". htmlentities($message30, ENT_QUOTES,"utf-8");
			}
		
}
/* mysqli_close($conn);
 */
?>
