<?php 

if(isset($_GET['submit']))
{
	$name 		= $_GET['name'] ;

	$email		= $_GET['email'] ;

	$message	= $_GET['message'] ;

	if(isset($name) && !empty($name) && isset($email) && !empty($email) && isset($message) && !empty($message))
	{
			$sql = "INSERT INTO user(name,email,message) VALUES('$name', '$email', '$message' ) " ;

			$result = $db->query($sql) ;

			if($result)
			{

				$html = '' ;
				$html.='
				<div class="container">
				<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Tank you!</strong> Your Message Insert Successfully .
					</div>
				</div>
				</div>
				</div>' ;
			}
			else{
				redirctTo('contact-us.php') ;
			}
	}
}





 ?>















