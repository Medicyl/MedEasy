
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
	$link=mysqli_connect('localhost','root','');
	mysqli_select_db($link,'medeasy');

		$return_arr = array();
		echo("<script>console.log('PHP: ".$_POST['fname']." ".$_POST['lname']." ".$_POST['dob']." ".$_POST['gen']."');</script>");

		$query1 = $link->query("UPDATE users SET u_fname = ".$_POST['fname'].",u_lname = ".$_POST['lname'].",u_birth = ".$_POST['dob'].",u_gender = ".$_POST['gen']." WHERE u_mail = ".$_POST['email']."");

		$query = $link->query("SELECT * FROM users WHERE u_mail = ".$_POST['email']."");

		    // //Count total number of rows
		    $rowCount = $query->num_rows;
		    
		    //State option list
		    if($rowCount > 0){
		        
		        while($row = $query->fetch_assoc()){ 
		            
				    $fname = $row['u_fname'];
				    $lname = $row['u_lname'];
				    $dob = $row['u_birth'];
				    $gen = $row['u_gender'];

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
