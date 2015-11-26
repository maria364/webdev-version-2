<?php
session_start();
echo $_SESSION['user_edit'];
include('connect.inc');			
						/*if ($_SERVER["REQUEST_METHOD"] == "POST") {*/
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
										// if everything is ok, try to upload file
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
						
						/*}*/
						
						
						/*function test_input($data) {		
							$data = htmlspecialchars($data);
							return $data;
						}*/
				
?>
						
						