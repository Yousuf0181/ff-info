<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$name 			= $_POST['name'] ;

$father_name 	= $_POST['father_name'] ;

$mother_name 	= $_POST['mother_name'] ;

$address 		= $_POST['address'] ;

$date_of_birth 	= $_POST['date_of_birth'] ;

$area 		   	= $_POST['area'] ;

$sector 	   	= $_POST['sector'] ;

$martyr 		= $_POST['martyr'] ;


if(isset($name) && isset($father_name) && isset($mother_name) && isset($address) && isset($date_of_birth) && isset($area) && isset($sector) && isset($martyr) )
{

$sql ="INSERT INTO freedomfighter(name,father_name,mother_name,address,date_of_birth,area,sector,martyr) VALUES('".$name."', '".$father_name."', '".$mother_name."', '".$address."', '".$date_of_birth."', '".$area."', '".$sector."', '".$martyr."' ) " ;



$result = $db->query($sql) ;


if($result)
{
	redirectTo('view-freedom-fighter.php') ;
}
else
{
	echo "Data insert fail" ;
}

}

else{

	echo "All fail" ;
}





 ?>
<?php include 'inc/footer.php' ; ?>
