<?php
// session_start();
/* echo 'Welcome '.$_SESSION['rightname'];*/
if(!isset($_SESSION['id']) ||$_SESSION['id']=="0") {
      header("Location: /diplwmatiki/t_selida/?p=main");
}
?>


