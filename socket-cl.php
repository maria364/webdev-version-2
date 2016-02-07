<?php
// error_reporting(E_ALL);

include('connect.php');
include('lang.gr.php');

error_reporting(E_ALL);
ini_set('display_errors', 1); 
// session_start();
// $result1 = 1; //tin arxikopoioume me 1 wste na min epikoinwnei me to server se periptwsi pou den exei eisaxthei kapoia imerominia i kati den leitourgei swsta.
$result1=null;
function check_start_date($conn){ //stis sunartiseis pou xrisimopoieis mesa sundeseis me ti vasi, prepei na pernaei to $conn san orisma tin klisi tis sunartisis
	date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	// echo $todaysdate;
	// echo $todaystime;
					$quest = "SELECT * FROM schedule_tsourma WHERE startdate = :todaysdate AND starttime = :todaystime";			
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
								echo $message40;
								$c=1;
								$msql = "UPDATE schedule_tsourma SET iodevice =:iodevice WHERE id=:id";
								$stmt = $conn->prepare($msql);
								$stmt->bindParam(':iodevice', $c, PDO::PARAM_INT);
								$stmt->bindParam(':id', $id, PDO::PARAM_STR);
								$stmt->execute();
								$stmt->rowCount();
								$result2 = 0;
							} else {
								// echo $message41;
								$result2 = 1;
							}
						}
						//steile start sto socket-cl.php
						 // echo '<script> sentvalueToSocket("start"); </script>';
						
						

					} else if ($res == 0){
						$l=1;
						$g=0;
						$f=null;
						$h=0;

						$sql = "INSERT INTO schedule_tsourma (id, iodevice, startdate, starttime, enddate, endtime) VALUES (:id, :iodevice, :startdate, :starttime, :enddate, :endtime)";
						$stmt = $conn->prepare($sql);                                           
						$stmt->bindParam(':id',$f, PDO::PARAM_INT);
						$stmt->bindParam(':iodevice', $l, PDO::PARAM_INT);
						$stmt->bindParam(':startdate', $todaysdate, PDO::PARAM_STR);
						$stmt->bindParam(':starttime', $todaystime, PDO::PARAM_STR);
						$stmt->bindParam(':enddate', $g, PDO::PARAM_INT);
						$stmt->bindParam(':endtime', $h, PDO::PARAM_INT);       
						$stmt->execute();
						// if ($stmt->execute()) {
						// 	echo $message51;
							
						// } else {
						// 	echo $message52;
						// }
						
						$result2 = 0;
					}

					if($result2 ==1){
						// echo $message41;
						$result1 = $result2;
					} else {
						$result1 = $result2;
					}
		return $result1;
}


function check_stop_date($conn){
	date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

					$sq = "SELECT * FROM schedule_tsourma";
					$sql = $conn->prepare($sq); 
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
								$m=2;

								$msql = "UPDATE schedule_tsourma SET iodevice =:iodevice WHERE id=:id";
								$stmt = $conn->prepare($msql);
								$stmt->bindParam(':iodevice', $m);
								$stmt->bindParam(':id', $id);
								$stmt->execute();
								$stmt->rowCount();
								$result2 = 0;
								
							} else {
							$result2 = 1;
							}
						}
						// echo '<script> sentvalueToSocket("stop"); </script>';
						
					}

					if($result2 ==1){
						// echo $message44;
						$result1 = $result2;
					} else {
						// echo $message43;
						$result1 = $result2;
					}
	return $result1;
}



