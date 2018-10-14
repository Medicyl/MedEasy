
<?php
	$link=mysqli_connect('localhost','root','');
	mysqli_select_db($link,'medeasy');
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


?>
