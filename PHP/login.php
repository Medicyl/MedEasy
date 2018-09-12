<?php 
	include_once "connection.php";
	session_start();
	if(isset($_POST['submit']))
	{
		$email=mysqli_real_escape_string($conn,$_POST['mail']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		if(!empty($email) || !empty($password)){
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$sql=mysqli_query($conn,"SELECT * FROM users where u_mail='".$email."'");
				$result = mysqli_fetch_assoc($sql);
				if(strcmp(md5($password),$result['u_password'])){
					header("location:../HTML/index.html?signin=success");
							$_SESSION['fname']=$result['u_name'];
							$_SESSION['lname']=$result['u_lname'];
							$_SESSION['password']=$result['u_password'];
							$_SESSION['mail']=$resut['u_mail'];
						    $_SESSION['phone']=$result['u_phone'];
							$_SESSION['birth']=$result['u_birth'];
				}
				else{
					header("location:../HTML/signin.html?login=invalid");
				}
			}
			else{
				header("location:../HTML/signin.html?login=invalid");
			}
		}
		else{
			header("location:../HTML/signin.html?signin=empty");
		}
	}

	else{
		echo "Error 404";
	}
?>