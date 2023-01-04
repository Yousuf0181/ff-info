<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$id = $_GET['id'] ;

$sql = "DELETE FROM freedomfighter WHERE id= '".$id."'  " ;

$result = $db->query($sql) ;

if($result)
{
    redirectTo('all-freedom-fighter.php') ;
}

else
{

    echo "Fail" ;
}

 ?>
<?php include 'inc/footer.php' ; ?>
