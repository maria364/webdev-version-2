<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <meta name="theme-color" content="#3d8eb9"> -->
        <title>Πίνακας Ελέγχου</title>
        <!-- <link rel="icon" type="image/x-icon" href="" /> -->

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- move -->
        <link type="text/css" rel="stylesheet" href="widget/css/ui-lightness/jquery-ui-1.8.16.custom.css" />
        <link type="text/css" rel="stylesheet" href="widget/css/lightbox.min.css" />
        <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />

        <?php
        if(file_exists('template/header/'.$p.'.header.php')){
            include_once('template/header/'.$p.'.header.php');
        // }else{
        //     include_once( 'template/header/main.header.php' );
        }?>
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->

        <?php

        if (isset ($_SESSION['identity'])){

            if ($_SESSION['identity'] == "1" ){
                include('nav-admin.php');
            } else if ($_SESSION['identity']  == "0") {
                include('nav-user.php');
            } 

        }else {
            include ('nav-main.php');
        }
        ?>