<?php
// session_start();
/* echo 'Welcome '.$_SESSION['rightname'];*/
if(!isset($_SESSION['id']) ||$_SESSION['id']=="0"|| $_SESSION['identity']=="0") {
      header("Location: http://188.4.40.182/t_selida/?p=main");
}

$sql = $conn->prepare( "SELECT firstname, lastname, username, email FROM users ");
								//$res = mysqli_query($conn,$sql);  /*ektelesi tou erwtimatos*/
$sql->execute();
$res = $sql->rowCount();


?>


