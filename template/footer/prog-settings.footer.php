
<script src="http://dmc.trodis.netsteps-apps.gr/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="http://localhost/diplwmatiki/t_selida/bootstrap-daterangepicker-master/moment.min.js" type="text/javascript"></script>
<script src="http://localhost/diplwmatiki/t_selida/bootstrap-daterangepicker-master/daterangepicker.js" type="text/javascript"></script>

<script>

    $('#daterangepicker').daterangepicker({
    	// "singleDatePicker": true,
    	timePicker: true,
    	 "timePicker24Hour": true,
    	  "timePickerIncrement": 30,
    "dateLimit": {
        "days": 7
    },
    locale: {
    	fromLabel: 'Από',
    	toLabel:'Έως',
    	daysOfWeek: ['Κυ','Δε','Τρ','Τε','Πε','Πα','Σα'],
    	monthNames: ['Ιανουάριος', 'Φεβρουάριος','Μάρτιος','Απρίλιος','Μάιος','Ιούνιος','Ιούλιος','Αύγουστος','Σεπτέμβριος','Οκτώβριος','Νοέμβριος','Δεκέμβριος'],
    }
    	//"startDate": "12/01/2015",
    	//"endDate": "12/07/2015"
// }, function(start, end, label) {
//   console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
 });

    
    $( document ).ready(function() {

    	$('#daterangepicker').on('apply.daterangepicker', function(ev, picker) {
  			console.log(picker.startDate.format('YYYY-MM-DD'));
  			console.log(picker.endDate.format('YYYY-MM-DD'));

  			var start_date = $(".start-date").val();
  			var start_hour = $(" .left .hourselect").val();
  			var start_min = $(".left .minuteselect").val();
  			
  			var end_date = $(".stop-date").val();
  			var end_hour = $(" .right .hourselect").val();
  			var end_min = $(" .right .minuteselect").val();

  			alert(start_date);
  			alert(end_date);
  			// alert(start_hour);
  			// alert(start_min);
  			// alert(end_hour);
  			// alert(end_min);

  			$.ajax({url: "socket-cl-prog.php", dataType: "text", type: "POST", data: {'start_date': start_date,'start_hour':start_hour, 'start_min':start_min, 'end_date': end_date,'end_hour':end_hour, 'end_min':end_min},success: function(result){
        		alert(result); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}});

		});


		$('.daterangepicker').on('cancel.daterangepicker', function(ev, picker) {
  			//do something, like clearing an input
  			$('#daterangepicker').val('');
		});

	});


</script>
<script type="text/javascript">

	function procedure(val1) {

		// alert(val1);
		// alert(val2);
		var button= val1;
		var val_temp = $(".temp-stop").val(); //pairnw tin timi apo to dropdown list poy epilegw tis wres argis energopoiisis kai apenergopoiisis sustimatos

			$.ajax({url: "socket-cl.php", type: "POST", data: {'button': val1,'time':val_temp},success: function(data){
        		alert(data); //δειχνει τα αποτελέσματα του εκτελέσιμου
    		}
    		});
	}
</script>

