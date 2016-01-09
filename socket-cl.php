<?php
// error_reporting(E_ALL);

include('connect.php');
// session_start();

$result1 = 0; //tin arxikopoioume me 1 wste na min epikoinwnei me to server se periptwsi pou den exei eisaxthei kapoia imerominia i kati den leitourgei swsta.

function check_start_date($conn, $result1){ //stis sunartiseis pou xrisimopoieis mesa sundeseis me ti vasi, prepei na pernaei to $conn san orisma tin klisi tis sunartisis
	date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	// echo $todaysdate;
	// echo $todaystime;
					$quest = "SELECT * FROM `schedule` WHERE `StartDate` = :todaysdate AND `StartTime` = :todaystime";			
					$el = $conn->prepare($quest);
					//var_dump($conn);
					$el->bindValue(':todaysdate', $todaysdate);
					$el->bindValue(':todaystime', $todaystime);
					$el->execute();
					$res = $el->rowCount();
								
					if ($res >0){

						while($row = $el->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							$id = $row["id"];
							if ($row["iodevice"] == 0){
								echo "To sistima sas tha ksekinisei amesws";
								$msql = "UPDATE schedule SET iodevice ='1' WHERE id='$id'";
								$stmt = $conn->prepare($msql);
								$stmt->execute();
								$stmt->rowCount();
								$result1 = 0;
							} else {
								echo "The device is already open";
								$result1 = 1;
							}
						}
						//steile start sto socket-cl.php
						 // echo '<script> sentvalueToSocket("start"); </script>';
						
						

					} else if ($res == 0){
						$sql = "INSERT INTO schedule (id, iodevice, StartDate, StartTime, EndDate, EndTime) VALUES ('', '1', '$todaysdate', '$todaystime', '', '')";
						if ($conn->exec($sql)) {
							echo "Η ημερομηνία εισήχθη επιτυχώς!";
							
						} else {
							echo "Αποτυχία εισαγωγής Ημερομηνίας.. ";
						}
						
						$result1 = 0;
					}




}

function check_stop_date($conn, $result2){
	date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	$sql = $conn->prepare("SELECT * FROM `schedule`"); 
	//WHERE `EndDate` = :todaysdate AND `EndTime` = :todaystime");
					$sql->bindValue(':todaysdate', $todaysdate);
					$sql->bindValue(':todaystime', $todaystime);
					$sql->execute();
					$res = $sql->rowCount();
								
					if ($res >0){

						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							$id = $row["id"];
							if ($row["iodevice"] == 1){
								echo "To sistima sas tha stmatisei amesws";
								$msql = "UPDATE schedule SET iodevice ='2' WHERE id='$id'";
								$stmt = $conn->prepare($msql);
								$stmt->execute();
								$stmt->rowCount();
								$result1 = 0;
								
							} else {
							echo "The device has already stoped";
							$result1 = 1;
							}
						}
						// echo '<script> sentvalueToSocket("stop"); </script>';
						
					}

}



