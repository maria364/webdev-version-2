<!-- Header -->
    <header>
       
		<div class="container">
            <div class="row">
                <div class="col-lg-12 ">
					<?php
						$folder = 'stream/';
						$filetype = 'stream.jpg';
						$files = glob($folder.$filetype);
						$count = count($files); /*metraei ton arithmo twn fwtografiwn pou einai sto fakelo*/
						
						for ($i = 0; $i < $count; $i++) {		
								echo '<td>';
								echo '<img class="img-responsive" id="photo-streaming" src="'.$files[$i].'"/></a>';
								echo '</td>';
								/* echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder)); */
						}
					?>
				</div>
			</div>
		</div>	
		
    </header>
	