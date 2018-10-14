<?php
	include_once "connection.php";
	
	if(isset($_POST['butt1']))
	{

		session_start();
		$sql=mysqli_query($conn,"DELETE FROM users where u_mail='".$_SESSION['mail']."'");
		session_unset();
		session_destroy();
		header("location:../PHP/index.php");		
	}
	

?>