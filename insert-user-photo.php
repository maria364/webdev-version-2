
<?php include 'header.php';
echo $_SESSION['user_edit'];
/*$usname = mysql_real_escape_string($_POST['username']); /*pairnw to username gia na vrw se poion fakelo tha anevoun oi fwtografies*/
 ?>

    <!-- Header -->
    <header>
      <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
				
					<!--<form class="in-photo" action="</*?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?*/>" method="post" enctype="multipart/form-data">-->
					<form class="in-photo" action="in-photo.php" method="post" enctype="multipart/form-data">
						<h4 style="float:left;">Επιλέξτε τη φωτογραφία που θέλετε να ανεβάσετε:</h4></br>
						<br/>
						<br/>
						<div class="col-lg-5"><input type="file" name="fileToUpload" id="fileToUpload"></div>
						<div class="col-lg-5"><input type="submit" value="Upload Image" name="upload-image" id="upload-image" ></div>
						<div class="col-lg-2"><h4>Ο χρήστης για τον οποίο θα εισάγεται φωτογραφία είναι ο <?php $usname = $_SESSION['user_edit'];  echo $usname; ?></h4></div>					
											  <input type="hidden" value="<?php echo $usname; ?>" name="usname" >

					</form>
				</div>
	
				<div id="ack4" ></div>		
						
						<div class="row" style="display:inline-block;margin-top:100px;float:left;">
								<div class="col-md-6"><img class="img-responsive" src="img/right-image.png" alt="right image"></div>
								<div class="col-md-6"><img class="img-responsive" src="img/wrong-image.png" alt="wrong image"></div>
						</div>

						<button  class="btn btn-default" id="instructions" style="float:right;margin-top:410px" ><a href="javascript:void(0);" onclick="javascipt:window.open('cv.pdf');" class="popup">Οδηγίες συλλογής φωτογραφιών</a></button> <!--me to javascript fortwnei se diaforetiko parathuro to pdf arxeio pou tou exoume fortwsei.-->

						
					 
		     </div> 
		</div> 
	</header>
	
	
<?php include 'footer.php'; ?>
