<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$id  			= $_POST['id'] ;

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

$sql = " UPDATE freedomfighter SET name= '".$name."' , father_name = '".$father_name."' , mother_name = '".$mother_name."' , address = '".$address."' , date_of_birth = '".$date_of_birth."', area = '".$area."' , sector = '".$sector."', martyr = '".$martyr."'  WHERE id = '".$id."' " ;

$result = $db->query($sql) ;


if($result)
{
	redirectTo('view-freedom-fighter.php') ;
}
else
{
	echo "Data update fail" ;
}

}

else{

	echo "All fail" ;
}

 ?>
<?php include 'inc/footer.php' ; ?>
