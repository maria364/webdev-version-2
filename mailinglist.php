<?php include 'header.php'; ?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
				<?php	
								/*$sql = "SELECT email, username FROM diplomatiki.users WHERE sendemail='1' ";*/
								$sql = $conn->prepare( "SELECT `email`, `username`, `sendemail` FROM `users` ");
								//$res = mysqli_query($conn,$sql);  /*ektelesi tou erwtimatos*/
								$sql->execute();
								$res = $sql->rowCount();
								
							//if (mysqli_num_rows($res) > 0)
							if ($res >0)
							{
								echo "<table id='t01' class='table'><thead><tr><th>Username</th><th>E-mail</th><th colspan='2'>Ενημέρωση μέσω e-mail</th><th></th></tr></thead>";
								
								echo "<tbody>";
								//while($row = mysqli_fetch_assoc($row)) {
								while($row = $sql->fetch(PDO::FETCH_ASSOC)){
								 echo "<tr>";
								 echo "<td id='username' align='left'>".$row["username"]."</td><td id='name' align='left'>".$row["email"]."</td>";
								 if ($row["sendemail"] == 1){ //diladi an eisai sti mailing list, tote energopoiise mono to koumpi "oxi"
									$yes = "disabled";
									echo "<td><button class='sendemail' id='sendemail-yes' value=".$row["username"]."  onclick='SendEmail(this.value,".$row["sendemail"].")' style='float:left;' ".$yes.">Ναι</button><button class='sendemail' id='sendemail-no' value=".$row["username"]." onclick='NotSendEmail(this.value,".$row["sendemail"].")' style='float:left;'>Όχι</button></td>";
									echo "</tr>";
								 
								 } else { // ean den eisai stin mailing list, tote energopoiise mono to koumpi "nai"
									$no = "disabled";
									echo "<td><button class='sendemail' id='sendemail-yes' value=".$row["username"]."  onclick='SendEmail(this.value,".$row["sendemail"].")' style='float:left;' >Ναι</button><button class='sendemail' id='sendemail-no' value=".$row["username"]." onclick='NotSendEmail(this.value,".$row["sendemail"].")' style='float:left;' ".$no.">Όχι</button></td>";
									echo "</tr>";
								 }
								 
								 
								 
								/*echo "<td id='username' align='left'>".$row["username"]."</td><td id='name' align='left'>".$row["email"]."</td><td><button class='sendemail' value=".$row["username"]." name='sendemail' onclick='SendEmail(this.value)' style='float:left;'>Ναι</button><button class='sendemail' value=".$row["username"]." name='sendemail' onclick='SendEmail(this.value)' style='float:left;'>Όχι</button></td>";*/
								 
								 /*echo "</tr>";*/
								}
								echo "</tbody>";
								echo "</table>";
								
							} else {
								echo "0 results";
							}
					?>
				</div>
			</div>
		</div>
	</header>
	
<?php include 'footer.php'; ?>
