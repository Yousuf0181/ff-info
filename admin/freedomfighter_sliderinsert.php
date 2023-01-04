<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$name 			= $_POST['name'] ;
$pagelink 			= $_POST['pagelink'] ;

$image 	= $_FILES['image']['name'] ;
$target = "img/" . basename($image);






$sql ="INSERT INTO freedomfighterslider (name,pagelink,image) VALUES('".$name."','".$pagelink."', '".$image."') " ;



$result = $db->query($sql) ;


if($result)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	    redirectTo('freedomfighter_slider_view.php') ;

    }
}
else
{
	echo "Data insert fail" ;
}






 ?>
<?php include 'inc/footer.php' ; ?>
