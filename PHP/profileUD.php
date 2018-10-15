
<?php
	$link=mysqli_connect('localhost','root','');
	mysqli_select_db($link,'medeasy');
if($_POST['update'] == 1){
	    session_start();
			$return_arr = array();
			// echo("<script>console.log('PHP: hello');</script>");
			// echo("<script>console.log('PHP: ".$_POST['fname']." ".$_POST['lname']." ".$_POST['dob']." ".$_POST['gen']."');</script>");
			$email = $_POST['email'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$dob   = $_POST['dob'];
			$gen   = $_POST['gen'];

			$query1 = $link->query("UPDATE users SET u_fname='$fname',u_lname='$lname',u_birth='$dob',u_gender='$gen' WHERE u_mail='$email'");
			 // Test of Updaataion
	            // if(!$query1 ) {
	            //    die('Could not update data: ' . mysql_error());
	            // }
	            // echo "Updated data successfully\n";
			$query = $link->query("SELECT * FROM users WHERE u_mail ='$email'");

			    // //Count total number of rows
			    $rowCount = $query->num_rows;
			    
			    //State option list
			    if($rowCount > 0){
			        
			        while($row = $query->fetch_assoc()){ 
			            
					    $fname = $row['u_fname'];
					    $lname = $row['u_lname'];
					    $dob = $row['u_birth'];
					    $gen = $row['u_gender'];
					    // echo $fname." ".$lname." ".$dob." ".$gen;
					    $_SESSION['fname'] = $fname;
					    $_SESSION['lname'] = $lname;
					    $_SESSION['birth'] = $dob;
					    $_SESSION['gen'] = $gen;
					    $return_arr[] = array("fname" => $fname,
					                    "lname" => $lname,
					                    "dob" => $dob,
					                    "gen" => $gen);

			        }
			    }else{
			        echo 'Something went wrong';
			    }

			    echo json_encode($return_arr);
	}
else if($_POST['update'] == 2){
			$email = $_POST['email'];
			$oldp = $_POST['oldp'];
			$newp = $_POST['newp'];

			$query = $link->query("SELECT * FROM users where u_mail='".$email."'");
			$rowCount = $query->num_rows;
			if($rowCount > 0){
			        
					        while($row = $query->fetch_assoc()){ 
					            
							    $oldpass = $row['u_password'];
					        }
					        if(password_verify($oldp,$oldpass)){
								$newpass=password_hash($newp,PASSWORD_DEFAULT,['cost' => 15]);					        	
								$query1 = $link->query("UPDATE users SET u_password='$newpass' WHERE u_mail='$email'");

								echo 'Password changed successfully!';       	
					        }
					        else{
					        	echo 'Incorrect Old password';
					        }
				}
		    else{
		    	echo "Something went wrong! Contact Us";
		    }			
			//$query1 = $link->query("UPDATE users SET u_fname='$fname',u_lname='$lname',u_birth='$dob',u_gender='$gen' WHERE u_mail='$email'");

            // if(!$query1 ) {
            //    die('Could not change data: ' . mysql_error());
            // }
            // echo "Change Password data successfully";			
}
else{
	echo 'Wrong';
}

?>
