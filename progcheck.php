<?php
include('connect.php');

function server_data ($sendval){
			echo "TCP/IP connection client\n";
			
			// $time = "0";
									// $address=gethostbyname($ip);
			$address="ip";
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

										
			$in=$sendval."\r\n";
			// $next=$time."\r\n";
			$out='';
										//$in.="Host: localhost\r\n";
										//$in.="Connection: Close\r\n";
										// $out='';

										//for(;;){
			echo "Sending Http head request...";
			// socket_write($sock,$next,strlen($next));
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


for(;;){			

//sti stili iodevice exoume : 0=diergasies pou de perimenoun, 1=diergasies pou exoun ksekinisei, 2=diergasies pou exoun stamatisei
//Otan kleisei i suskeui totetha diagrafetei grammi automata

	date_default_timezone_set('Europe/Athens');

	$todaysdate = date("m/d/Y");
	$todaystime = date("H:i"); //me kefalaio H =24wro, me mikro h=12wro

	// echo $todaysdate;
	// echo $todaystime;			
					$sql = $conn->prepare("SELECT * FROM `schedule` WHERE `StartDate` = :todaysdate AND `StartTime` = :todaystime");
					$sql->bindValue(':todaysdate', $todaysdate);
					$sql->bindValue(':todaystime', $todaystime);
					$sql->execute();
					$res = $sql->rowCount();
								
					if ($res >0){

						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							//echo $row["email"];
							$id = $row["id"];
							if ($row["iodevice"] == 0){
								echo "To sistima sas tha ksekinisei amesws";
								$msql = "UPDATE schedule SET iodevice ='1' WHERE id='$id'";
								$stmt = $conn->prepare($msql);
								$stmt->execute();
								$stmt->rowCount();

								$sendval = "start";
							server_data($sendval);
							} else {
							echo "The device is already open";
							}
						}
						//steile start sto socket-cl.php
						 // echo '<script> sentvalueToSocket("start"); </script>';
						
						

					} else {
							echo "Η σημερινή ημερομηνία και ώρα δεν έχουν βρεθεί στη βάση δεδομένων";
							// echo "Σημερινή ημερομηνία ".date("d/m/Y");

							// echo "Τωρινή ώρα ".$todaystime;

					}

					//gia na stamatisei to sustima
					$sql = $conn->prepare("SELECT * FROM `schedule` WHERE `EndDate` = :todaysdate AND `EndTime` = :todaystime");
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

								$sendval = "stop";
							server_data($sendval);
							} else {
							echo "The device has already stoped";
							}
						}
						// echo '<script> sentvalueToSocket("stop"); </script>';
						
					} else {
							echo "Η σημερινή ημερομηνία και ώρα δεν έχουν βρεθεί στη βάση δεδομένων";
							// echo "Σημερινή ημερομηνία ".date("d/m/Y");

							// echo "Τωρινή ώρα ".$todaystime;

					}



		

		sleep(10);//xronos se sec

					//oses diergasies einai kleistes diegrapse tes. Efoson exoun kleisei simainei oti den tha ksekinisoun ksana.
					 $first = "DELETE FROM schedule WHERE iodevice='2'";
					 $conn->exec($first);
 }																
			


?>
