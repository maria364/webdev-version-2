<?php include 'header.php'; ?>

    <!-- Header -->
    <header>
       <div class="container">
            <div class="row">
				<div class="col-sm-12">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										<option value='25'>25</option>
										<option value='26'>26</option>
										<option value='27'>27</option>
										<option value='28'>28</option>
										<option value='29'>29</option>
										<option value='30'>30</option>
										<option value='31'>31</option>
									</select></td>
									<td><label for="year">Έτος:</label></td>
									<td><input type="text" name="year1" size="4" placeholder="2005" ></td>
								  </tr>
							<tr>
									
									<td><label for="time_from">Ώρα από </label></td>
									<td><select name="hour1" >
										<option value=''>h   </option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										
									</select> :
									<select name="minute1" >
										<option value=''>min </option>
										<option value='00'>00</option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										<option value='25'>25</option>
										<option value='26'>26</option>
										<option value='27'>27</option>
										<option value='28'>28</option>
										<option value='29'>29</option>
										<option value='30'>30</option>
										<option value='31'>31</option>
										<option value='32'>32</option>
										<option value='33'>33</option>
										<option value='34'>34</option>
										<option value='35'>35</option>
										<option value='36'>36</option>
										<option value='37'>37</option>
										<option value='38'>38</option>
										<option value='39'>39</option>
										<option value='40'>40</option>
										<option value='41'>41</option>
										<option value='42'>42</option>
										<option value='43'>43</option>
										<option value='44'>44</option>
										<option value='45'>45</option>
										<option value='46'>46</option>
										<option value='47'>47</option>
										<option value='48'>48</option>
										<option value='49'>49</option>
										<option value='50'>50</option>
										<option value='51'>51</option>
										<option value='52'>52</option>
										<option value='53'>53</option>
										<option value='54'>54</option>
										<option value='55'>55</option>
										<option value='56'>56</option>
										<option value='57'>57</option>
										<option value='58'>58</option>
										<option value='59'>59</option>
										<option value='60'>60</option>
									</select> :
									<select name="second1">
										<option value=''>sec </option>
										<option value='00'>00</option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										<option value='25'>25</option>
										<option value='26'>26</option>
										<option value='27'>27</option>
										<option value='28'>28</option>
										<option value='29'>29</option>
										<option value='30'>30</option>
										<option value='31'>31</option>
										<option value='32'>32</option>
										<option value='33'>33</option>
										<option value='34'>34</option>
										<option value='35'>35</option>
										<option value='36'>36</option>
										<option value='37'>37</option>
										<option value='38'>38</option>
										<option value='39'>39</option>
										<option value='40'>40</option>
										<option value='41'>41</option>
										<option value='42'>42</option>
										<option value='43'>43</option>
										<option value='44'>44</option>
										<option value='45'>45</option>
										<option value='46'>46</option>
										<option value='47'>47</option>
										<option value='48'>48</option>
										<option value='49'>49</option>
										<option value='50'>50</option>
										<option value='51'>51</option>
										<option value='52'>52</option>
										<option value='53'>53</option>
										<option value='54'>54</option>
										<option value='55'>55</option>
										<option value='56'>56</option>
										<option value='57'>57</option>
										<option value='58'>58</option>
										<option value='59'>59</option>
										<option value='60'>60</option>
									</select></td>
									<td><label for="time_to">έως </label></td>
									<td><select name="hour2">
										<option value=''>h   </option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										
									</select> :
									<select name="minute2">
										<option value='' >min </option>
										<option value='00'>00</option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										<option value='25'>25</option>
										<option value='26'>26</option>
										<option value='27'>27</option>
										<option value='28'>28</option>
										<option value='29'>29</option>
										<option value='30'>30</option>
										<option value='31'>31</option>
										<option value='32'>32</option>
										<option value='33'>33</option>
										<option value='34'>34</option>
										<option value='35'>35</option>
										<option value='36'>36</option>
										<option value='37'>37</option>
										<option value='38'>38</option>
										<option value='39'>39</option>
										<option value='40'>40</option>
										<option value='41'>41</option>
										<option value='42'>42</option>
										<option value='43'>43</option>
										<option value='44'>44</option>
										<option value='45'>45</option>
										<option value='46'>46</option>
										<option value='47'>47</option>
										<option value='48'>48</option>
										<option value='49'>49</option>
										<option value='50'>50</option>
										<option value='51'>51</option>
										<option value='52'>52</option>
										<option value='53'>53</option>
										<option value='54'>54</option>
										<option value='55'>55</option>
										<option value='56'>56</option>
										<option value='57'>57</option>
										<option value='58'>58</option>
										<option value='59'>59</option>
										<option value='60'>60</option>
									</select> :
									<select name="second2">
										<option value=''>sec </option>
										<option value='00'>00</option>
										<option value='01'>01</option>
										<option value='02'>02</option>
										<option value='03'>03</option>
										<option value='04'>04</option>
										<option value='05'>05</option>
										<option value='06'>06</option>
										<option value='07'>07</option>
										<option value='08'>08</option>
										<option value='09'>09</option>
										<option value='10'>10</option>
										<option value='11'>11</option>
										<option value='12'>12</option>
										<option value='13'>13</option>
										<option value='14'>14</option>
										<option value='15'>15</option>
										<option value='16'>16</option>
										<option value='17'>17</option>
										<option value='18'>18</option>
										<option value='19'>19</option>
										<option value='20'>20</option>
										<option value='21'>21</option>
										<option value='22'>22</option>
										<option value='23'>23</option>
										<option value='24'>24</option>
										<option value='25'>25</option>
										<option value='26'>26</option>
										<option value='27'>27</option>
										<option value='28'>28</option>
										<option value='29'>29</option>
										<option value='30'>30</option>
										<option value='31'>31</option>
										<option value='32'>32</option>
										<option value='33'>33</option>
										<option value='34'>34</option>
										<option value='35'>35</option>
										<option value='36'>36</option>
										<option value='37'>37</option>
										<option value='38'>38</option>
										<option value='39'>39</option>
										<option value='40'>40</option>
										<option value='41'>41</option>
										<option value='42'>42</option>
										<option value='43'>43</option>
										<option value='44'>44</option>
										<option value='45'>45</option>
										<option value='46'>46</option>
										<option value='47'>47</option>
										<option value='48'>48</option>
										<option value='49'>49</option>
										<option value='50'>50</option>
										<option value='51'>51</option>
										<option value='52'>52</option>
										<option value='53'>53</option>
										<option value='54'>54</option>
										<option value='55'>55</option>
										<option value='56'>56</option>
										<option value='57'>57</option>
										<option value='58'>58</option>
										<option value='59'>59</option>
										<option value='60'>60</option>
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
			echo "month1";
			echo $month1;
			$day1= $_POST['day1'];
			echo "day1";
			echo $day1;
			$year1= $_POST['year1'];
			echo"year1";
			echo $year1;

			$hour1= $_POST['hour1'];
			echo "hour1";
			echo $hour1;
			$minute1= $_POST['minute1'];
			echo "minute1";
			echo $minute1;
			$second1= $_POST['second1'];
			echo"second1";
			echo $second1;

			
			$hour2= $_POST['hour2'];
			echo "hour2";
			echo $hour2;
			$minute2= $_POST['minute2'];
			echo "minute2";
			echo $minute2;
			$second2= $_POST['second2'];
			echo"second2";
			echo $second2;


		//i sunartisi auti pairnei tis times pou exei eisagei o xristis kai psaxnei se olo to fakelo na vrei tin "periodo" twn eikonwn pou zitithike
				find_by_date_and_2times($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1,$hour2,$minute2,$second2);


		} else if (isset($_POST['hour1']) && !empty($_POST['hour1']) && isset($_POST['minute1']) && !empty($_POST['minute1']) && isset($_POST['second1']) && !empty($_POST['second1']) && empty($_POST['hour2']) && empty($_POST['minute2']) && empty($_POST['second2'])) {

			$folder1 = 'img/';
			$filetype1 = '*.*';
			$files1 = glob($folder1.$filetype1);

			$month1= $_POST['month1'];
			echo "month1";
			echo $month1;
			$day1= $_POST['day1'];
			echo "day1";
			echo $day1;
			$year1= $_POST['year1'];
			echo"year1";
			echo $year1;

			$hour1= $_POST['hour1'];
			echo "hour1";
			echo $hour1;
			$minute1= $_POST['minute1'];
			echo "minute1";
			echo $minute1;
			$second1= $_POST['second1'];
			echo"second1";
			echo $second1;

			//ean o xristis eisagei mono tin wra "apo" tote na vriskei tin analogi fwtografia
			find_by_date_and_time($folder1,$filetype1,$files1,$month1,$day1,$year1,$hour1,$minute1,$second1);


		}else { //ean o xristis eisagei mono imeominia kai thelisei na dei oles tis fwtografies pou travixtikan tote
	
		
			$folder1 = 'img/';
			$filetype1 = '*.*';
			$files1 = glob($folder1.$filetype1);

			$month1= $_POST['month1'];
			echo "month1";
			echo $month1;
			$day1= $_POST['day1'];
			echo "day1";
			echo $day1;
			$year1= $_POST['year1'];
			echo"year1";
			echo $year1;
		
			find_by_date($folder1,$filetype1,$files1,$month1,$day1,$year1);
}//end of if-time
		} else {
			echo "You have not selected any date";
		}// end of if-date

