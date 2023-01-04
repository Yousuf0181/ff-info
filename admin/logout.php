<?php 

include 'inc/function.php' ;

session_start() ;

$_SESSION['id'] = null ;

session_destroy() ;

redirectTo('login.php') ;

?>