<?php
// session_start();
/* echo 'Welcome '.$_SESSION['rightname'];*/
// if(!isset($_SESSION['rightname'])) 
//       header("Location: http://localhost/diplwmatiki/t_selida/?p=main");

// include('connect.php');

			$stmt = $conn->prepare("SELECT  `identity` FROM `users` WHERE `username`= :username ");
			$stmt->bindValue(':username', $_SESSION['rightname']); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
			$stmt->execute();
			// set the resulting array to associative
			$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
			//echo $row; 
			    
			if ( $res== 1 ) {

			    $row = $stmt->fetch(PDO::FETCH_ASSOC);
			    /*εδώ βάζουμε το username για το session. το username που έχει εισάγει ο χρήστης.*/ 
			    $val=$row['identity'];
			    //efoson exei pistopoiithei oti o xristis uparxei, zitame na paroume apo ti vasi tin identity tou gia na elenxthei se poia katigoria anoikei (admin/user), wste na tou anoiksei to katallilo dashboard
			    
			    
			        if ( $val == 1) {
			            $type="admin";          
			        } else if ($row['identity'] ==0) {
			            $type="user";
			        }
			}
		
?>

<script type="text/javascript">
	
</script>