<?php 
include('../connect.php');
include('../lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 


$email_reset = htmlentities($_POST['email_reset'], ENT_QUOTES,"utf-8");
//prwta ginetai o elegxos gia to an to mail einai sti vasi
			$sqll= "SELECT  username FROM users_tsourma WHERE email= :email "; 
			$stmt = $conn->prepare($sqll);
			$stmt->bindValue(':email', $email_reset); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
			$stmt->execute();
			// set the resulting array to associative
			$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
			//echo $res; 
			$send_rec_mail = 0;

			if ( $res> 0 ) {

			    $row = $stmt->fetch(PDO::FETCH_ASSOC);
			    //$val=$row['identity'];
			    //efoson exei pistopoiithei oti o xristis uparxei, tou stelnoume email gia na ginei i aitisi allagis kwdikou
			    
			    //paragetai i random metavlitipou tha eisaxthei sti vasi mazi me to mail kai to id.
			    $random = mt_rand() ;
			        $n=null;

			    $to = "mtsourma@gmail.com"; //$email_reset;
				$subject = "Αίτημα αλλαγής κωδικού";
				$txt = "Γεία σας, \n"."Λάβαμε ένα αίτημα για αλλαγή κωδικού από τη σελίδα sgip.noip.me/?p=main.\n"."Για να γίνει αλλαγή του κωδικού πρόσβασής σας στη σελίδα παρακαλώ πατήστε στον παρακάτω σύνδεσμο:\n "."sgip.noip.me/?p=recover&No=".$random."&email=".$email_reset."\n"."Ευχαριστούμε πολύ.";
				$headers = "From: webmaster@sgip.noip.me" . "\r\n" ;


				mail($to,$subject,$txt,$headers);

			   $sql = "INSERT INTO recover_pass_tsourma (id, email, randomNo) VALUES (:id, :email, :randomNo)";                       
				$stmt = $conn->prepare($sql);                                          
				$stmt->bindParam(':id', $n);       
				$stmt->bindParam(':email', $email_reset); 
				$stmt->bindParam(':randomNo', $random);              
				$stmt->execute(); 
				$send_rec_mail = 1;

				//$to = $email_reset;
				//efoson exei eisaxthei sti lista o random arithmos kai to mail toy user yparxei, tote stelnoume to analogo mail me ti dieuthinsi gia allgi ston xristi.
				

				echo htmlentities($message79, ENT_QUOTES,"utf-8");
       
			} else {
				echo htmlentities($message81, ENT_QUOTES,"utf-8");
			}

?>
