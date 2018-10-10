<?php
 session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>MedEasy</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/shop.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/product.css">

  </head>
 <body>
 	<div class="product">
  <div class="product--title">
    <h2>My Awesome Product</h2>
  </div>
  <div class="product--body">
  <div class="product--image">
    <div class="icon-images">
      <img src="https://4.imimg.com/data4/PK/LC/MY-9666337/clindamycin-300mg-tablets-250x250.jpg"/>
      <img src="https://4.imimg.com/data4/RL/EG/MY-11428322/iron-ferrous-ascorbate-folic-acid-zinc-tablets-500x500.jpg"/>
      <img src="http://5.imimg.com/data5/JY/XV/MY-23618296/clindamycin-300mg-capsule-500x500.jpg"/>
    </div>
    <img src="https://5.imimg.com/data5/CV/MV/MY-10830397/antibiotic-500x500.jpg" class="display-img">
  </div>
  <div class="product--details">
  <div class="product--price">
    <span class="product--price_price">Rs. 800</span>
    <span class="product--price_offer">new arrivel !</span>
  </div>
    <div class="product--desc"><p>This is my awesome product.Take twice.</p></div>
  <div class="product--size">
    <span>tab</span>
    <span class="active">serup</span>
    <span>l</span>
    <span>xl</span>
  </div>
  <div class="product--quantity">
    <input class="quantity" type="number" placeholder="quantity" min="1" max="10" value="1"></input>
  </div>
    <div class="add-to-cart">
      <button class="btn btn--cart">Shop it!</button>
    </div>
  </div>
  </div>
</div>
 </body>
 <script type="text/javascript">
 	// Change active class on product sizes.

var sizes = jQuery(".product--size").find("span");
sizes.click(function() {
  sizes.removeClass("active");
  $(this).addClass("active");
});

// Change image on thumbnail click.
var thumbs = $(".icon-images").find("img");
thumbs.click(function() {
  var src = $(this).attr("src");
  var dp = $(".display-img");
  dp.attr("src", src);
});
 </script>