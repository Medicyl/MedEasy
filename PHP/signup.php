<?php 
	include_once "connection.php";

	if(isset($_POST['submit']))
	{
		$fname=mysqli_real_escape_string($conn,$_POST['ufname']);
		$lname=mysqli_real_escape_string($conn,$_POST['ulname']);
		$email=mysqli_real_escape_string($conn,$_POST['umail']);
		$contact=mysqli_real_escape_string($conn,$_POST['uphone']);
		$bdate=mysqli_real_escape_string($conn,$_POST['ubdate']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		$hashpwd=password_hash($password,PASSWORD_DEFAULT,['cost' => 15]);
		$sql=mysqli_query($conn,"SELECT u_mail FROM users where u_mail='".$email."'");
		$result = mysqli_fetch_array($sql);
		echo $result;
		if(empty($result)){
			$sql2="INSERT INTO users(u_fname,u_lname,u_mail,u_password,u_phone,u_birth) VALUES ('$fname','$lname','$email','$hashpwd','$contact', '$bdate')";
			if ($conn->query($sql2) === TRUE) {
				session_start();
				
				$_SESSION['fname']=$fname;
				$_SESSION['lname']=$lname;
				$_SESSION['password']=$password;
				$_SESSION['mail']=$email;
			    $_SESSION['phone']=$contact;
				$_SESSION['birth']=$bdate;

			    header("location:../PHP/index.php");
			} else {
			    echo "Error: " . $sql2 . "<br>" . $conn->error;
			}			
		}
		else{
			echo "Email id Already exists.";
		}

	}

	else{
		echo "Error 404";
	}
?>