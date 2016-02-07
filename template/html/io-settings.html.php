<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <h4>Πατώντας <i>Start</i> ξεκινάει το σύστημα (ενεργοποίηση όπλου και αναγνώριση).</h4><br>
					<h4>Με το πάτημα του κουμπιού <i>Stop</i>  το σύστημα σταματά να ελέγχει το χώρο.</h4> -->
					<p><?php echo htmlentities($message93, ENT_QUOTES,"utf-8") ?> </p>
                    <!-- <form action="socket-cl.php" method="POST"> -->
                    <div id="io-buttons">
                        <ul >
							<li class="start">
								<h3><!-- <a href="#" id="start" > --><button type="button" class="btn btn-success" name="button" id="start-button" value="start" onclick="procedures(this.value)" ><?php echo htmlentities($message95, ENT_QUOTES,"utf-8") ?></button></a></h3>
							</li>
							<li class="delayed-start">
								<h3><!-- <a href="#" id="start" > --><button type="button" class="btn btn-success" name="button" id="delayed-start" > <?php echo htmlentities($message97, ENT_QUOTES,"utf-8") ?></button></a></h3>
							<div id="epilogi1"><h5><?php echo htmlentities($message94, ENT_QUOTES,"utf-8") ?> </h5><select class="delayed-time"><option value=''>min</option>
										<option value='30'>30 min</option>
										<option value='60'>60 min</option>
										<option value='90'>90 min</option></select><button id="chose-time"  onclick="procedures('delayed-start')">OK</button></div>
							</li>
						
							
							<li class="stop">
								<h3><!-- <a href="#"> --><button type="button" class="btn btn-success" name="button"  id="stop-button" value="stop" onclick="procedures(this.value)"><?php echo htmlentities($message96, ENT_QUOTES,"utf-8") ?></button></a></h3>
							</li>
							<li class="delayed-stop">
								<h3><!-- <a href="#"> --><button type="button" class="btn btn-success" name="button" id="delayed-stop" value="delayed-stop"> <?php echo htmlentities($message98, ENT_QUOTES,"utf-8") ?></button></a></h3><div id="epilogi2"><h5><?php echo htmlentities($message99, ENT_QUOTES,"utf-8") ?> </h5><select class="delayed-time2"><option value=''>min</option>
										<option value='30'>30 min</option>
										<option value='60'>60 min</option>
										<option value='90'>90 min</option></select><button id="chose-time"  onclick="procedures('delayed-stop')">OK</button></div>
							</li>
						</ul>
						<ul>
						</ul>
                    </div>
                    <!-- </form> -->
                </div>
				
				<div class="col-lg-6">
					<div class="intro-text" >
						<button id="reboot" class="btn btn-warning"  value="reboot" onclick="reboot"><?php echo htmlentities($message100, ENT_QUOTES,"utf-8") ?></button>					
					</div>
				</div>
			</div>
		<div>
</header>
