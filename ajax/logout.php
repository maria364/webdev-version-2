<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['rightname']);
unset($_SESSION['identity']);
session_destroy();


?>
