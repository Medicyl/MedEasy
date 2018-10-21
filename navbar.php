<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 -->  <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>

  <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!--=========-TOP_BAR============-->
  <nav class="topBar">
    <div class="container">
      <ul class="list-inline pull-left hidden-sm hidden-xs">
        <li><span style="color: #fff;">Have a question?</span> &nbsp;<a href="PHP/contact.php"><span style="color: #fff;">Contact Us</span></a></li>
      </ul>
      <ul class="topBarNav pull-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5" style="color: #fff;"></i><span class="hidden-xs" style="color: #fff;">My Account<i class="fa fa-angle-down ml-5" style="color: #fff;"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">
            <?php
              if(isset($_SESSION['mail']))
              {
                 echo 
                '<li><a href="PHP/editprofile.php">Edit Profile</a>
                <li><a href="PHP/logout.php">Logout</a>';
              }
              
            ?>
            <?php
              if(empty($_SESSION['mail']))
              {
                 echo 
                '<li><a href="HTML/signin.html">Login</a></li>
                <li><a href="HTML/createaccount.html">Create Account</a></li>';
              }
              
            ?>            

            <li class="divider"></li>
            <li><a href="#">My Cart</a>
            </li>
            <li><a href="PHP/Checkout.php">Checkout</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5" style="color: #fff;"></i> <span class="hidden-xs" style="color: #fff;">
                                Cart <sup class="text-primary" style="color: #fff;">(3)</sup>
                                <i class="fa fa-angle-down ml-5" style="color: #fff;"></i>
                            </span> </a>
          <ul class="dropdown-menu cart w-250" role="menu">
            <li>
              <div class="cart-items">
                <ol class="items">
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-Gy3KAlilHAw/WNf7a2eL5YI/AAAAAAAAD2Y/V3jUt14HiZA3HLpeOKkSaOu57efGuMw9ACL0B/w245-d-h318-n-rw/shoes_01.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">xyz@gmail.com</a> </p> <strong>1</strong> x <span class="price text-primary">Rs 59.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-Gy3KAlilHAw/WNf7a2eL5YI/AAAAAAAAD2Y/V3jUt14HiZA3HLpeOKkSaOu57efGuMw9ACL0B/w245-d-h318-n-rw/shoes_01.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$39.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-ydDc-0L0WFY/WNf7a6Awe_I/AAAAAAAAD2Y/I8IzJtYRWegkOUxCZ5SCK6vbdiiSxVsCQCL0B/w245-d-h318-n-rw/bags_07.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$29.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                </ol>
              </div>
            </li>
            <li>
              <div class="cart-footer"> <a href="#" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View
          Cart</a> <a href="HTML/Checkout.html" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav><!--=========-TOP_BAR============-->
    
 <!--=========MIDDEL-TOP_BAR============-->
    
    <div class="middleBar">
    <div class="container">
  <div class="row display-table">
    <div class="col-sm-3 vertical-align text-left hidden-xs">
      <a href="javascript:void(0);"> <img width="200px" height="55px" src="http://medeasyinc.com/wp-content/uploads/2018/08/MedEasy_Logo_New.png" alt="MedEasy"></a>
    </div>
    <!-- end col -->
    <div class="col-sm-7 vertical-align text-center">
      <form action="PHP/search.php" method="POST">
        <div class="row grid-space-1">
          <div class="col-sm-6">
            <input type="text" id="search" name="keyword" class="form-control input-lg" placeholder="Search">
         </div>
          <!-- end col -->
          <div class="col-sm-3">

          <select class="form-control input-lg" name="category">
              <option value="all">All Categories</option>
              <optgroup label="Health Care">
                <option value="dettol">Dettol Antiseptic</option>
                <option value="moov">Moov Ointment</option>
                <option value="zandu balm">Zandu Balm</option>
                <option value="eno">Eno</option>
                <option value="relispray">Relispray</option>
                <option value="bandaid">Johnson & Johnson Band-Aid</option>
                <option value="coughq">CoughQ</option>
                <option value="pudinhara">Dabar Pudinhara</option>
                <option value="dollo">Dollo</option>
              </optgroup>
              <optgroup label="Herbal And Ayrveda">
                <option value="dpudinhara">Dabar Pudinhara</option>
                <option value="amritarishta">Dabar Amritarishta</option>
                <option value="btablet">Brahmi Tablet</option>
                <option value="ojasvita">Sri Sri Tattva Ojasvita</option>
                <option value="ashwagandha">Dabar Ashwagandha Churna</option>
                <option value="pchyavanprash">Patanjali Chyavanprash</option>
              </optgroup>
              <optgroup label="Food And Nutrition">
                <option value="glucond">Glucon-D</option>
                <option value="htea">Herbal Tea</option>
                <option value="dchyavanprash">Dabar Chyavanprash</option>
                <option value="ojasvita">Sri Sri Tattva Ojasvita</option>
                <option value="protinex">Protinex</option>
                <option value="dhoney">Dabar Honey</option>
              </optgroup>
              <optgroup label="Diabetic Care">
                <option value="sugarfree">Sugar Free</option>
                <option value="sugarfightertea">Sugar fighter sweetened green tea</option>
                <option value="protinexdiabetes">Protinex diabetes powder</option>
                <option value="healthvitalivcare">Healthvita Liv Care Capsule</option>
              </optgroup>
              <optgroup label="Medical Equipments">
                <option value="morpenbpmonitor">Dr. Morpen BP Monitor</option>
                <option value="omoronthermometer">Omoron Thermometer</option>
                <option value="flamingoarm">Flamingo Arm Supporter</option>
                <option value="flamingoknee">Flamingo Knee Pad</option>
                <option value="morpengloves">Dr. Morpen Hand Gloves</option>
                <option value="dispovansyringe">Dispovan Syringe</option>
                <option value="omoronglucosemonitor">Omoron Glucose Monitor</option>
              </optgroup>
            </select>
          
          </div>
          <!-- end col -->
          <div class="col-sm-3">
            <input type="submit" class="btn btn-default btn-block btn-lg" value="Search" name="submit">
         </div>

          <!-- end col -->
        </div>
        <!-- end row -->
      </form>
    </div>
    <!-- end col -->
    <!-- end col -->
  </div>
  <!-- end  row -->
