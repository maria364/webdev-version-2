<?php 
include('../connect.php');

$choose = $_POST['choose'];
//echo $username;


if ($choose == 1) {

		$username = mysql_real_escape_string($_POST['username']);
		
		//diagrafoume prwta to fakelo tou xristi me ta arxeia tou 
		$temp23 = "uploads/".$username."/";
		$structure2 = $temp23;
		rmdir($structure2); //diagrafi tou arxeiou apo to path pou tou exei dwthei parapanw
		
		$first = "DELETE FROM users WHERE username='$username'";
		$conn->exec($first);
			
		echo "Ο χρήστης διαγράφηκε επιτυχώς."; 
		
		

} else if ($choose == 2) {
		
		$filename = $_POST['photo_name'];
			if (file_exists($filename)) {
				unlink($filename);
				echo 'Η φωτογραφία '.$filename.' έχει διαγραφεί.';
			} else {
				echo 'Η διαγραφή δεν μπόρεσε να ολοκληρωθεί. Η φωτογραφία '.$filename.', δεν υπάρχει.';
			}
		
}
/* mysqli_close($conn);
 */
?>