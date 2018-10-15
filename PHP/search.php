<?php
 session_start();
 include_once "connection.php";
 if(isset($_POST['submit'])){
 		  	$search_key =mysqli_real_escape_string($conn, $_POST['keyword']);
			$category  =mysqli_real_escape_string($conn,$_POST['category']);
 	?>
	<!doctype html>
	<html lang="en">
	<head>
	    <title>MedEasy</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/shop.css">

  	</head>
	  <nav>
	 	<?php
	    include('navbar.php');
	    ?>
	  </nav>
  <body>

    <div class="container-fluid">
        <div class="row">

	  <?php

			if(!empty($search_key)){
					$sql=mysqli_query($conn,"SELECT * FROM product where p_name LIKE '%".$search_key."%'");
					if(mysqli_num_rows($sql) == 0){
							?>
							<h1 align="center" style="color: #ff0000;">Oops ! We don't have <?php echo $search_key ?></h1>
							<?php
							}
						else{
				            while($row = mysqli_fetch_assoc($sql)){
				              ?>
		                      <div class="col-md-2 col-sm-4">
		                        
		                              <div class="card">
		                                <div class="card-image activator">
		                                    <div class="price">
		                                    <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">₹ <?php echo $row['p_price'] ?></a>
		                                  </div>
		                                    <img class="activator" src="<?php echo $row['p_image'] ?>" style="max-width: 100%;">
		                                
		                                
		                                      <ul class="add-item">
		                                        <li style="display: inline-block;">
		                                            <a class=" btn-floating waves-effect waves-light deep-blue" ><i class="material-icons">add_shopping_cart</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a class=" activator  btn-floating waves-effect waves-light deep-orange"><i class="material-icons">info_outline</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a href="../PHP/product.php" class="btn-floating waves-effect waves-light deep-blue"><i class="material-icons">visibility</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a href="../PHP/Checkout.php" class="btn-floating waves-effect waves-light deep-orange"><i class="material-icons">attach_money</i></a>
		                                        </li>
		                                      </ul>
		                               
		                                
		                                    <div class="card-content">
		                                      <p align="center" class="product-text white-text"><b><?php echo $row['p_name'] ?></b></p>
		                                    </div>
		                                
		                                </div>
		                                <div class="card-reveal waves-effect waves-light deep-orange">
		                                <span class="card-title white-text text-darken-4"><?php echo $row['p_name'] ?><i class="material-icons right">close</i></span>
		                                <p style="font-size: 16px;" class="white-text text-darken-4"><?php echo $row['p_description'] ?><br>MFG Date: <?php echo $row['p_mfg_date'] ?><br>Exp Date: <?php echo $row['p_exp_date'] ?><br>Quantity: <?php echo $row['p_quantity'] ?><br>Type: <?php echo $row['p_type'] ?>.</p>
		                              </div>
		                              </div>

		                                   
		                      </div>
		              <?php
							
						}
					}
				}
				else if($category == 'all'){
						$sql=mysqli_query($conn,"SELECT * FROM product");
						
						if($sql){
							while($row = mysqli_fetch_assoc($sql)){
								//echo $row['p_name'];?>
		                  <div class="col-md-2 col-sm-4">
		                    
		                          <div class="card">
		                            <div class="card-image activator">
		                                <div class="price">
		                                <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">₹ <?php echo $row['p_price'] ?></a>
		                              </div>
		                                <img class="activator" src="<?php echo $row['p_image'] ?>" style="max-width: 100%;">
		                            
		                            
		                                  <ul class="add-item">
		                                    <li style="display: inline-block;">
		                                        <a class=" btn-floating waves-effect waves-light deep-blue" ><i class="material-icons">add_shopping_cart</i></a>
		                                    </li>
		                                    <li style="display: inline-block;">
		                                        <a class=" activator  btn-floating waves-effect waves-light deep-orange"><i class="material-icons">info_outline</i></a>
		                                    </li>
		                                    <li style="display: inline-block;">
		                                        <a href="../PHP/product.php" class="btn-floating waves-effect waves-light deep-blue"><i class="material-icons">visibility</i></a>
		                                    </li>
		                                    <li style="display: inline-block;">
		                                        <a href="../PHP/Checkout.php" class="btn-floating waves-effect waves-light deep-orange"><i class="material-icons">attach_money</i></a>
		                                    </li>
		                                  </ul>
		                           
		                            
		                                <div class="card-content">
		                                  <p align="center" class="product-text white-text"><b><?php echo $row['p_name'] ?></b></p>
		                                </div>
		                            
		                            </div>
		                            <div class="card-reveal waves-effect waves-light deep-orange">
		                            <span class="card-title white-text text-darken-4"><?php echo $row['p_name'] ?><i class="material-icons right">close</i></span>
		                            <p style="font-size: 16px;" class="white-text text-darken-4"><?php echo $row['p_description'] ?><br>MFG Date: <?php echo $row['p_mfg_date'] ?><br>Exp Date: <?php echo $row['p_exp_date'] ?><br>Quantity: <?php echo $row['p_quantity'] ?><br>Type: <?php echo $row['p_type'] ?>.</p>
		                          </div>
		                          </div>

		                               
		                  </div>

							<?php
							}
						}
									
					}
			else{
					$sql=mysqli_query($conn,"SELECT * FROM product where p_name LIKE '%".$category."%'");
					if(mysqli_num_rows($sql) == 0){
							?>
							<h1 align="center" style="color: #ff0000;">Oops ! We don't have <?php echo $category ?></h1>
							<?php
							}
						else{
				            while($row = mysqli_fetch_assoc($sql)){
				              ?>
		                      <div class="col-md-2 col-sm-4">
		                        
		                              <div class="card">
		                                <div class="card-image activator">
		                                    <div class="price">
		                                    <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">₹ <?php echo $row['p_price'] ?></a>
		                                  </div>
		                                    <img class="activator" src="<?php echo $row['p_image'] ?>" style="max-width: 100%;">
		                                
		                                
		                                      <ul class="add-item">
		                                        <li style="display: inline-block;">
		                                            <a class=" btn-floating waves-effect waves-light deep-blue" ><i class="material-icons">add_shopping_cart</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a class=" activator  btn-floating waves-effect waves-light deep-orange"><i class="material-icons">info_outline</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a href="../PHP/product.php" class="btn-floating waves-effect waves-light deep-blue"><i class="material-icons">visibility</i></a>
		                                        </li>
		                                        <li style="display: inline-block;">
		                                            <a href="../PHP/Checkout.php" class="btn-floating waves-effect waves-light deep-orange"><i class="material-icons">attach_money</i></a>
		                                        </li>
		                                      </ul>
		                               
		                                
		                                    <div class="card-content">
		                                      <p align="center" class="product-text white-text"><b><?php echo $row['p_name'] ?></b></p>
		                                    </div>
		                                
		                                </div>
		                                <div class="card-reveal waves-effect waves-light deep-orange">
		                                <span class="card-title white-text text-darken-4"><?php echo $row['p_name'] ?><i class="material-icons right">close</i></span>
		                                <p style="font-size: 16px;" class="white-text text-darken-4"><?php echo $row['p_description'] ?><br>MFG Date: <?php echo $row['p_mfg_date'] ?><br>Exp Date: <?php echo $row['p_exp_date'] ?><br>Quantity: <?php echo $row['p_quantity'] ?><br>Type: <?php echo $row['p_type'] ?>.</p>
		                              </div>
		                              </div>

		                                   
		                      </div>
		              <?php
							
						}
					}
				}

		//  echo $search_key." ".$category; 

		 }

	 ?>
	 	</div>
	</div>
	<?php
    include('footer.php');
    ?>
  </nav>
	</body>

	</html>