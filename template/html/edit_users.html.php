<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
				<?php
				// $_SESSION['user_edit']=mysql_real_escape_string($_POST['user_edit']);
				// echo $_SESSION['user_edit'];
				// $user_edit= mysql_real_escape_string($_POST['user_edit']);
				$user_edit= mysql_real_escape_string($_GET['user']);
				
				//echo "i timi pou pairnw einai ".$user_edit;
				$email_edit=0;
				
				$username = $_SESSION['rightname'];
				$sql = $conn->prepare( "SELECT `firstname`, `lastname`, `email`, `password`, `identity` FROM `users` WHERE `username` = :useredit");
				//$res = mysqli_query($conn,$sql);
				//$row = mysqli_num_rows($res); 
				$sql->bindValue(':useredit', $user_edit);
				$sql->execute();
				$row = $sql->rowCount();
				
				echo "";
				echo "<div class='table-responsive'>  ";
				echo "<table class='table' id='table-edit-user' >";
				if ( $row> 0 ) {
					 $rowc = $sql->fetch(PDO::FETCH_ASSOC); //fetch a result row as an associative array
					 if ($row = $rowc) {
						echo "<tbody><tr align='left'>";
						echo "<td align='left'><p>Ονοματεπώνυμο:    </p></td>";
						echo "<td align='left'><p>". $row["firstname"]. " " .$row["lastname"]."</p></td>";
						echo "<td></td>"; 			
						echo "</tr>";
						echo "<tr align='left'>";
						/*echo "<td><div id='counter' ></div></td>";*/
						echo "<td align='left'><p> e-mail:    </p></td>";
						echo "<td align='left'><p>". $row["email"]."</p></td>";
						echo "<td><button value='".$user_edit."' onclick='edit_email(this.value)' class='edit-email'>edit</button></td>";
						echo "</tr>";
						echo "<tr align='left'>";
						/*echo "<td><div id='counter1' ></div></td>";*/
						echo "<td align='left'><p> Κωδικός πρόσβασης:    </p></td>";
						echo "<td></td>";
						echo "<td align='left'><button value='".$user_edit."' onclick='edit_pass(this.value)' class='edit-pass' >edit</button></td>";
						echo "</tr></tbody>";
						echo "<tr>";
						/*echo "<td><div id='counter2' ></div></td>";*/
						echo "</tr></tbody>";
						$identity = $row["identity"];
						/*echo "".$identity;*/
					 }
				}	
				echo "</table>";
				//mysqli_close($conn);
				?>
					
			
			
			<div id="counter" align="left" ></div>
			<div id="counter1" align="left" ></div>
			<br>
			<div id="counter2" align="left" ></div>
            </div>
		</div>
		
		
		
		<div class="row">
			<div class="col-md-2">
				<div class="btn-group-vertical">
  					<!--<button class="btn btn-default" name="<?php echo $user_edit ?>" onclick="insertphoto('<?php echo $user_edit ?>')" >Εισαγωγή φωτογραφιών</button>-->
					<a href="?p=insert-photo&user=<?php echo $user_edit ?>" type="button" class="btn btn-default" name="<?php echo $user_edit ?>" >Εισαγωγή φωτογραφιών</a>
					<a href="?p=handle-photo&user=<?php echo $user_edit ?>" type="button" class="btn btn-default" >Διαχείριση φωτογραφιών</a>
					<button type="button" class="btn btn-default" id="delete-user" value="<?php echo $user_edit ?>" onclick="ConfirmDelete(this.value)">Διαγραφή χρήστη</button>
				</div>
					<br/>
				<div class="btn-group" id="btn-change-identity">
					<br/>
					<br/>
					<button type="button" class="btn btn-default" id="change_to_admin" value="<?php echo $identity ?>" onclick="change_identity(this.value,'<?php echo $user_edit ?>')">admin</button>
  					<button type="button" class="btn btn-default" id="change_to_user"  value="<?php echo $identity ?>" onclick="change_identity(this.value,'<?php echo $user_edit ?>')">user</button>
					<br/>
					<br/>
					<br/>
				</div>
			</div>	
		</div>	
			
        </div>
    </header>