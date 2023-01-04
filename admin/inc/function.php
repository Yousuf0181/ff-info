<?php 

include 'connection.php' ;

function redirectTo($url)
{

	header('Location:  '.$url.' ') ;

	exit ;
}

function userMessage($id)
{
	global $db ;

	$sql = "SELECT * FROM user WHERE id = '".$id."' " ; 

	$result = $db->query($sql) ;

	return $result ;
}

function deleteMessage($id)
{
	global $db ;

	$sql = "DELETE FROM user WHERE id = '".$id."' " ;

	$result = $db->query($sql) ;
	
}

function checkLogin()
{
	session_start() ;

	if(!isset($_SESSION['id']))
	{
		redirectTo('login.php') ;
	}
}

function userName()
{

	global $db ;

	$id = $_SESSION['id'] ;

	if($id){

		$sql = "SELECT name FROM users WHERE id = '$id' " ;

		$result = $db->query($sql) ;

		if($result)
		{
			while($row = $result->fetch_assoc())
			{
				return $row['name'] ;
			}
		}
		else{
			redirectTo('login.php') ;
		}
	}

	else{
		redirectTo('login.php') ;
	}

}



 ?>