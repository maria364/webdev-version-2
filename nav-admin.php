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
                <a class="home-button" style="margin-top:-30px" href="#page-top"><img class="logo" src="img/logo.png" alt="logo" height="70%" width="70%" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h5 align="right">Καλώς ήλθες, <?php
								echo ' '.$_SESSION['rightname'];
								?> | <a href="#modal-logout" align="right">Αποσύνδεση</a></h5>
				<ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" >
                        <a href="dashboard-admin.php" class="btn btn-primary btn-lg"><h4>Αρχική</h4></a>
                    </li>
                    <li class="page-scroll">
                        <a href="streaming-admin.php" class="btn btn-primary btn-lg"><h4>Streaming</h4></a>
                    </li>
					<li class="page-scroll">
						  <a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>συσκευής</h4></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="io-settings.php">I/O Ρυθμίσεις</a></li>
							<li><a href="prog-settings.php">Προγραμματισμός συσκευής</a></li>
						  </ul>
                    </li>
					<li class="page-scroll">
                        <a href="manual.php" class="btn btn-primary btn-lg"><h4>Χειροκίνητος <br>έλεγχος</h4></a>
						
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
						<a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>χρηστών</h4></a> 
						  <ul class="dropdown-menu" role="menu">
							<li><a href="register.php">Εισαγωγή χρηστών</a></li>
							<li><a href="users-list.php">Επεξεργασία χρηστών</a></li>
							<li><a href="mailinglist.php">Mailing list</a></li>
						  </ul>
                    </li>
					<li class="page-scroll">
                        <a href="archive-admin.php" class="btn btn-primary btn-lg"><h4>Αρχείο</h4></a>
                    </li>
					
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
