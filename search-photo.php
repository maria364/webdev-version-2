<?php
		
		// echo "mpika sto form";
		$startdate = $_POST['start_date'];
		$enddate = $_POST['stop_date'];

		if (isset($_POST['start_date']) && !empty($_POST['start_date']) && isset($_POST['stop_date']) && !empty($_POST['stop_date']) ) {
			
			echo "exw tis imerominies";




				if (isset($_POST['hour1']) && !empty($_POST['hour1']) && isset($_POST['minute1']) && !empty($_POST['minute1']) && isset($_POST['second1']) && !empty($_POST['second1']) && isset($_POST['hour2']) && !empty($_POST['hour2']) && isset($_POST['minute2']) && !empty($_POST['minute2']) && isset($_POST['second2']) && !empty($_POST['second2'])) {


						$folder1 = 'img/';
						$filetype1 = '*.*';
						$files1 = glob($folder1.$filetype1);

						$month1= $_POST['month1'];
						echo "month";
						echo $month1;
						$day1= $_POST['day1'];
						echo "day";
						echo $day1;
						$year1= $_POST['year1'];
						echo"year";
						echo $year1;

						$hour1= $_POST['hour1'];
						echo "hour";
						echo $hour1;
						$minute1= $_POST['minute1'];
						echo "minute";
						echo $minute1;
						$second1= $_POST['second1'];
						echo"second";
						echo $second1;

						
						$hour2= $_POST['hour2'];
						echo "hour";
						echo $hour2;
						$minute2= $_POST['minute2'];
						echo "minute";
						echo $minute2;
						$second2= $_POST['second2'];
						echo"second";
						echo $second2;


					//i sunartisi auti pairnei tis times pou exei eisagei o xristis kai psaxnei se olo to fakelo na vrei tin "periodo" twn eikonwn pou zitithike
							find_by_date_and_2times($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1,$hour2,$minute2,$second2);


				} else if (isset($_POST['hour1']) && !empty($_POST['hour1']) && isset($_POST['minute1']) && !empty($_POST['minute1']) && isset($_POST['second1']) && !empty($_POST['second1']) && empty($_POST['hour2']) && empty($_POST['minute2']) && empty($_POST['second2'])) {

						$folder1 = 'img/';
						$filetype1 = '*.*';
						$files1 = glob($folder1.$filetype1);

						$month1= $_POST['month1'];
						echo "month";
						echo $month1;
						$day1= $_POST['day1'];
						echo "day";
						echo $day1;
						$year1= $_POST['year1'];
						echo"year";
						echo $year1;

						$hour1= $_POST['hour1'];
						echo "hour";
						echo $hour1;
						$minute1= $_POST['minute1'];
						echo "minute";
						echo $minute1;
						$second1= $_POST['second1'];
						echo"second";
						echo $second1;

						//ean o xristis eisagei mono tin wra "apo" tote na vriskei tin analogi fwtografia
						find_by_date_and_time($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1);


				}else { //ean o xristis eisagei mono imeominia kai thelisei na dei oles tis fwtografies pou travixtikan tote
				
					
						$folder1 = 'img/';
						$filetype1 = '*.*';
						$files1 = glob($folder1.$filetype1);

						$month1= $_POST['month1'];
						echo "month";
						echo $month1;
						$day1= $_POST['day1'];
						echo "day";
						echo $day1;
						$year1= $_POST['year1'];
						echo"year";
						echo $year1;
					
						find_by_date($folder1,$filetype1,$files1,$month1,$day1,$year1);
				}//end of if-time
		} else {
			echo "You have not selected any date";
		}// end of if-date

		
		
		
		function test_input($data) {		
			$data = htmlspecialchars($data);
			return $data;
		}


		function find_by_date($folder1,$filetype1,$files1,$month1,$day1,$year1){
		
			$varName1 = ''.$month1.''.$day1.''.$year1;
			$date1 = $varName1; //this returns the current date time
			echo $date1;
			
			//$varName2 = ''.$hour1.''.$minute1.''.$second1;
			//$time1 = $varName2; //this returns the current date time
			//echo $time1;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo '<ul class="images" >';
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $date1)){
					echo '<li id="find-by-date-images">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" id="each-image-find-by-date" /></a>';				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo '</li>';	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}
			echo '</ul>';
			
			if($find==0){
				echo "This image does not exist!";
			}

		}//end of function find_by_date



		function find_by_date_and_time($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1){

			$varName1 = ''.$month1.''.$day1.''.$year1;
			$date1 = $varName1; //this returns the current date time
			//echo $date1;
			
			$varName2 = ''.$hour1.':'.$minute1.':'.$second1;
			$time1 = $varName2; //this returns the current date time
			//echo $time1;

			$varName3=''.$date1.''.$time1;
			$whole1=$varName3;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo '<ul class="images" >';
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $whole1)){
					echo '<li id="images-find-by-date-and-time">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" id="each-image-find-by-date-and-time" /></a>';				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo '</li>';	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}
			echo '</ul>';
			
			if($find==0){
				echo "This image does not exist!";
			}



		}//end of function find_by_date_and_time

		


		function find_by_date_and_2times($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1,$hour2,$minute2,$second2) 	{

			$varName1 = ''.$month1.''.$day1.''.$year1;
			$date1 = $varName1; //this returns the current date time
			//echo $date1;
			
			$varName2 = ''.$hour1.':'.$minute1.':'.$second1;
			$time1 = $varName2; //this returns the current date time
			//echo $time1;

			$varName3 = ''.$hour2.':'.$minute2.':'.$second2;
			$time2 = $varName3; //this returns the current date time
			//echo $time1;

			$varName3=''.$date1.''.$time1;
			$arxiki_wra=$varName3;

			$varName4=''.$date1.''.$time2;
			$teliki_wra=$varName4;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo '<ul class="images" >';
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $arxiki_wra)){
					echo '<li id="images-find-by-date-and-2times">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" id="each-image-find-by-date-and-2times" /></a>';				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo '</li>';	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}
			echo '</ul>';
			
			if($find==0){
				echo "This image does not exist!";
			}



		}//end of function find_by_date_and_2times




		// function arxikes_fwtografies() {


		// }



		?>