</div>
</div>
    
    
<nav class="navbar-default" role="navigation" style="opacity: 1;">
          <div class="container">
            <!-- Brand and toggle -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>             
            </div>
        
            <!-- Collect the nav links,  -->
            <div class="collapse navbar-collapse navbar-1" style="margin-top: 0px;">            
              <ul class="nav navbar-nav">
                <li><a href="PHP/index.php">Home</a></li>
                  
                  
                <li><a href="PHP/About.php"  >About Us</a></li>
                <li><a href="PHP/contact.php" >Contact Us</a></li>
                <li><a href="PHP/shop.php">Shop</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >Pages<i class="fa fa-angle-down ml-5"></i></a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li><a href="PHP/FAQ.php">FAQ</a></li>
                    <li><a href="PHP/Terms.php">Terms & Conditions</a></li>
                  </ul>
                </li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
    
    
    
    
    
    
    
    
    
    
    
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript">
    ! function($, n, e) {
      var o = $();
      $.fn.dropdownHover = function(e) {
        return "ontouchstart" in document ? this : (o = o.add(this.parent()), this.each(function() {
          function t(e) {
            o.find(":focus").blur(), h.instantlyCloseOthers === !0 && o.removeClass("open"), n.clearTimeout(c), i.addClass("open"), r.trigger(a)
          }
          var r = $(this),
            i = r.parent(),
            d = {
              delay: 100,
              instantlyCloseOthers: !0
            },
            s = {
              delay: $(this).data("delay"),
              instantlyCloseOthers: $(this).data("close-others")
            },
            a = "show.bs.dropdown",
            u = "hide.bs.dropdown",
            h = $.extend(!0, {}, d, e, s),
            c;
          i.hover(function(n) {
            return i.hasClass("open") || r.is(n.target) ? void t(n) : !0
          }, function() {
            c = n.setTimeout(function() {
              i.removeClass("open"), r.trigger(u)
            }, h.delay)
          }), r.hover(function(n) {
            return i.hasClass("open") || i.is(n.target) ? void t(n) : !0
          }), i.find(".dropdown-submenu").each(function() {
            var e = $(this),
              o;
            e.hover(function() {
              n.clearTimeout(o), e.children(".dropdown-menu").show(), e.siblings().children(".dropdown-menu").hide()
            }, function() {
              var t = e.children(".dropdown-menu");
              o = n.setTimeout(function() {
                t.hide()
              }, h.delay)
            })
          })
        }))
      }, $(document).ready(function() {
        $('[data-hover="dropdown"]').dropdownHover()
      })
    }(jQuery, this);
  </script>
</body>

</html>