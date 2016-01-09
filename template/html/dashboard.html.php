
<header>
	<div class="col-lg-8 " >
		<div  id="dashboard-first-row">
					<?php
						$fh = fopen('logfile.txt','r') or die("Unable to open file!");
						// echo fread($fh,filesize("logfile.txt")); //diavazei to txt arxeio alla enwnei ti mia grammi me tin alli
						while(! feof($fh)) //diavazei grammi grammi oti einai grammeno sto txt arxeio
						  {
						  echo fgets($fh). "<br />";
						  }

						fclose($fh);
						// $handle = @fopen("/custom-diplwmatiki/logfile.txt", "r");
						// if ($handle) {
						// 	while (($buffer = fgets($handle, 4096)) !== false) {
						// 		echo $buffer;
						// 	}
						// 	if (!feof($handle)) {
						// 		echo "Error: unexpected fgets() fail\n";
						// 	}
						// 	echo "All good";
						// 	fclose($handle);
						// }
					?>   
		</div>			
	</div>

	<div class="col-lg-3 col-lg-offset-1" >
		<div id="dashboard-second-row">
			<?php
						$fh = fopen('bullets.txt','r') or die("Unable to open file!");
						// echo fread($fh,filesize("logfile.txt")); //diavazei to txt arxeio alla enwnei ti mia grammi me tin alli
						while(! feof($fh)) //diavazei grammi grammi oti einai grammeno sto txt arxeio
						  {
						  	echo "<div id='info'>";		
						  	echo "<br>";
						  	echo fgets($fh). "<br />";
						  	echo "</div>";
						  }
						fclose($fh);
						// $handle = @fopen("/custom-diplwmatiki/logfile.txt", "r");
						// if ($handle) {
						// 	while (($buffer = fgets($handle, 4096)) !== false) {
						// 		echo $buffer;
						// 	}
						// 	if (!feof($handle)) {
						// 		echo "Error: unexpected fgets() fail\n";
						// 	}
						// 	echo "All good";
						// 	fclose($handle);
						// }
			?>
		</div>
    </div>
</header>