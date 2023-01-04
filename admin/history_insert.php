<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$title 			= $_POST['title'] ;
$history1 			= $_POST['history1'] ;
$history2 			= $_POST['history2'] ;

$image 	= $_FILES['image']['name'] ;
$target = "img/" . basename($image);






$sql ="INSERT INTO history (title,history1,history2,image) VALUES('".$title."','".$history1."','".$history2."', '".$image."') " ;



$result = $db->query($sql) ;


if($result)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	    redirectTo('history.php') ;

    }
}
else
{
	echo "Data insert fail" ;
}






 ?>
<?php include 'inc/footer.php' ; ?>
