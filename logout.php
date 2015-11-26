<?php 

session_start();
include('connect.php');

if(!isset($_SESSION['username'])) {
      header("Location: http://localhost/diplwmatiki/custom-bootstrap/main.php");  
}
    $_SESSION=array();
    session_regenerate_id(); 
	/* session_unset(); */
	unset($_SESSION['username']);
    session_destroy();
    echo "lost";
	header("Location: http://localhost/diplwmatiki/custom-bootstrap/main.php");






?>