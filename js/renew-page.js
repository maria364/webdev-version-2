$(".sendemail").click( function () {

	/*reload tis selidas meta apo sugkekrimeno xrono (sec)*/
	setTimeout(function(){
		window.location.reload(1);
	}, 1000);
	
});

$("#delete-user").click( function () {

	/*reload tis selidas meta apo sugkekrimeno xrono (sec)*/
	setTimeout(function(){
		window.location.href = 'http://188.4.40.182/t_selida/?p=users-list';
	}, 1000);
	
});

