<?php include 'header.php'; ?>
	
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Dimirourgia users list-->

						<div id="usesrs-list" class="users-list" >
						
							<?php	
								$sql = $conn->prepare( "SELECT firstname, lastname, username, email FROM users ");
								//$res = mysqli_query($conn,$sql);  /*ektelesi tou erwtimatos*/
								$sql->execute();
								$res = $sql->rowCount();
								
								
							if ($res > 0)
							{
								echo "<table id='t01' class='table'><thead><tr><th>Username</th><th>Ονοματεπώνυμο</th><th>E-mail</th></tr></thead>";
								echo "<form action='edit_users.php' method='post'>";
								echo "<tbody>";
								while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
								 echo "<tr>";
								 echo "<td id='username' align='left'>".$row["username"]."</td><td id='name' align='left'>".$row["firstname"]." ".$row["lastname"]."</td><td id='email' align='left'>".$row["email"]."</td><td align='left'><button class='epeks-stoixeiwn' id='epeks-stoixeiwn' value='".$row["username"]."' name='user_edit'>edit</button></td>";
								 
								 echo "</tr>";
								}
								echo "</form>";
								echo "</tbody>";
								echo "</table>";
								
							} else {
								echo "0 results";
							}
					?>
					</div>

					<div id="show" class="show"></div>
											


					

                </div>
            </div>
        </div>
    </header>
	
	
<?php include 'footer.php'; ?>