//arxiki epeidiksi fwtografiwn parakatw
} else {

			//arxikes_fwtografies();
			
}


		
		
		
		function test_input($data) {		
			$data = htmlspecialchars($data);
			return $data;
		}


		function find_by_date($folder1,$filetype1,$files1,$month1,$day1,$year1){
		
			$varName1 = ''.$month1.''.$day1.''.$year1;
			$date1 = $varName1; //this returns the current date time
			//echo $date1;
			
			//$varName2 = ''.$hour1.''.$minute1.''.$second1;
			//$time1 = $varName2; //this returns the current date time
			//echo $time1;
			
			$count1 = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			$find = 0;
			
			echo '<ul class="images" >';
			
			for ($j = 0; $j < $count1; $j++) {	
				
				substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*fortwnei ola ta onomata tou fakelou kai elegxei kathe fora na vrei an auto pou fortwse einai auto pou theloume*/
				if(stripos($files1[$j], $date1)){
					echo '<li style="text-align:center;display: inline-block;float:left">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" style="width:100px;height:100px;" /></a>';				
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
					echo '<li style="text-align:center;display: inline-block;float:left">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" style="width:100px;height:100px;" /></a>';				
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
					echo '<li style="text-align:center;display: inline-block;float:left">';
					
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" style="width:100px;height:100px;" /></a>';				
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




		function arxikes_fwtografies() {

			echo '<div id="imt">';
			$folder1 = 'img/';
			$filetype1 = '*.*';
			$files1 = glob($folder1.$filetype1);
			$limit = 8; /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
			echo '<ul>';

				for ($j = 0; $j < $limit; $j++) {	
					echo '<li style="text-align:center;display: inline-block;float:left">';
					echo '<a href="'.$files1[$j].'" class="lb_images" ><img src="'.$files1[$j].'" style="width:100px;height:100px;" /></a>';
					echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
					echo '</li>';
				}		
			echo '</ul>';
			echo '</div>';	

		}



		?>


	</div>
    </header>
	
	<?php include 'footer.php'; ?>
