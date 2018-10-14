<?php 
	include_once "connection.php";
	session_start();
	if(isset($_POST['submit']))
	{
		$email=mysqli_real_escape_string($conn,$_POST['mail']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);

		echo $email." ".$password." ";
		if(!empty($email) || !empty($password)){
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$sql=mysqli_query($conn,"SELECT * FROM users where u_mail='".$email."'");
	
				$result = mysqli_fetch_assoc($sql);
				// $json = json_encode($result);
				// echo $json;
				// echo $result['u_password']." ";

				if(strcmp($email,'admin@medeasy.com')==0){
					if(password_verify($password,$result['u_password'])){
								$_SESSION['fname']=$result['u_fname'];
								$_SESSION['lname']=$result['u_lname'];
								$_SESSION['password']=$result['u_password'];
								$_SESSION['mail']=$result['u_mail'];
							    $_SESSION['phone']=$result['u_phone'];
								$_SESSION['birth']=$result['u_birth'];
								$_SESSION['gen']=0;
								
								header("location:../HTML/admin.html?signin=success");
					}				

				}
				else if(password_verify($password,$result['u_password'])){
							$_SESSION['fname']=$result['u_fname'];
							$_SESSION['lname']=$result['u_lname'];
							$_SESSION['password']=$result['u_password'];
							$_SESSION['mail']=$result['u_mail'];
						    $_SESSION['phone']=$result['u_phone'];
							$_SESSION['birth']=$result['u_birth'];
							$_SESSION['gen']=0;
							
							header("location:../PHP/index.php?signin=success");
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