function check_system($conn, $time){

date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	$sql = $conn->prepare("SELECT * FROM schedule_tsourma"); //elegxw mono ean to sustima einai allou anoixto giati auto mono me endiaferei. Thelw mono na to apenergopoiisw gia ligo xrono
					$sql->execute();
					$res = $sql->rowCount();
								
					if ($res >0){

						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							$id = $row["id"];
							if ($row["iodevice"] == 1){
								echo $meggage53."".$time."".$message54;
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
								$k=0;
								
								$msql = "UPDATE schedule_tsourma SET iodevice =:iodevice, StartTime = :finaltime WHERE id=:id";
								$stmt = $conn->prepare($msql);
								$stmt->bindParam(':iodevice', $k);
								$stmt->bindParam(':finaltime', $finaltime);
								$stmt->bindParam(':id', $id);
								$stmt->execute();
								$stmt->rowCount();
								$result1 = 0;
								
							} else {
							$result1 = 1;
							}
						}
						// echo '<script> sentvalueToSocket("stop"); </script>';
						
					}

					
		return $result1;
}

//MAIN

	$control = filter_var($_POST['button'], FILTER_SANITIZE_STRING);//mas deixnei poio koumpi exei patithei, to start/stop
	// $result1 = 1;

	if ($control=="start")
	{
		echo $message56;
		$time = 0; //bazw 0 sti metabliti gia na deiksw oti o xronos ekkinisis einai o twrinos
		$return1 = check_start_date($conn);
		// echo $return1;
		if($result1 ==1){
			echo $message41;
		}
	} else if ($control=="delayed-start"){
		$time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
		
		if( $time =="" ) {
			echo $message57;
			$result1 = 1;
		} else{
			echo $message58."".$time."".$message54;
			//enimerwnw ton pinaka schedule gia na kserw oti i suskeui einai idi anoiti i na tin anoiksei o xristis apo dw. 
			$result1 = check_start_date($conn);
			echo $result1;
		}
	}else if($control=="stop") 
	{
		$time=0;
		$result1 = check_stop_date($conn);
		if($result1 ==1){
			echo $message44;
		} else {
			echo $message59;
			echo $message43;
		}

	} else if ($control=="delayed-stop"){
		$time =filter_var($_POST['time'], FILTER_SANITIZE_STRING);
		
		// echo "i wra einai" .$time;
		if( $time =="" ) {
			echo $message57;
			$result1 = 1;
		} else{
			
			$result1 = check_stop_date($conn);
			if($result1 ==1){
				echo $message44;
			} else {
				echo $message60."".$time."".$message54;
			}
		}

	} else if ($control=="temp-stop"){ 
		$time = filter_var($_POST['time'], FILTER_VALIDATE_INT);
		
		// echo "i wra einai" .$time;
		if( $time =="" ) {
			echo $message57;
			$result1 = 1;
		} else{
			$result1 = check_system($conn, $time);
			// echo $result1;
			if($result1 ==1){
				echo $message55;
			} 
			
			$control = "stop"; //stelnw stop sto server giati thelw ekeini ti stigmi na kleisei i suskeui. tha anoiksei meta apo $time lepta pou exei orisei o xristis.
			$time = 0;
		}
	}
	// }
if ($result1 == 0){	
// //ksekina i sundesi client me server mevasi ta stoixeia pou exoun dothei parapanw apo to xristi
	echo $message32;
	
	// $address=gethostbyname($ip);
	$address="127.0.0.1";
	$service_port=7777;

		$sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

		if($sock===false)
		{
			echo $message33."" . socket_strerror(socket_last_error()) . "\n";
		}else{

			echo $message34;
		}

		echo $message35."" . $address."".$message61."".$service_port."...\n";
		$result=socket_connect($sock,$address,$service_port);

		if($result===false)
		{
			die( $message36."" .socket_strerror(socket_last_error($sock)) . "\n");
		}else {
			echo $message37;	
		}

		$next=$time."\r\n";
		$in=$control."\r\n";
		$out='';
		//$in.="Host: localhost\r\n";
		//$in.="Connection: Close\r\n";
		// $out='';

		//for(;;){
		echo $message38;
		socket_write($sock,$next,strlen($next));
		echo $message62;
		socket_write($sock,$in,strlen($in));
		echo $message39;
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
