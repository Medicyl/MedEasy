<?php 
	include_once "connection.php";
	if(isset($_POST['submit']))
	{
		$email=mysqli_real_escape_string($conn,$_POST['mail']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		if(!empty($email) || !empty($password)){
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$sql=mysqli_query($conn,"SELECT * FROM users where u_mail='$email'");
				$result = mysqli_fetch_row($sql);
				$hashedpwd=password_verify($password,$result[6]);
				echo "<script>console.log( 'Debug Objects: " . $result[6] . "' );</script>"; 
				echo $hashedpwd;
				if(strcmp(password_hash($password,PASSWORD_DEFAULT),$result[6])){
					header("location:../HTML/index.html?signin=$hashedpwd");
							$_SESSION['fname']=$result['u_name'];
							$_SESSION['lname']=$result['u_lname'];
							$_SESSION['password']=$result['u_password'];
							$_SESSION['mail']=$resut['u_mail'];
						    $_SESSION['phone']=$result['u_phone'];
							$_SESSION['birth']=$result['u_birth'];
				}
				// elseif($hashedpwd==false){
				// 	header("location:../HTML/signin.html?login=$a");
				// }
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