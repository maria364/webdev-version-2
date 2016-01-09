<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                
				<div class="col-lg-6" >
					<div class="intro-text" id="epil-date">
								<p>Επιλέξτε ημερομηνία και ώρα προγραμματισμένης ενεργοποίησης της συσκευής.</p>
								<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
								<div class="input-group">
            						<input  class="form-control" id="daterangepicker" type="text" name="daterangepicker" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM"/>
            						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        						</div>		

									<!-- <input type=submit value="Submit" id="submit-date" onclick="toggle_div('gallery')" style="margin-left:90%" > -->
								<!-- </form> -->
					</div>
				</div>
				<div class="col-lg-6" >
					<div class="scheduling">
								<p>Προσωρινή απενεργοποίηση συστήματος.</p>
								<select class="temp-stop"><option value=''>min</option>
										<option value='30'>30 min</option>
										<option value='60'>60 min</option>
										<option value='90'>90 min</option></select>
									<button id="chose-time"  onclick="procedure('temp-stop')">OK</button>
							
					</div>
					<br>
					<br>
					<img class="img-responsive"  src="img/giphy.gif" width="250px" height="250px"/>
				</div>	
                
            </div>
        </div>
		
	
    </header>
	
	<section id="alarm-settings">
		<div class="container" id="alarm-set">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>IO Settings</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
				<div class="col-sm-6" >	
					<div id="alarm-set">
						<table class="table">
							<tr>
							<td><input type="checkbox" value=""><label id="io-linkage">IO Output linkage</label></td><td></td>
							</tr>
							<tr>
							<td><input type="checkbox" value=""><label id="email-alarm">Email alarm</label></td><td></td>
							</tr>
							<tr>
							<td><input type="checkbox" value=""><label id="ftp-alarm" >FTP alarm</label></td><td></td>
							</tr>
							<tr>
							<td><input type="checkbox" value=""><label id="http-alarm">HTTP alarm</label></td><td></td>
							</tr>
							<br/>
							<tr>
							<td><label>Alarm Interval(Second):</label></td><td><input type="text" value="10"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="ftp-settings">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FTP Settings</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
				<div class="col-sm-6" >	
					<div id="alarm-set">
						<table class="table">
							<tr>
							<td><label>Server: </label></td><td><input type="text" value="ftp.vlsi.gr"></td>
							</tr>
							<tr>
							<td><label>Port(Default 21): </label></td><td><input type="text" value="21"></td>
							</tr>
							<tr>
							<td><label>User: </label></td><td><input type="text" value="ftp"></td>
							</tr>
							<tr>
							<td><label>Password: </label></td><td><input type="password" value=""></td>
							</tr>
							<tr>
							<td><label>Folder: </label></td><td><input type="text" value="/ipcam2"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="http-settings">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>HTTP alarm Settings</h2>
                    <hr class="star-primary">
                </div>
			</div>
            <div class="row">
				<div class="col-sm-6" >	
					<div id="http-set">
						<table class="table">
							<tr>
							<td><label>Url: </label></td><td><input type="text" value="http://vlsi.gr/alarm2.php"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>