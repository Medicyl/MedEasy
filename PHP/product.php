<?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Medeasy</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../CSS/product.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<body>
  <div id="wrap">
    <div id="product_layout_1">
      <div class="top">
      <div class="product_images">
	        <div class="product_image_1">
	          <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_in/adult/productshots/crocinadvance/455x455.jpg?auto=format" class="display-img"/>
	        </div>
	        <div class="product_image_small">
	          <div class="product_image_2">
	            <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_in/adult/productshots/crocinadvance/455x455.jpg?auto=format"/>
	          </div>
	                    <div class="product_image_3">
	            <img src="https://www.practostatic.com/practopedia-images/res-750/7d15abc42ec9af322412ee19a2ee0938ad41fd531.jpg"/>
	          </div>
	                    <div class="product_image_4">
	            <img src="https://5.imimg.com/data5/VW/SR/MY-17376909/crocin-tablet-500x500.jpg"/>
	          </div>
	        </div>
        </div>
        <div class="product_info">
          <h1>Crocin</h1>
          <div class="price">
          <h2 class="original_price">₹ 90</h2>
          <h2 class="sale_price">₹ 75</h2>
          </div>
          <div class="rating">
            <i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i><i class="fa fa-star-half-o fa-3x"></i><i class="fa fa-star-o fa-3x"></i>
          </div>
          <div class="product_description">
          <p>Oh yes sir. Well, they're your parents, you must know them. What are their common interests, what do they like to do together? You're George McFly. Nothing, nothing, nothing, look tell her destiny has brought you together, tell her that she's the most beautiful you have ever seen. Girls like that stuff. What, what are you doing George? Lorraine, are you up there?</p>
          <p>My insurance, it's your car, your insurance should pay for it. Hey, I wanna know who's gonna pay for this? I spilled beer all over it when that car smashed into me. Who's gonna pay my cleaning bill? Radiation suit, of course, cause all of the fall out from the atomic wars. This is truly amazing, a portable television studio. No wonder your president has to be an actor, he's gotta look good on television. C'mon, he's not that bad. At least he's letting you borrow the car tomorrow night. Ohh, no. What do you mean you've seen this, it's brand new.</p>
          </div>

         <div class="options">
         <div class="buying_options">
         	<h3 align="center" style="color: #000;font-size: 25px"> Packaging Type </h3>
         	<h2 align="center" style="color: #fff;font-size: 20px"> Strip </h2>
          </div>
          <div class="buying">
                 <div class="quantity">
                   <label for="quantity">QTY:</label>
                   <input type="text" placeholder="100">
                 </div>
                 <div class="cart">
                   <a href="../PHP/Checkout.php" class="add">Add to Cart <i class="fa fa-shopping-cart fa-lg"></i></a>
                 </div>
          </div>
          </div>
          </div>
        </div>
        <div class="bottom">
        <div class="reviews">
          <div class="head">
            <h2>Reviews</h2>
          </div>
            <div class="content">
              <span class="name">Marty McFly</span><span class="stars"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-o fa-2x"></i><i class="fa fa-star-o fa-2x"></i></span>
              <p class="review_text">"Check out that four by four. That is hot. Someday, Jennifer, someday. Wouldn't it be great to take that truck up to the lake. Throw a couple of sleeping bags in the back. Whoa, wait, Doc. Here you go, lady. There's a quarter. Well, it will just happen. Like the way I met your father..."</p>
              <p class="fullReview"><a href="#">View Full Review</a></p>
              <span class="writeReview"><a href="#">Write your Own Review</a></span>
            </div>
          </div>
          <div class="related">
            <div class="head">
              <h2>Related Products</h2>
            </div>
            <div class="content">
              <div class="relatedProducts">
                <div class="products">
                  <h4 class="title">Disprin</h4>
                  <div class="image">
                    <img src="https://3.imimg.com/data3/BK/KR/MY-22875491/disprin-tablets-500x500.jpg"/>
                  </div>
                  <h4 class="price">₹ 34</h4>
                </div>
                <div class="products">
                  <h4 class="title">Saradon</h4>
                  <div class="image">
                    <img src="https://3.imimg.com/data3/BK/KR/MY-22875491/disprin-tablets-500x500.jpg"/>
                  </div>
                  <h4 class="price">₹ 45</h4>
                </div>
                <div class="products">
                  <h4 class="title">Crocin 650</h4>
                  <div class="image">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_in/adult/productshots/crocinpainrelief/325x189.jpg?auto=format"/>
                  </div>
                  <h4 class="price">₹ 39</h4>
                </div>
              </div>
            </div>
     
</body>
</html>
 <script type="text/javascript">
 	// Change active class on product sizes.

var sizes = jQuery(".product--size").find("span");
sizes.click(function() {
  sizes.removeClass("active");
  $(this).addClass("active");
});

// Change image on thumbnail click.
var thumbs = $(".product_image_small").find("img");
thumbs.click(function() {
  var src = $(this).attr("src");
  var dp = $(".display-img");
  dp.attr("src", src);
});
 </script>