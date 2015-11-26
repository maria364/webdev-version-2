$(".sendemail").click( function () {

	/*reload tis selidas meta apo sugkekrimeno xrono (sec)*/
	setTimeout(function(){
		window.location.reload(1);
	}, 1000);
	
});

$("#delete-user").click( function () {

	/*reload tis selidas meta apo sugkekrimeno xrono (sec)*/
	setTimeout(function(){
		window.location.href = 'http://localhost/diplwmatiki/custom-bootstrap/users-list.php';
	}, 1000);
	
});

