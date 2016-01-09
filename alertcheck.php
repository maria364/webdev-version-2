
<?php

include('connect.php');
	// for ($s=0;$s<10;$s++){

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
					echo "Entopistike kindinos\n";					
					
					$sql = $conn->prepare("SELECT `email` FROM `users` WHERE `sendemail` = :sendemail");
					$sql->bindValue(':sendemail', 1);
					$sql->execute();
					$res = $sql->rowCount();
								
					if ($res >0){

						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							// echo exec("mail -s 'This is the subject line' ".$row["email"]." < mail.txt");
							echo exec("mpack -s 'Alert Message' /opt/lampp/htdocs/diplwmatiki/t_selida/alert/alert.png ".$row["email"]." -d mail.txt");
						}
					}

																
					$count2 = $count3;
				} else {
					echo "Den parousiastike kati akomi\n";
				}

			sleep(2);




	}

?>