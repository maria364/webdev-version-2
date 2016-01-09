<?php

session_start();

include("connect.php");

if(isset($_GET['p']) && $_GET['p'] != ''){
    $p = $_GET['p'];
}
else{
    $p = 'main';
}

if(file_exists("template/prerender/$p.php")){
    include_once( "template/prerender/$p.php" );
}
else{
    include_once( 'template/prerender/main.php' );
}

include_once( "template/header.php" );

if(file_exists('template/html/'.$p.'.html.php')){
    include_once( 'template/html/'.$p.'.html.php' );
}
else{
    include_once( 'template/html/main.html.php' );
}

include_once( "template/footer.php" );

?>