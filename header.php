<?php
session_start();
/* echo 'Welcome '.$_SESSION['rightname'];*/
if(!isset($_SESSION['rightname'])) 
      header("Location: http://localhost/diplwmatiki/custom-bootstrap/main.php"); 
include('connect.php');

$stmt = $conn->prepare("SELECT 	`identity` FROM `users` WHERE `username`= :username ");
$stmt->bindValue(':username', $_SESSION['rightname']); //"denei" ti metavliti me to input pou lamvanei apo tin eisodo tou xristi
$stmt->execute();
// set the resulting array to associative
$res = $stmt->rowCount(); //epistrefei ton arithmo twn grammwn pou exei vrei to apotelesma 
//echo $row; 
	
if ( $res== 1 ) {

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	/*εδώ βάζουμε το username για το session. το username που έχει εισάγει ο χρήστης.*/	
	$val=$row['identity'];
	//efoson exei pistopoiithei oti o xristis uparxei, zitame na paroume apo ti vasi tin identity tou gia na elenxthei se poia katigoria anoikei (admin/user), wste na tou anoiksei to katallilo dashboard
	
	
		if ( $val == 1) {
			$type="admin";			
		} else if ($row['identity'] ==0) {
			$type="user";
		}

	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     	 
    <title>Πίνακας Ελέγχου</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link type="text/css" rel="stylesheet" href="widget/css/ui-lightness/jquery-ui-1.8.16.custom.css" />
    <link type="text/css" rel="stylesheet" href="widget/css/lightbox.min.css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
   
    <?php
				if ($type == "admin" ){
					include('nav-admin.php');
				} else {
					include('nav-user.php');
				}
	?>
