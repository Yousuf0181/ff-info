<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

$id = $_GET['id'] ;


$sql = "DELETE FROM history WHERE id= '".$id."'  " ;

$result = $db->query($sql) ;

if($result)
{
    redirectTo('history_view.php') ;
}

else
{

    echo "Fail" ;
}

 ?>
<?php include 'inc/footer.php' ; ?>
