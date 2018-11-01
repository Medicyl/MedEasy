<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../CSS/About.css">  
</head>
  <nav>
    <?php
    include('navbar.php');
    ?>
  </nav>
<body>
<h1>
ABOUT US
</h1>
<br>
<img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
</h1>
<article class="container">
  <p>
    MEDEASY is one of most trusted pharmacies, experienced in dispensing quality medicines. At MEDEASY, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in Somaiya. You can buy and send medicines from any corner of the Somaiya Campus with just a few clicks of the mouse.
  </p>
</article>
<section>
<div class="social_icons">
  <div class="square">
    <div class="icons">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </div>
  </div>
  <div class="square">
    <div class="icons">
      <i class="fa fa-youtube" aria-hidden="true"></i>
    </div>
  </div>
  <div class="square">
    <div class="icons">
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </div>
  </div>
  <div class="square">
    <div class="icons">
      <i class="fa fa-dribbble" aria-hidden="true"></i>
    </div>
  </div>
</div><br><br><br><br><br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-sm-3">

      <div class="card" style="width:400px;background-color: #000;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xfbjH2CoJY5aUzJulQXB5r3grUQSGCWbCHCCDCHkIZml96EA" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title" style="color: #fff;">Priyam Shah</h4>
          <p class="card-text">Developer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
          <p></p>
        </div>
      </div>
    </div>
    <div class="col-md-1 col-sm-2"></div>

      <div class="col-md-3 col-sm-3">
        <div class="card" style="width:400px;background-color: #000;">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xfbjH2CoJY5aUzJulQXB5r3grUQSGCWbCHCCDCHkIZml96EA" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title" style="color: #fff;">Devansh Solanki</h4>
            <p class="card-text">Developer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
            <p></p>
          </div>
        </div>
      </div>

    <div class="col-md-1 col-sm-2"></div>
    <div class="col-md-3 col-sm-3">
      <div class="card" style="width:400px;background-color: #000;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xfbjH2CoJY5aUzJulQXB5r3grUQSGCWbCHCCDCHkIZml96EA" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title" style="color: #fff;">Mihir Shah</h4>
          <p class="card-text">Developer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
          <p></p>
        </div>
      </div>
    </div>

   
  </div>
</div>

<?php
include('footer.php');
    ?>
  </nav>
</html>
