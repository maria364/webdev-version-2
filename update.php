<?php 
session_start();

include('connect.php');
include('lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 

$username =  filter_var($_POST['username'], FILTER_SANITIZE_STRING);

	//$sql = "SELECT * FROM users WHERE(username='$username')";
	$sql = $conn->prepare("SELECT * FROM users_tsourma WHERE username = :username");
	//$res = mysqli_query($conn,$sql); 
	$sql->bindValue(':username', $username, PDO::PARAM_STR);
	$sql->execute();
	//$row = mysqli_fetch_row($res);
	$row = $sql->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 

if ( $row> 0 )
{
$check=  filter_var($_POST['check'], FILTER_SANITIZE_STRING);
// echo $check;

	//allagi onomatos kai epwnimou
	if ($check == 1)
	{
		$firstname =   filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
		$lastname =   filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
			if(empty($firstname))
			{
				if (empty($lastname))
				{
					echo $message63;
				} else {
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users_tsourma SET lastname=:lastname WHERE username=:username";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					// execute the query
					$stmt->execute();
					echo $stmt->rowCount() . "". $message64."" . $lastname;
					
					
					//echo "Lastname changed";
					//echo $lastname;
				}
			} else 
				{	
					if (empty($lastname))
					{
						//echo "Το όνομά σας άλλαξε επιτυχώς. " .$firstname;
						//echo $firstname;
						//do the update if the user has changed his/her firstname, lastname
						$sql = "UPDATE users_tsourma SET firstname=:firstname WHERE username=:username";
						//$res = mysqli_query($conn,$sql); 
						$stmt = $conn->prepare($sql);
						$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
						$stmt->bindParam(':username', $username, PDO::PARAM_STR);
						$stmt->execute();
						echo $stmt->rowCount() . "".$message65."" .$firstname;
						
						
					} else {
	
						echo $message66."" .$lastname;
						//echo $lastname;
						echo $message67."".$firstname;
						//echo $firstname;
						//do the update if the user has changed his/her firstname, lastname
						$sec = "UPDATE users_tsourma SET lastname=:lastname, firstname=:firstname WHERE username=:username";
						//$res = mysqli_query($conn,$sql); 
						$stmt = $conn->prepare($sec);
						$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
						$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
						$stmt->bindParam(':username', $username, PDO::PARAM_STR);
						$stmt->execute();
					}
				
				}
	//allagi dieuthinsis email			
	} else if ($check == 2) {
		
		$email =   filter_var($_POST['email'], FILTER_SANITIZE_STRING);
		
			if( empty($email))
				{
					echo $message68;
					
				}else {
					//echo "Το email σας έχει αλλάξει επιτυχώς.";
					//echo $email;	
					
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users_tsourma SET email=:email WHERE username=:username";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':email', $email, PDO::PARAM_STR);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					$stmt->execute();
					echo $stmt->rowCount() . "".$message69."" . $email;
				}
				
	//allagi kwdikou prosvasis		
	} else if ($check ==3) {
		$password =  filter_var($_POST['password'], FILTER_SANITIZE_STRING);
			if( empty($password))
				{
					echo $message70;
				}else {
				$password = md5($password);
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users_tsourma SET password=:password WHERE username=:username";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':password', $password);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					$stmt->execute();
					echo $stmt->rowCount() . "".$message71;
					//echo "Password editted";
					//echo $password;
				}
	} else if ($check == 4) {
		$identity =  filter_var($_POST['identity'], FILTER_SANITIZE_STRING);
		
			if($identity == 0){
				$q=1;
				//εάν ο χρήστης είναι user, άλλαξε την τιμή του πεδίου identity σε 1 και καν' τον administrator
				$sql = "UPDATE users_tsourma SET identity=:identity WHERE username=:username";
				//$res = mysqli_query($conn,$sql);
				$stmt = $conn->prepare($sql);
				$stmt->bindParam(':identity', $q); 
				$stmt->bindParam(':username', $username);
				$stmt->execute();
				echo $stmt->rowCount() . $message72;
					//echo "Τα δικαιώματα του χρήστη έχουν αλλάξει ";
					//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση

			} else {
				echo  $message73;
			}
	
	} else if ($check == 5) {
		$identity =  filter_var($_POST['identity'], FILTER_SANITIZE_STRING);
		
			$sql = $conn->prepare( "SELECT * FROM users_tsourma WHERE identity= :identity");
			//$res = mysqli_query($conn,$sql); 
			//$row = mysqli_num_rows($res); //επιστρέφει τον αριθμό των γραμμών της βάσης που έχουν βρει το αποτέλεσμα από το παραπάνω sql ερώτημα
			//echo $row;
			$w=1;
			$sql->bindValue(':identity', $w);
			$sql->execute();
			$row = $sql->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 

			
			if($row>1){
				 //$rowc = mysqli_fetch_assoc($res);
				
				
				if($identity == 1){
			//εάν ο χρήστης είναι user, άλλαξε την τιμή του πεδίου identity σε 0 και καν' τον user
					$r=0;
					$sql = "UPDATE users_tsourma SET identity=:identity WHERE username=:username";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':identity', $r, PDO::PARAM_INT);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					$stmt->execute();
					echo $stmt->rowCount() . $message72;
					//echo "Τα δικαιώματα του χρήστη έχουν αλλάξει";
								//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση
				} else {
					echo $message74;
				}
			

			} else {
				echo $message75;
			}
		
	} else if ($check == 6) {
		
		$username =  filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$select2 =  filter_var($_POST['select'], FILTER_SANITIZE_STRING);
		
		echo  $select2;
		
			$sql = $conn->prepare( "SELECT * FROM users_tsourma WHERE sendemail = :sendemail");
			//$res = mysqli_query($conn,$sql); 
			//$row = mysqli_num_rows($res); //επιστρέφει τον αριθμό των γραμμών της βάσης που έχουν βρει το αποτέλεσμα από το παραπάνω sql ερώτημα
			//echo $row;
			$sql->bindValue(':sendemail', 1);
			$sql->execute();
			$rowc = $sql->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
			//echo $rowc;
			
			if(($rowc >0) && $select2 == "yes") {
				 //$rowc = mysqli_fetch_assoc($res);
				//if($select2 == "yes"){
				$t=1;
					$sql = "UPDATE users_tsourma SET sendemail=:sendemail WHERE username=:username";
					//$res = mysqli_query($conn,$sql)or die("<br/><br/>".mysql_error()); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':sendemail', $t, PDO::PARAM_INT);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					$stmt->execute();
					echo $stmt->rowCount() .  $message76;
					//echo "Ο χρήστης θα ξεκινήσει να λαμβάνει ενημερωτικά mail.";
								//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση
								
			} else if ( ($rowc >1) && $select2 == "no"){
				$y=0;
					$sql = "UPDATE users_tsourma SET sendemail=:sendemail WHERE username=:username";
					//$res = mysqli_query($conn,$sql)or die("<br/><br/>".mysql_error()); 
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':sendemail', $y, PDO::PARAM_INT);
					$stmt->bindParam(':username', $username, PDO::PARAM_STR);
					$stmt->execute();
					echo $stmt->rowCount() . $message77;
					//echo "Ο χρήστης θα πάψει να ενημερώνεται μέσω e-mail.";
				//}

			} else {
				echo $message78;

			}
		
		}	
	}
?>