function check_system($conn, $time, $result1){

date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	$sql = $conn->prepare("SELECT * FROM `schedule`"); //elegxw mono ean to sustima einai allou anoixto giati auto mono me endiaferei. Thelw mono na to apenergopoiisw gia ligo xrono
					$sql->execute();
					$res = $sql->rowCount();
								
					if ($res >0){

						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							$id = $row["id"];
							if ($row["iodevice"] == 1){
								echo "Το σύστημά σας θα απενεργοποιηθεί για ".$time." λεπτά.";
								$varmin = date("i");
								$varhour = date("H");
								if ($time == 30){    //case1: periptwsi epilogis diarkeias apenergopoiisis 30min
									$finalmin = $varmin + $time;
									$finalhour = $varhour;
									if ($finalmin >60){
										$finalhour = $varhour +1;
										$finalmin = (($varmin + 30) - 60);
										if($finalhour >24){
											$finalhour = $finalhour - 24;
										} 
									} 
								}

								if ($time == 60){
									$finalhour = $varhour + 1;
									if($finalhour > 24){
										$finalhour = $finalhour - 24;
									}
								}


								if ($time == 90){
									$finalhour = $varhour + 1;
									if($finalhour > 24){
										$finalhour = $finalhour - 24;
									}

									$finalmin = $varmin + 30;
									if ($finalmin >60){
										$finalhour = $finalhour +1;
										$finalmin = (($varmin + 30) - 60);
										if($finalhour >24){
											$finalhour = $finalhour - 24;
										} 
									} 
								}

								$temp_time = $finalhour.":".$finalmin;
								$finaltime = $temp_time;
								$msql = "UPDATE schedule SET iodevice ='0', StartTime = '$finaltime' WHERE id='$id'";
								$stmt = $conn->prepare($msql);
								$stmt->execute();
								$stmt->rowCount();
								$result1 = 0;
								
							} else {
							echo "Η συσκευή δεν είναι ανοιχτή";
							$result1 = 1;
							}
						}
						// echo '<script> sentvalueToSocket("stop"); </script>';
						
					} 
}


	$control = $_POST['button'];//mas deixnei poio koumpi exei patithei, to start/stop
	

	if ($control=="start")
	{
		echo "Επιλέξατε να ξεκινήσει αμέσως η εφαρμογή τοπρόγραμμα αναγνώρισης μαζί με το όπλο σε χρόνο \n";
		$time = 0; //bazw 0 sti metabliti gia na deiksw oti o xronos ekkinisis einai o twrinos
		check_start_date($conn, $result1);
	} else if ($control=="delayed-start"){
		$time = $_POST['time'];
		if( $time =="" ) {
			echo ("Δεν έχετε επιλέξει κάποια ώρα.");
		} else{
			echo "Επιλέξατε να ξεκινήσει η εφαρμογή μετά από ".$time." λεπτά.";
			//enimerwnw ton pinaka schedule gia na kserw oti i suskeui einai idi anoiti i na tin anoiksei o xristis apo dw. 
			check_start_date($conn, $result1);
		}
	}else if($control=="stop") 
	{
		echo "Επιλέξατε να σταματήσει το πρόγραμμα αναγνώρισης\n";
		$time=0;
		check_stop_date($conn, $result1);
	} else if ($control=="delayed-stop"){
		$time = $_POST['time'];
		// echo "i wra einai" .$time;
		if( $time =="" ) {
			echo ("Δεν έχετε επιλέξει κάποια ώρα.");
		} else{
			echo "Επιλέξατε να σταματήσει η εφαρμογή μετά από ".$time." λεπτά.";
			check_stop_date($conn, $result1);
		}

	} else if ($control=="temp-stop"){ 
		$time = $_POST['time'];
		// echo "i wra einai" .$time;
		if( $time =="" ) {
			echo ("Δεν έχετε επιλέξει κάποια ώρα.");
		} else{
			check_system($conn, $time, $result1);
			$control = "stop"; //stelnw stop sto server giati thelw ekeini ti stigmi na kleisei i suskeui. tha anoiksei meta apo $time lepta pou exei orisei o xristis.
			$time = 0;
		}
	}

	// }
if ($result1 == 0){	
// //ksekina i sundesi client me server mevasi ta stoixeia pou exoun dothei parapanw apo to xristi
	echo "TCP/IP connection client\n";
	
	// $address=gethostbyname($ip);
	$address="127.0.0.1";
	$service_port=7777;

		$sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

		if($sock===false)
		{
			echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
		}else{

			echo "OK. socket created\n";
		}

		echo "Attempting to connect to '$address' on port '$service_port'...\n";
		$result=socket_connect($sock,$address,$service_port);

		if($result===false)
		{
			die( "socket_connect() failed: reason: " .socket_strerror(socket_last_error($sock)) . "\n");
		}else {
			echo "ok. client connected\n";	
		}

		$next=$time."\r\n";
		$in=$control."\r\n";
		$out='';
		//$in.="Host: localhost\r\n";
		//$in.="Connection: Close\r\n";
		// $out='';

		//for(;;){
		echo "Sending Http head request...";
		socket_write($sock,$next,strlen($next));
		echo "ok.\n";
		socket_write($sock,$in,strlen($in));
		echo "readingresponse: \n\n";
		//while($out=socket_read($sock,2048)){ //ekleine ti sundesi kathe fora pou ekleine kai o server, oxi mono tou me to pou dteilei-lavei dedomena
		//	echo $out;
		//}
		$out=socket_read($sock,2048);
			echo $out;
		

		//}while(true);

socket_close($sock);
}

// }
?>
