<header>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
				<?php	
								/*$sql = "SELECT email, username FROM diplomatiki.users WHERE sendemail='1' ";*/
								$sql = $conn->prepare( "SELECT email, username, sendemail FROM users_tsourma ");
								//$res = mysqli_query($conn,$sql);  /*ektelesi tou erwtimatos*/
								$sql->execute();
								$res = $sql->rowCount();
								
							//if (mysqli_num_rows($res) > 0)
							if ($res >0)
							{
								echo "<table id='t01' class='table'><thead><tr><th>".htmlentities($message146, ENT_QUOTES,"utf-8")."</th><th>".htmlentities($message147, ENT_QUOTES,"utf-8")."</th><th colspan='2'>".htmlentities($message148, ENT_QUOTES,"utf-8")."</th><th></th></tr></thead>";
								
								echo "<tbody>";
								//while($row = mysqli_fetch_assoc($row)) {
								while($row = $sql->fetch(PDO::FETCH_ASSOC)){
								 echo "<tr>";
								 echo "<td id='username' align='left'>".$row["username"]."</td><td id='name' align='left'>".$row["email"]."</td>";
								 if ($row["sendemail"] == 1){ //diladi an eisai sti mailing list, tote energopoiise mono to koumpi "oxi"
									$yes = "disabled";
									echo "<td><button class='sendemail' id='sendemail-yes' value=".$row["username"]."  onclick='SendEmail(this.value,".$row["sendemail"].")'  ".$yes.">".htmlentities($message149, ENT_QUOTES,"utf-8")."</button><button class='sendemail' id='sendemail-no' value=".$row["username"]." onclick='NotSendEmail(this.value,".$row["sendemail"].")' >".htmlentities($message150, ENT_QUOTES,"utf-8")."</button></td>";
									echo "</tr>";
								 
								 } else { // ean den eisai stin mailing list, tote energopoiise mono to koumpi "nai"
									$no = "disabled";
									echo "<td><button class='sendemail' id='sendemail-yes' value=".$row["username"]."  onclick='SendEmail(this.value,".$row["sendemail"].")'  >".htmlentities($message149, ENT_QUOTES,"utf-8")."</button><button class='sendemail' id='sendemail-no' value=".$row["username"]." onclick='NotSendEmail(this.value,".$row["sendemail"].")'  ".$no.">".htmlentities($message150, ENT_QUOTES,"utf-8")."</button></td>";
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
