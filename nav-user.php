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
                        <a href="dashboard-user.php"><h4>Αρχική</h4></a>
                    </li>
                    <li class="page-scroll">
                        <a href="streaming-users.php"><h4>Streaming</h4></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>στοιχείων</h4></a> 
						  <ul class="dropdown-menu">
							<li><a href="account.php">Επεξεργασία στοιχείων</a></li>
							<li><a href="insert-photo.php">Εισαγωγή φωτογραφιών</a></li>
							<li><a href="#">Διαχείριση φωτογραφιών</a></li>
						  </ul>
                    </li>
					<li class="page-scroll">
                        <a href="archive.php"><h4>Αρχείο</h4></a>
                    </li>
					
                </ul>
	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
