<header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Dimirourgia users list-->

						<div id="usesrs-list" class="users-list" >
						
							<?php	
								
								
								
							if ($res > 0)
							{
								echo "<table id='t01' class='table'><thead><tr><th>".htmlentities($message146, ENT_QUOTES,"utf-8")."</th><th>".htmlentities($message152, ENT_QUOTES,"utf-8")."</th><th>".htmlentities($message147, ENT_QUOTES,"utf-8")."</th></tr></thead>";
								// echo "<form action='edit_users.php' method='post'>"; //einai gia na pernaei to onoma tou user pou epileksame apo to ena arxeio sto allo - peritto pleon
								echo "<tbody>";
								while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
								 echo "<tr>";
								 echo "<td id='username' align='left'>".$row["username"]."</td><td id='name' align='left'>".$row["firstname"]." ".$row["lastname"]."</td><td id='email' align='left'>".$row["email"]."</td><td align='left'><a href='?p=edit_users&user=".$row["username"]."'><button class='epeks-stoixeiwn'>edit</button></a><!--<button class='epeks-stoixeiwn' id='epeks-stoixeiwn' value='".$row["username"]."' name='user_edit'>edit</button>--></td>";
								 
								 echo "</tr>";
								}
								//echo "</form>";
								echo "</tbody>";
								echo "</table>";
								
							} else {
								echo htmlentities($message12, ENT_QUOTES,"utf-8");
							}
					?>
					</div>

					<div id="show" class="show"></div>

                </div>
            </div>
        </div>
</header>