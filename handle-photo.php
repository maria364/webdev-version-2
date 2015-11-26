<?php include 'header.php'; 
session_start();
?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
				<?php
					echo $_SESSION['user_edit'];		
					echo '<div id="imt">';
					$temp2 = "uploads/".$_SESSION['user_edit']."/";
					$folder1=$temp2;
					$filetype1 = '*.*';
					$files1 = glob($folder1.$filetype1);
					$count = count($files1); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
					echo '<ul>';

						for ($j = 0; $j < $count; $j++) {	
							echo '<li style="text-align:center;display:inline-block;float:left;margin-left:15px;" >';
							echo '<a href="'.$files1[$j].'" class="lb_images" ><img class="img-responsive" src="'.$files1[$j].'" style="width:100px;height:100px;" /></a>';
							echo substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1)); /*I entoli substr pairnei orismata "(string,start,length)". emeis pairnoume olo to onoma tis eikonas kai to provaloume*/
							$name[$j]=substr($files1[$j],strlen($folder1),strpos($files1[$j], '.')-strlen($folder1));;
							echo "</br>";
							echo '<input type="hidden" value="'.$name[$j].'" name="delete_file" />';
							echo '<button type="button" class="handlephoto" id="handlephoto" value="'.$files1[$j].'" onclick="DeletePhoto(this.value)">Διαγραφή</button>';
							echo '</li>';
						}		
					echo '</ul>';
					echo '</div>';	

				?>
				</div>
			</div>
		</div>
	</header>
	
<?php include 'footer.php'; ?>




