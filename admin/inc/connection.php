<?php

define( 'SERVER'  , "localhost") ;
define( 'USERNAME', "root") ;
define( 'PASSWORD', "" ) ;
define( 'DATABASE', "ff_info") ;

$db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE) ;

if($db)
{
	/*echo "Database connection successful" ;*/
}

else{

	echo "Database connection fail" ;
}



?>