<!-- Header -->
    <header>
      <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
				
					<!--<form class="in-photo" action="</*?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?*/>" method="post" enctype="multipart/form-data">-->
					<form class="in-photo" action="?p=insert-photo&user=<?php echo $_GET['user']; ?>" method="post" enctype="multipart/form-data">
						<h4 id="tag-upload-image">Επιλέξτε τη φωτογραφία που θέλετε να ανεβάσετε:</h4></br>
						<br/>
						<br/>
						<div class="col-lg-5"><input type="file" name="fileToUpload" id="fileToUpload"></div>
						<div class="col-lg-5"><input type="submit" value="Upload Image" name="upload-image" id="upload-image" ></div>
 						<div class="col-lg-2"><h4>Ο χρήστης για τον οποίο θα εισάγεται φωτογραφία είναι ο <?php echo $_GET['user']; ?></h4></div>					
											  <input type="hidden" value="<?php echo $_GET['user']; ?>" name="usname" >

					</form>
				</div>


				<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$ssAct=$_POST["usname"];
							//echo $ssAct;
							$temp1 = "uploads/".$ssAct."/";
							$target_dir = $temp1;
							//echo $target_dir;
							
							if (!empty($_FILES["fileToUpload"]["tmp_name"])){
								$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
								//echo $target_file;
								$uploadOk = 1;
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								// Check if image file is a actual image or fake image

								if(isset($_POST["submit"])) {
									
									$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

									if($check !== false) {
										echo "File is an image - " . $check["mime"] . ".";
										$uploadOk = 1;
									} else {
										echo "File is not an image.";
										$uploadOk = 0;
									}
								} 


								// Check if file already exists
								if (file_exists($target_file)) {
									echo "Sorry, file already exists.";
									$uploadOk = 0;
								}
								
								// Allow certain file formats
								if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" ) {
									echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
									$uploadOk = 0;
								}
								// Check if $uploadOk is set to 0 by an error
										if ($uploadOk == 0) {
											echo "Sorry, your file was not uploaded.";
										// if everything i?p=insert-photos ok, try to upload file
										} else {
											if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
												echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
												echo "<br>";
												/*echo "<img class='img-responsive' src='$target_file' width='450' height='450'>";*/	
											} else {
												echo "Sorry, there was an error uploading your file.";
											}
										}

							} else {
								echo "No image has been selected";
							}
						
						}
						
						
						function test_input($data) {		
							$data = htmlspecialchars($data);
							return $data;
						}

?>

	
				<div id="ack4" ></div>		
						
						<div class="row" id="right-wrong-images">
								<div class="col-md-6"><img class="img-responsive" src="img/right-image.png" alt="right image"></div>
								<div class="col-md-6"><img class="img-responsive" src="img/wrong-image.png" alt="wrong image"></div>
						</div>

						<!-- <button  class="btn btn-default" id="instructions" style="float:right;margin-top:410px" ><a href="javascript:void(0);"download=("instructions.pdf") onclick="javascipt:window.open('instructions.pdf');" class="popup">Οδηγίες συλλογής φωτογραφιών</a></button> -->
						<!--me to javascript fortwnei se diaforetiko parathuro to pdf arxeio pou tou exoume fortwsei.--> 
						<button  class="btn btn-default" id="instructions"  onclick="openPDF('instructions.pdf');">Οδηγίες συλλογής φωτογραφιών</button> <!--mpike se sunartisi gia na leitourgei kai ston firefox kai se allous browser-->

						
					 
		     </div> 
		</div> 
	</header>
	
