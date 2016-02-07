<?php

include('connect.php');
include('lang.gr.php');


error_reporting(E_ALL);
ini_set('display_errors', 1); 

$folder2 = "alert/";
$filetype2 = "*.*";
$files2 = glob($folder2.$filetype2);
$count2 = count($files2); //arxikes eikones fakelou = poses einai
$value = "alert ";

	for(;;){
			$folder2 = "alert/";
			$filetype2 = "*.*";
			$files2 = glob($folder2.$filetype2);
			$count3 = count($files2);

				if(strcmp($count2, $count3) !== 0){
					echo htmlentities($message24, ENT_QUOTES,"utf-8");					
					
					$sql= "SELECT email FROM users_tsourma WHERE sendemail = :sendemail"; 
					$stmt = $conn->prepare($sql);
					$stmt->bindValue(':sendemail', $m=1);
					$stmt->execute();
					$res = $stmt->rowCount();
								
					if ($res >0){

						while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							// echo exec("mail -s 'This is the subject line' ".$row["email"]." < mail.txt");
							echo exec("mpack -s 'Alert Message' /opt/lampp/htdocs/diplwmatiki/t_selida/alert/alert.png ".$row["email"]." -d mail.txt");
						}
					}

																
					$count2 = $count3;
				} else {
					echo htmlentities($message25, ENT_QUOTES,"utf-8");
				}

			sleep(2);




	}

?>
