<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/EditProfile.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Edit Profile</title>
</head>
<body>
	<div class="filtr"></div>
	<div class="container">
		<h2 align="center">Edit Profile</h2>
		<div class="row">
			<div class="col">	
			</div>		
			<div class="col-md-5 col-sm-10">
				
				<form class="form" action="../PHP/delete.php" method="POST">
				  <div class="form-group">
				  	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" >
				  </div>
				  <span id="message1"></span>
				  <div class="form-group">
				    <label for="fname">First Name</label>
				    <input type="text" id="fname" class="form-control alpha-only" placeholder="Enter First Name" required="True" value="<?php echo $_SESSION['fname']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="lname">Last Name</label>
				    <input type="text" id="lname" class="form-control alpha-only" placeholder="Enter Last Name"	required="True" value="<?php echo $_SESSION['lname']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="dob">Date of Birth</label>
				    <input type="Date" id="datefield" min='1950-01-01' max='2018-01-01' class="form-control" value="<?php echo $_SESSION['birth']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="gender">Gender</label>
				    <select class="form-control" id="gen" >
				    	<option name="Male" <?=$_SESSION['gen'] == 0 ? ' selected="selected"' : '';?>>Male</option>
				    	<option name="Female" <?=$_SESSION['gen'] == 1 ? ' selected="selected"' : '';?>>Female</option>
				    	<option name="Other" <?=$_SESSION['gen'] == 2 ? ' selected="selected"' : '';?>>Other</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="Email">Email address</label>
				    <input type="email" class="form-control" id="email" placeholder="Enter email"	required="True" value="<?php echo $_SESSION['mail']; ?>" readonly>
				  </div>
				  <div class="but">
				  	<button type="button" id="butt" name="butt" class="btn but1" >Update Profile</button>
				  	<button type="button" class="btn but1" data-toggle="modal" data-target="#exampleModal">Change Password</button>
				</div>
				<br>
				  	<div class="but">
				  	<button type="submit" id="butt1" name="butt1" class="btn but1" >Delete Account</button>
				  </div>
				</form>
			</div>
			<div class="col">	
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exampleModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
	        <div id="snackbar">New password saved successfully!</div>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form class="form">
			  <div class="form-group">
			    <label for="OldPassword">Old Password</label>
			    <input type="password" class="form-control" id="OldPassword" placeholder="Old Password"	required="True" >
			  </div>
			  <div class="form-group">
			    <label for="NewPassword">New Password</label>
			    <input type="password" class="form-control" id="password" placeholder="New Password"	required="True">
			  </div>
			  <div class="form-group">
			    <label for="ConfirmPassword">Confirm Password</label>
			    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"	required="True">
			  </div>
			<span id="message"></span>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" id="but11" name="but11" class="btn but1" >Save changes</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

</body>
</html>
<!-- <script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
} 
</script> -->

<script type="text/javascript">

//Matching new and confirm password
	$('#password, #confirm_password').on('keyup', function () {
	  if ($('#password').val() == $('#confirm_password').val() && $('#password').val().length > 7 && $('#confirm_password').val().length > 7) {
	    $('#message').html('Matching').css('color', 'green');
		$(":button").removeAttr("disabled");
	  } else {
	    $('#message').html('Not Matching , length must be greater than 8 character').css('color', 'red');
		$(":button").attr("disabled", true);}
	});
// Matching alphabets,character size,integer and providing useful messages
	$(".alpha-only").on("input", function(){
	  var regexp = /[^a-zA-Z]/g;
	  if($(this).val().match(regexp) || $(this).val().length > 25)
	  {
	  	console.log($(this).val().match(regexp));
	  	console.log($(this).val());
	    $(this).val( $(this).val().replace(regexp,'') );
	    if($(this).val().length > 25)
	    {
	    	$(this).val($(this).val().substring(0, 25)); 
	    }
	    $('#message1').html('No Integers,Spaces allowed & length should not be greater than 25 character').css('color', 'red');
	  }
	  else{
			$('#message1').html('');		
		}
	});
	//For date max date=today
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; 
	var yyyy = today.getFullYear();
	 if(dd<10){
	        dd='0'+dd
	    } 
	    if(mm<10){
	        mm='0'+mm
	    } 

	today = yyyy+'-'+mm+'-'+dd;
	document.getElementById("datefield").setAttribute("max", today);


$(document).ready(function(){
	    $('#butt').on('click',function(){
		  var email = document.getElementById('email').value;
		  var fname = document.getElementById('fname').value;
		  var lname = document.getElementById('lname').value;
		  var dob = document.getElementById('datefield').value;
		  var gen = document.getElementById('gen').value;
		  if(gen == 'Male'){
		  	gen=0
		  }
		  else if(gen == 'Female'){
		  	gen=1
		  }
		  else{
		  	gen=2
		  }
		  
		  var update = 1
		  var data = {'email' : email , 'fname' : fname ,'lname' : lname,'dob' : dob, 'gen' : gen , 'update' : update};
		  
	            $.ajax({
	                type:'POST',
	                url:'profileUD.php',
	                data:data,
	                success:function(response){
//	                       console.log(response);
	                       var obj = JSON.parse(response);
	                       console.log(obj);
			               var fname = obj[0].fname;
			               var lname = obj[0].lname;
			               var dob = obj[0].dob;
			               var gen = obj[0].gen;
			               console.log(fname,lname,dob,gen,"ajax");
			               document.getElementById('fname').value = fname;
			               document.getElementById('lname').value = lname;
			               document.getElementById('datefield').value = dob;
			               document.getElementById('gen').selectedIndex = gen;
			               $('#message1').html("Profile Updated successfully").css('color','green'); 
	                   }
	            }); 
	       
	    });

	    // Change Password 
	    $('#but11').on('click',function(){
		  var email = document.getElementById('email').value;
		  var oldp = document.getElementById('OldPassword').value;
		  var newp = document.getElementById('password').value;
		  var update = 2
		  var data = {'email' : email , 'oldp' : oldp ,'newp' : newp, 'update' : update};
		  console.log(data);
	            $.ajax({
	                type:'POST',
	                url:'profileUD.php',
	                data:data,
	                success:function(response){
	                       console.log(response);
	                 //       var obj = JSON.parse(response);
	                 //       console.log(obj);
			               // var fname = obj[0].fname;
			               // var lname = obj[0].lname;
			               // var dob = obj[0].dob;
			               // var gen = obj[0].gen;
			               // console.log(fname,lname,dob,gen,"ajax");
			               // document.getElementById('fname').value = fname;
			               // document.getElementById('lname').value = lname;
			               // document.getElementById('datefield').value = dob;
			               // document.getElementById('gen').selectedIndex = gen;
			                $('#message').html(response).css('color','green'); 
	                   }
	            }); 
	       
	    }); 	
	});
</script>

