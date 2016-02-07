	<script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Include Rlightbox -->
    <script type="text/javascript" src="widget/lib/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="widget/lib/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="widget/lib/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="widget/lib/jquery.ui.rlightbox.min.js"></script>

    
 <!--rlightbox javascript-->
    <script type="text/javascript">
        jQuery(function($) {
            $( ".lb_images" ).rlightbox();
        });
    </script>
    

<script type="text/javascript">
	
	function DeletePhoto(value)
		{
		  var photo_name = value;
		  var x = confirm("<?php echo $message16 ?>" +photo_name + "?" );
		  var choose = 2;
		  //alert(usname);
		  
		  if (x == true)
			//alert(usname);	
			$.ajax({
					url: "delete-user.php", //klisi arxeiou
					dataType: "text", //tupos minimatos
					type: "POST", //POST i GET
					data: {'photo_name': photo_name, 'choose': choose },      //to data emperiexei times logikis {key:value}. to key einai auto pou pairnei tin timi apo ti metavliti kai ti metaferei ston php kwdika. p.x. ston php kwdika tha baloume "$_POST['key']"             
					success: function(data){
						alert(data); // this will print you any php / mysql error as an alert  
						window.location.reload(1);
					}
			});
			
			
			
		  else
			return false;
				
		
		}
</script>
