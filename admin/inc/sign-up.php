<?php 

include 'function.php' ;

if(isset($_POST['submit']))
{
	$name = $_POST['name'] ;

	$email = $_POST['email'] ;

	$password =  $_POST['password'] ;

	if(isset($name) &&  !empty($name) && isset($email) &&  !empty($email) && isset($password) &&  !empty($password))
	{
		$sql = "INSERT INTO users(name , email, password) VALUES( '$name','$email', '$password') " ;

		$result = $db->query($sql) ;

		if($result)
		{
			$html = '' ;
			$html.='<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Title!</strong> 
						Data insert successful
					</div>' ;
		}
		else{
			echo "Fail" ;
		}
	}
}


 ?>