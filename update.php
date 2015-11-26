<?php 
session_start();

include('connect.php');
$username = $_POST['username'];

	//$sql = "SELECT * FROM users WHERE(username='$username')";
	$sql = $conn->prepare("SELECT * FROM `users` WHERE `username` = :username");
	//$res = mysqli_query($conn,$sql); 
	$sql->bindValue(':username', $username);
	$sql->execute();
	//$row = mysqli_fetch_row($res);
	$row = $sql->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 

if ( $row> 0 )
{
$check=$_POST['check'];
echo $check;

	//allagi onomatos kai epwnimou
	if ($check == 1)
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'] ;
			if(empty($firstname))
			{
				if (empty($lastname))
				{
					echo "Δεν υπήρξε καμία αλλαγή στο όνομά σας.";
				} else {
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users SET lastname='$lastname' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					// execute the query
					$stmt->execute();
					echo $stmt->rowCount() . " Το επίθετό σας άλλαξε επιτυχώς σε " . $lastname;
					
					
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
						$sql = "UPDATE users SET firstname='$firstname' WHERE username='$username'";
						//$res = mysqli_query($conn,$sql); 
						$stmt = $conn->prepare($sql);
						$stmt->execute();
						echo $stmt->rowCount() . " Το όνομά σας άλλαξε επιτυχώς σε " . $firstname;
						
						
					} else {
						echo "Το επώνυμό σας άλλαξε επιτυχώς." .$lastname;
						//echo $lastname;
						echo "Το όνομά σας άλλαξε επιτυχώς.".$firstname;
						//echo $firstname;
						//do the update if the user has changed his/her firstname, lastname
						$sec = "UPDATE users SET lastname='$lastname', firstname='$firstname' WHERE username='$username'";
						//$res = mysqli_query($conn,$sql); 
						$stmt = $conn->prepare($sec);
						$stmt->execute();
					}
				
				}
	//allagi dieuthinsis email			
	} else if ($check == 2) {
		
		$email = $_POST['email'] ;
			if( empty($email))
				{
					echo "Το email σας δεν έχει αλλάξει.";
					
				}else {
					//echo "Το email σας έχει αλλάξει επιτυχώς.";
					//echo $email;	
					
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users SET email='$email' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					echo $stmt->rowCount() . "Το email σας έχει αλλάξει επιτυχώς σε " . $email;
				}
				
	//allagi kwdikou prosvasis		
	} else if ($check ==3) {
		$password = $_POST['password'];
			if( empty($password))
				{
					echo "Ο κωδικός σας δεν έχει αλλάξει.";
				}else {
				$password = md5($password);
					//do the update if the user has changed his/her firstname, lastname
					$sql = "UPDATE users SET password='$password' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					echo $stmt->rowCount() . "Ο κωδικός σας έχει αλλάξει επιτυχώς.";
					//echo "Password editted";
					//echo $password;
				}
	} else if ($check == 4) {
		$identity = $_POST['identity'];
			if($identity == 0){
				//εάν ο χρήστης είναι user, άλλαξε την τιμή του πεδίου identity σε 1 και καν' τον administrator
				$sql = "UPDATE users SET identity='1' WHERE username='$username'";
				//$res = mysqli_query($conn,$sql); 
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				echo $stmt->rowCount() . "Τα δικαιώματα του χρήστη έχουν αλλάξει ";
					//echo "Τα δικαιώματα του χρήστη έχουν αλλάξει ";
					//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση

			} else {
				echo "Ο παρόν χρήστης έχει ήδη δικαιώματα administrator.";
			}
	
	} else if ($check == 5) {
		$identity = $_POST['identity'];
			$sql = $conn->prepare( "SELECT * FROM `users` WHERE `identity`= :identity");
			//$res = mysqli_query($conn,$sql); 
			//$row = mysqli_num_rows($res); //επιστρέφει τον αριθμό των γραμμών της βάσης που έχουν βρει το αποτέλεσμα από το παραπάνω sql ερώτημα
			//echo $row;
			$sql->bindValue(':identity', 1);
			$sql->execute();
			$row = $sql->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 

			
			if($row>1){
				 //$rowc = mysqli_fetch_assoc($res);
				
				
				if($identity == 1){
			//εάν ο χρήστης είναι user, άλλαξε την τιμή του πεδίου identity σε 0 και καν' τον user
					$sql = "UPDATE users SET identity='0' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql); 
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					echo $stmt->rowCount() . "Τα δικαιώματα του χρήστη έχουν αλλάξει.";
					//echo "Τα δικαιώματα του χρήστη έχουν αλλάξει";
								//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση
				} else {
					echo "Ο παρόν χρήστης έχει ήδη δικαιώματα user.";
				}
			

			} else {
				echo "Δεν μπορείτε να γίνεται user, καθώς πρέπει να υπάρχει ένας administrator στο σύστημα";
			}
		
	} else if ($check == 6) {
		
		$username = $_POST['username'];
		$select2 = $_POST['select'];
		echo $select2;
		
			$sql = $conn->prepare( "SELECT * FROM `users` WHERE `sendemail` = :sendemail");
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
					$sql = "UPDATE users SET sendemail='1' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql)or die("<br/><br/>".mysql_error()); 
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					echo $stmt->rowCount() . "Ο χρήστης θα ξεκινήσει να λαμβάνει ενημερωτικά mail.";
					//echo "Ο χρήστης θα ξεκινήσει να λαμβάνει ενημερωτικά mail.";
								//echo $identity; //η identity που εμφανίζεται είναι τα παλιά δικαιώματα του χρήστη. αυτά που έχει στη βάση
								
			} else if ( ($rowc >1) && $select2 == "no"){
					$sql = "UPDATE users SET sendemail='0' WHERE username='$username'";
					//$res = mysqli_query($conn,$sql)or die("<br/><br/>".mysql_error()); 
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					echo $stmt->rowCount() . "Ο χρήστης θα πάψει να ενημερώνεται μέσω e-mail.";
					//echo "Ο χρήστης θα πάψει να ενημερώνεται μέσω e-mail.";
				//}

			} else {
				echo "Δεν μπορείτε να αποκλείσετε τον user από τη λίστα, καθώς θα πρέπει πάντα να ενημερώνεται, μέσω e-mail, ένας τουλάχιστον χρήστης.";

			}
		
		}	
	}
?>