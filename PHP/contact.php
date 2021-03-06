<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">
  body{
      background:#7e7e7f !important;
  }
  h1,h3{
    color: #fff !important;
  }

	 #contact{
    padding:10px 0 10px;
  }

  .contact-text{
    margin:45px auto;
  }

  .mail-message-area{
    width:100%;
    padding:0 15px;
  }

  .mail-message{
    width: 100%;
    background:rgba(255,255,255, 0.8) !important;
    -webkit-transition: all 0.7s;
    -moz-transition: all 0.7s;
    transition: all 0.7s;
    margin:0 auto;
    border-radius: 0;
  }

  .not-visible-message{
    height:0px;
    opacity: 0;
  }

  .visible-message{
    height:auto;
    opacity: 1;
    margin:25px auto 0;
  }

/* Input Styles */

  .form{
    width: 100%;
    padding: 15px;
    background:#f8f8f8;
    border:1px solid rgba(0, 0, 0, 0.075);
    margin-bottom:25px;
    color:#727272 !important;
    font-size:13px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }

  .form:hover{
    border:1px solid #8BC3A3;
  }

  .form:focus{
    color: white;
    outline: none;
    border:1px solid #8BC3A3;
  }

  .textarea{
    height: 200px;
    max-height: 200px;
    max-width: 100%;
  }
  
/* Generic Button Styles */

  .button{
    padding:8px 12px;
    background:#fc4a1a;
    display: block;
    width:120px;
    margin:10px 0 0px 0;
    border-radius:3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    text-align:center;
    font-size:0.8em;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .button:hover{
    background:white;
    color:#fc4a1a;
  }

/* Send Button Styles */

  .form-btn{
    width:180px;
    display: block;
    height: auto;
    padding:15px;
    color:#fff;
    background:#fc4a1a;
    border:none;
    border-radius:3px;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin:auto;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .form-btn:hover{
    background:white;
    color: #fc4a1a;
    border:1.5px solid #fc4a1a;
  }

  .form-btn:active{
    opacity: 0.9;
  }
center{
  margin-top:330px;
}
input {
    position: relative;
    z-index: 9999;
}
</style>
  <nav>
    <?php
    include('navbar.php');
    ?>
  </nav>
<body>
	<div class="container-fluid">
		<div class="row">
			<h1 align="center">Contact Us</h1>
			<div class="col-md-6">
				<h3 align="center">Location<h3>
				<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=19.07274095,72.90080364918467&amp;q=K%20J%20Somaiya%20College%20Of%20Engineering%2CVidyavihar+(MedEasy)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />

			</div>
			<div class="col-md-6">
				<h3 align="center">Write Us</h3><br/>
					<div class="inner contact">
	                <!-- Form Area -->
	                <div class="contact-form">
	                    <!-- Form -->
	                    <form id="contact-us" method="post" action="#">
	                        <!-- Left Inputs -->
	                        <div class="relative fullwidth col-xs-12">
	                            <!-- Name -->
	                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
	                            <!-- Email -->
	                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
	                            <!-- Subject -->
	                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
	                      
	                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
	                        </div>
	                        <div class="relative fullwidth col-xs-12">

	                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
	                        </div>
	                    </form>
	                </div>
	            </div>
			</div>
		</div>
		<div class="col-md-12">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <h3 align="center">Call Us</h3>
          <p align="center"><a href="tel:+120 4156416515" style="color: #fff;">+120 4156416515</a></p>
        </div>
        <div class="col-sm-12 col-lg-6">
          <h3 align="center">Mail Us</h3>
          <p align="center"><a href="mailto:ms@shah.com?Subject=Give%20Feedback" target="_top" style="color: #fff;">help@medeasy.com</a></p>
        </div>
			</div>
      <h3 align="center">Visit Us</h3>
			<p align="center" style="color: #fff;">K. J. Somaiya College of Engineering,Vidyanagar, Vidya Vihar East, Ghatkopar East, Mumbai, Maharashtra 400077</p>
		</div>
	</div>
  <?php
    include('footer.php');
    ?>
  </nav>
</body>
</html>