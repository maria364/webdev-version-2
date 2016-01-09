 <!-- Header -->
    <header>
       <div class="container">
            <div class="row">
				<div class="col-sm-12">
					<form action="?p=archive" method="post">
							<div class="table-responsive">          
							  <table class="table">
								
								<tbody>
								  <tr>
									
									<td><label for="month">Μήνας:</label></td>
									<td><select name="month1" >
										<option value='01'>Ιανουάριος</option>
										<option value='02'>Φεβρουάριος</option>
										<option value='03'>Μάρτιος</option>
										<option value='04'>Απρίλιος</option>
										<option value='05'>Μάιος</option>
										<option value='06'>Ιούνιος</option>
										<option value='07'>Ιούλιος</option>
										<option value='08'>Αύγουστος</option>
										<option value='09'>Σεπτέμβριος</option>
										<option value='10'>Οκτώβριος</option>
										<option value='11'>Νοέμβριος</option>
										<option value='12'>Δεκέμβριος</option>
									</select></td>
									<td><label for="day">Ημέρα:</label></td>
									<td><select name="day1" >
										<option value=''></option>
										<?php
											for($i=00;$i<31;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
									</select></td>
									<td><label for="year">Έτος:</label></td>
									<td><input type="text" name="year1" size="4" placeholder="2005" ></td>
								  </tr>
							<tr>
									
									<td><label for="time_from">Ώρα από </label></td>
									<td><select name="hour1" >
										<option value=''>h   </option>
										<?php
											for($i=00;$i<25;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}											}
										?>
										
									</select> :
									<select name="minute1" >
										<option value=''>min </option>
										<<?php
											for($i=00;$i<61;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
									</select> :
									<select name="second1">
										<option value=''>sec </option>
										<?php
											for($i=00;$i<61;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
									</select></td>
									<td><label for="time_to">έως </label></td>
									<td><select name="hour2">
										<option value=''>h   </option>
										<?php
											for($i=00;$i<25;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
										
									</select> :
									<select name="minute2">
										<option value='' >min </option>
										<?php
											for($i=00;$i<61;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
									</select> :
									<select name="second2">
										<option value=''>sec </option>
										<?php
											for($i=00;$i<61;$i++){
												if($i<10){
													echo "<option value='0".$i."'>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}
										?>
									</select></td>
									
								  </tr>
								</tbody>
							</table>
						</div>
						<input type=submit value="Submit" id="submit-date" onclick="toggle_div('gallery')">
					</form>
               	</div>
            </div>
        </div>
		
		
	<div id="gallery">
		
		<?php
		
		
	$check=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (isset($_POST['month1']) && !empty($_POST['month1']) && isset($_POST['day1']) && !empty($_POST['day1']) && isset($_POST['year1']) && !empty($_POST['year1'])) {
		

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

//arxiki epeidiksi fwtografiwn parakatw
} else {

			arxikes_fwtografies();
			
}


		
		
		
		function test_input($data) {		
			$data = htmlspecialchars($data);
			return $data;
		}


		function find_by_date($folder1,$filetype1,$files1,$month1,$day1,$year1){
		
			$varName1 = "".$month1."".$day1."".$year1;
			$date1 = $varName1; //this returns the current date time
			echo $date1;
			
			//$varName2 = ''.$hour1.''.$minute1.''.$second1;
			//$time1 = $varName2; //this returns the current date time
			//echo $time1;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo "<ul class='images' >";
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $date1)){
					echo "<li id='imagesli'>";
					
					echo "<a href='".$files1[$j]."'class='lb_images' ><img src='".$files1[$j]."' id='imagesarchive'/></a>";				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo "</li>";	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}
			echo "</ul>";
			
			if($find==0){
				echo "This image does not exist!";
			}

		}//end of function find_by_date



		function find_by_date_and_time($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1){

			$varName1 = "".$month1."".$day1."".$year1;
			$date1 = $varName1; //this returns the current date time
			//echo $date1;
			
			$varName2 = "".$hour1.":".$minute1.":".$second1;
			$time1 = $varName2; //this returns the current date time
			//echo $time1;

			$varName3="".$date1."".$time1;
			$whole1=$varName3;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo "<ul class='images' >";
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $whole1)){
					echo "<li id='imagesli'>";
					
					echo "<a href='".$files1[$j]."' class='lb_images' ><img src='".$files1[$j]."' id='imagesarchive' /></a>";				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo "</li>";	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}
			echo "</ul>";
			
			if($find==0){
				echo "This image does not exist!";
			}



		}//end of function find_by_date_and_time

		


		function find_by_date_and_2times($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1,$hour2,$minute2,$second2) 	{

			$varName1 = "".$month1."".$day1."".$year1;
			$date1 = $varName1; //this returns the current date time
			//echo $date1;
			
			$varName2 = "".$hour1.":".$minute1.":".$second1;
			$time1 = $varName2; //this returns the current date time
			//echo $time1;

			$varName3 = "".$hour2.":".$minute2.":".$second2;
			$time2 = $varName3; //this returns the current date time
			//echo $time1;

			$varName3="".$date1."".$time1;
			$arxiki_wra=$varName3;

			$varName4="".$date1."".$time2;
			$teliki_wra=$varName4;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo "<ul class='images' >";

			if($arxiki_wra!= $teliki_wra){

					// echo "Vriskw ton endiameso xrono";
					// prwta ftiaxnw ta deuterolepta
				for($w=$second1;$w<61;$w++){
					$temp_sec=$second1++;
					$var_hour1= "".$hour1.":".$minute1.":".$temp_sec;
					$var_date1="".$date1."".$var_hour1;
					search_photo($folder1,$filetype1,$files1,$count1,$var_date1,$find);
				}

				// echo "<br>";
				// echo "autes einai twn leptwn";
				$var_date1=0;
				for($q=$minute1+1;$q<61;$q++){
					$temp_min=$q;
					for($temp_sec2=0;$temp_sec2<61;$temp_sec2++){
							$var_hour2= "".$hour1.":".$q.":".$temp_sec2;
							$var_date1="".$date1."".$var_hour2;
							// echo $var_date1."<br/>";
							search_photo($folder1,$filetype1,$files1,$count1,$var_date1,$find);
					}
				}

				$var_date1=0;
				for($d=$hour1+1;$d<($hour2+1);$d++){
					if($d<10){
						$temp_hour="0".$d;
					} else {
						$temp_hour=$d;	
					}
					
					for($temp_min2=0;$temp_min2<61;$temp_min2++){
							for($temp_sec3=0;$temp_sec3<61;$temp_sec3++){
									$var_hour3= "".$temp_hour.":".$temp_min2.":".$temp_sec3;
									$var_date1="".$date1."".$var_hour3;
									search_photo($folder1,$filetype1,$files1,$count1,$var_date1,$find);
									// echo $var_date3."<br/>";
									if(($hour2==$temp_hour) && ($minute2==$temp_min2) && ($second2==$temp_sec2)){
										// echo "vrika ta isa";
										break 3; //stin php vazw meta to break ton arithmos oswn for-loops thelw na stamatisw
									}
							}
					}
				}
			}



			//vriskw tin arxiki kai tin teliki fwtografia
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
					if(stripos($files1[$j], $date1) && (stripos($files1[$j], $arxiki_wra) || stripos($files1[$j], $teliki_wra))){
						echo "<li id='imagesli'>";
					
						echo "<a href='".$files1[$j]."' class='lb_images' ><img src='".$files1[$j]."' id='imagesarchive' /></a>";				
						echo substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
						$find=1;
						echo '</li>';
					} 

			}

			echo "</ul>";
			
			if($find==0){
				echo "This image does not exist!";
			}



		}//end of function find_by_date_and_2times




		function arxikes_fwtografies() {

			// echo '<div id="imt">';
			$folder1 = "img/";
			$filetype1 = "*.*";
			$files1 = glob($folder1.$filetype1);
			$limit = 8; /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			echo "<ul>";

				for ($j = 0; $j < $limit; $j++) {	
					echo "<li id='general-images-archive'>";
					echo "<a href='".$files1[$j]."'' class='lb_images' ><img src='".$files1[$j]."'' id='each-general-image' alt='img1'/></a>";
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo "</li>";
				}		
			echo "</ul>";
			// echo '</div>';	

		}


		function search_photo($folder1,$filetype1,$files1,$count1,$var_date1,$find){

			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $var_date1)){

					echo "<li id='imagesli'>";
					
					echo "<a href='".$files1[$j]."' class='lb_images' ><img src='".$files1[$j]."' id='imagesarchive'/></a>";				
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], ".")-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo '</li>';	
					$find=1;											 /*strlen= epistrefei to megethos tou onomatos*/ /*strpos= psaxnei to string poy fortwthike na dei pou emfanizetai gia prwti fora mia leksi. orismata (string,leksi anazitisis)*/
					
				}else{
					$find=$find+0;	
				}		
			}

		}




		?>


	</div>
    </header>