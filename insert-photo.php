<?php include 'header.php'; ?>

    <!-- Header -->
    <header>
      <div class="container">
            <div class="row">
                <div class="col-lg-12">  
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				<label>Επιλέξτε τη φωτογραφία που θέλετε να ανεβάσετε:</label>
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload Image" name="submit" id="upload-image" >
			</form>
		
			
		</div>
	
	
		<div id="photo-messages">
				<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST") {



				$target_dir = "uploads/";
				if (!empty($_FILES["fileToUpload"]["tmp_name"])){
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						echo "<br>";
						echo "<img src='$target_file' width='450' height='450'>";	
					} else {
						echo "Sorry, there was an error uploading your file.";
					}
				}

				} else {
					echo "No image has been selected";
				}
				
				} else {
				
				echo "<div id='instructions'>";
				echo "Οδηγίες:";
				echo "<br>";
				echo "1) Εισάγεται φωτογραφία στην οποία απεικονίζεται το 100% του προσώπου σας, χωρίς αντικείμενα όπως καπέλα, γυαλιά ηλίου ή μειωπίας.";
				echo "<br>";
				echo "2) Περικόψτε την εικόνα που θα ανεβάσετε, ώστε να μην υπάρχουν περιττά αντικείμενα ή άλλα πρόσωπα στο φόντο.";
				echo "<br>";
				echo "3) Η εικόνα θα πρέπει να έχει όσο το δυνατόν καλύτερο φωτισμό. Σε καμία περίπτωση δεν θα πρέπει να ανέβει μια σκοτεινή φωτογραφία.";
				echo "<br>";
				echo "4) Για να γίνει όσο το δυνατόν καλύτερη και πιο επιτυχημένη αναγνώριση, εισάγεται περισσότερες από 15 φωτογραφίες με διαφορετικό φωτισμό και υπό διαφορετικές γωνίες του προσώπου.";
				echo "</div>";
				}
						function test_input($data) {		
							$data = htmlspecialchars($data);
							return $data;
						}
		
				?>
			</div> 
		     </div> 
		</div> 
	</header>
	
	
<?php include 'footer.php'; ?>
