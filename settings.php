<?php include 'header.php'; ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Πατώντας <i>Start</i> ξεκινάει το σύστημα (ενεργοποίηση όλου και αναγνώριση).</h4><br>
					<h4>Με το πάτημα του κουμπιού <i>Stop</i> όλο το σύστημα σταματά να ελέγχει το χώρο.</h4>
                    <div class="intro-text">
                        <ul >
							<li class="start">
								<a href="exec.php" id="start" ><button type="button" class="btn btn-success" style="margin-right:90%;margin-top:-50%">Start</button></a>
							</li>
							<li class="stop">
								<h3><a href="streaming-admin.php"><button type="button" class="btn btn-success" style="margin-right:90%;margin-top:-50%">Stop</button></a>
							</li>
						</ul>
                    </div>
                </div>
				
				<div class="col-lg-8" style="background-color:#fff">
					<div class="intro-text" >
								<h4>Επιλέξτε ημερομηνία και ώρα προγραμματισμένης ενεργοποίησης της συσκευής.</h4><br>
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
										<div class="table-responsive">          
										  <table class="table" width="100%">
											
											<tbody>
											  	<tr>									
													<td><label for="month">Μήνας:</label></td>
													<td><select name="month1" >
														<option value='01'>Ιανουάριος</option>
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
													<td><label for="month">Ημέρα:</label></td>
													<td><select name="month1" >
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
													<td><label for="month">Έτος:</label></td>
													<td><input type="text" name="year1" size="4" placeholder="2005" ></td>
											  </tr>
											  <tr>
												<td><label for="year">Ώρα έναρξης </label></td>
												<td><select name="hour1" >
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
												<select name="second1" >
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
												<td></td>
												<td><label for="year">λήξη </label></td>
												<td><select name="hour2" >
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
												<select name="minute2" >
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
												<select name="second2" >
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
									<input type=submit value="Submit" id="submit-date" onclick="toggle_div('gallery')" style="margin-left:90%" >
							</tbody>
						</form>
					</div>
					
					<div class="scheduling" style="background-color:#fff">
								<h4 align="left">Προσωρινή απενεργοποίηση συστήματος.</h4><br>
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
										<div class="table-responsive">          
										  <table class="table"  width="100%">
											
											<tbody>
												  <tr>
												<td><label for="year">Ώρα έναρξης </label></td>
												<td><select name="hour3" >
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
												<select name="minute3" >
													<option value='01'>00</option>
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
												<select name="second3" >
													<option value='01'>00</option>
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
									<input type=submit value="Submit" id="submit-date" onclick="toggle_div('gallery')" align="right" style="margin-left:90%">
							</tbody>
						</form>
					</div>
					
					
                </div>
            </div>
        </div>
		
	
    </header>
	
	<section>
			
	</section>
	
	
<?php include 'footer.php'; ?>