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
                <a class="home-button"  href="#page-top"><img class="logo" src="img/logo.png" alt="logo" height="70%" width="70%" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h5 align="right">Καλώς ήλθες, <?php
								echo ' '.$_SESSION['rightname'];
								?> | <span id="logout_btn"  align="right">Αποσύνδεση</span></h5>
				<ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" >
                        <a href="?p=dashboard" class="btn btn-primary btn-lg"><h4>Αρχική</h4></a>
                    </li>
                    <li class="page-scroll">
                       <a href="?p=streaming" class="btn btn-primary btn-lg"><h4>Streaming</h4></a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><h4>Διαχείριση <br>στοιχείων</h4></a> 
						  <ul class="dropdown-menu">
							<li><a href="?p=account">Επεξεργασία στοιχείων</a></li>
							<li><a href="?p=insert-photo">Εισαγωγή φωτογραφιών</a></li>
							<li><a href="?p=handle-photo">Διαχείριση φωτογραφιών</a></li>
						  </ul>
                    </li> -->
					<li class="page-scroll">
                         <a href="?p=archive" class="btn btn-primary btn-lg"><h4>Αρχείο</h4></a>
                    </li>
					
                </ul>
	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
