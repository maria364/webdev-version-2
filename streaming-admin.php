<?php include 'header.php'; ?>

    <!-- Header -->
    <header>
       
		<div class="container">
            <div class="row">
                
					<?php
						$folder = 'stream/';
						$filetype = 'stream.jpg';
						$files = glob($folder.$filetype);
						$count = count($files); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
						
						for ($i = 0; $i < $count; $i++) {		
								echo '<td>';
								echo '<img class="img-responsive" src="'.$files[$i].'" style="width:680px;height:480px;" /></a>';
								echo '</td>';
								/* echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder)); */
						}
			
					?>
			</div>
		</div>	
		
    </header>
	
		
<?php include 'footer.php'; ?>