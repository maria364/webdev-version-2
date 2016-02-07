<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="home-button" style="margin-top:-30px" href="#page-top"><img class="logo" src="img/logo.png" alt="logo"  ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h5 align="right"><?php echo htmlentities($message31, ENT_QUOTES,"utf-8").' '.htmlentities($_SESSION['rightname'], ENT_QUOTES,"utf-8");
								?> | <span id="logout_btn" style="cursor: pointer" align="right"><?php echo htmlentities($message117, ENT_QUOTES,"utf-8") ?></span></h5>
				<ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" >
                        <a href="?p=dashboard" class="btn btn-primary btn-lg"><h4><?php echo htmlentities($message114, ENT_QUOTES,"utf-8") ?></h4></a>
                    </li>
                    <li class="page-scroll">
                        <a href="?p=streaming" class="btn btn-primary btn-lg"><h4><?php echo htmlentities($message115, ENT_QUOTES,"utf-8") ?></h4></a>
                    </li>
					<li class="page-scroll">
						  <a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4><?php echo htmlentities($message118, ENT_QUOTES,"utf-8") ?> <br><?php echo htmlentities($message119, ENT_QUOTES,"utf-8") ?></h4></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="?p=io-settings"><?php echo htmlentities($message120, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=prog-settings" type="button" id="progr-susk"><?php echo htmlentities($message121, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=prog-settings#alarm-settings" id="alarmset"><?php echo htmlentities($message122, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=prog-settings#ftp-settings" id="alarmset"><?php echo htmlentities($message123, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=prog-settings#http-settings" id="alarmset"><?php echo htmlentities($message124, ENT_QUOTES,"utf-8") ?></a></li>
						  </ul>
                    </li>
					<li class="page-scroll">
                        <a href="?p=manual" class="btn btn-primary btn-lg"><h4><?php echo htmlentities($message125, ENT_QUOTES,"utf-8") ?> <br><?php echo htmlentities($message126, ENT_QUOTES,"utf-8") ?></h4></a>
						
                    </li>
					<!--<li class="page-scroll">-->
						<!--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>φωτογραφιών</h4>-->
						 <!-- <span class="caret"></span></button>-->
						<!--<a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>φωτογραφιών</h4></a>  -->
						 <!-- <ul class="dropdown-menu" role="menu">-->
							<!--<li><a href="insert-photo.php">Εισαγωγή φωτογραφιών</a></li>-->
							<!--<li><a href="users-list.php">Επεξεργασία φωτογραφιών</a></li>-->
						<!--  </ul>-->
					<!--</li>-->
                    <li class="page-scroll">
                        <!--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Χρήστες <br>συστήματος</h4>
						  <span class="caret"></span></button>-->
						<a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4><?php echo htmlentities($message118, ENT_QUOTES,"utf-8") ?> <br><?php echo htmlentities($message127, ENT_QUOTES,"utf-8") ?></h4></a> 
						  <ul class="dropdown-menu" role="menu">
							<li><a href="?p=register"><?php echo htmlentities($message128, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=users-list"><?php echo htmlentities($message129, ENT_QUOTES,"utf-8") ?></a></li>
							<li><a href="?p=mailinglist"><?php echo htmlentities($message130, ENT_QUOTES,"utf-8") ?></a></li>
						  </ul>
                    </li>
					<li class="page-scroll">
                        <a href="?p=archive" class="btn btn-primary btn-lg"><h4><?php echo htmlentities($message116, ENT_QUOTES,"utf-8") ?></h4></a>
                    </li>
					
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

