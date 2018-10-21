<?php
 session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>MedEasy</title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--     <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
 
  </head>

  <nav>
    <?php
    include('navbar.php');
    ?>
  </nav>
  <body class="parallax">
    <!-- Carousel Discount vala -->
    <div class="container-fluid">   
      <div class="row">    
        <div id="carousel-1" class="carousel slide">
          <div class="carousel-inner" role="listbox">
          </div>
          <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
          <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
    <!-- Top Category Items -->
<div class="container-fluid">
  <h1 class="text-center mb-3" style="color:#fc4a1a; border: 1px solid; background:rgba(255,255,255,0.7)">Trending Items</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="https://cdn.medisave.co.uk/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/o/m/om246_ba.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Omron Thermometer</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
          <div class="card">
          <a href="product.php"><img class="card-img-top img-fluid" src="http://www.swadeshaj.com/1561-thickbox_default/dabur-chyawanprash-orange-flavour.jpg" alt="Card image cap"></a>
            <div class="card-body">
              <h4 class="card-title">Dabar Chyawanprash</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="https://www.waangoo.com/content/images/thumbs/0020925_glucon-d-powder-energy-drink-orange_600.jpeg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Glucon-D Orange</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 
  </div>
</div>
<br>
<?php
 include('footer.php');
 ?>

  </body>

</html>
<!-- Carousel Discount vala scrpt -->
<script type="text/javascript">
var selectCarousel = $('#carousel-1');
var selectInner = selectCarousel.find('.carousel-inner');


$(document).ready( function() {
  selectInner.children('.item').remove();
  selectInner.append('<div class="item active"><img src="https://www.netmeds.com/pub/media/wysiwyg/offers/nms25/2018/10/01/web/home.jpg" alt=""></div>');
  selectInner.append('<div class="item"><img src="https://www.netmeds.com/pub/media/aw_rbslider/slides/refer_a_friend_banner_2_1.jpg" alt=""></div>');
  selectInner.append('<div class="item"><img src="https://www.netmeds.com/pub/media/wysiwyg/offers/PhonePe/2018/10/01/web/home.jpg" alt=""></div>');
  selectInner.append('<div class="item"><img src="https://www.netmeds.com/pub/media/wysiwyg/offers/dhoni/2018/09/18/web/home.jpg" alt=""></div>');
  
  selectCarousel.carousel();


});

</script>

<!-- Carousel Cards script -->
<script type="text/javascript">
var myCarousel = $('#myCarousel');
  
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
  myCarousel.carousel();


</script>