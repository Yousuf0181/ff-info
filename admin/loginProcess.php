<?php include 'inc/function.php' ; ?>
<?php include 'inc/header.php' ; ?>
<?php 

if( isset($_POST['submit'])){

    $email      = $_POST['email'] ;

    $password   = $_POST['password'] ;

    $sql = " SELECT id FROM users WHERE email = '$email' AND  password = '$password' " ;

    $result = $db->query($sql) ;

    if($result){
   
        while($row = $result->fetch_assoc()){

             session_start() ;

             $_SESSION['id']  =  $row['id'] ;
         }

        if($_SESSION['id'])
        {
            redirectTo('index.php') ;
        }
        else{

            redirectTo('login.php') ;
        }

    }
    
}

else{

    redirectTo('login.php') ;
}

 ?>

<?php include 'inc/footer.php' ; ?>
