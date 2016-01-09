//Κλείνουν τα Modal είτε με το πάτημα του esc ή με το κλικ του ποντικιού σε οποιοδήποτε σημείο της μάσκας (του background)

//close modal
	//$('#modal-register').on('click', function(event){
		//$("#modal-register").fadeOut(500);
        //or
       // window.close();	
		//window.location = 'http://localhost/diplwmatiki/custom/main.php'
	//});
	
	
var x = window.location.href; /*diavazw to url pou exei i selida prin to modal*/
	
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		
			window.location.assign(x);
	    }
    });


//close modal
	//$('#modal-login').on('click', function(event){
		//$("#modal-login").fadeOut(500);
        //or
       // window.close();	
		//window.location = 'http://localhost/diplwmatiki/custom/main.php'
	//});
	



