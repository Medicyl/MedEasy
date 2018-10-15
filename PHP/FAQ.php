<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/FAQ.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
  <nav>
    <?php
    include('navbar.php');
    ?>
  </nav>
<body>
  <h1 align="center">Frequently Asked Questions</h1>
	<main>
  <div class="topic">
    <div class="open">
      <h2 class="question">1. How can i delete my complaint/comment?</h2>
      <span class="faq-t"></span>
    </div>
    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="topic">
    <div class="open">
    <h2 class="question">2. I have posted a complaint/comment, but it doesn’t appear on the website. Why? When my complaint will be posted?
</h2><span class="faq-t"></span>
    </div>
    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="topic">
    <div class="open">
    <h2 class="question">3. How can I edit a complaint I posted?
</h2><span class="faq-t"></span>
    </div>
    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="topic">
    <div class="open">
    <h2 class="question">4. How can i find out personal information of another user?
</h2><span class="faq-t"></span>
    </div>
    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="topic">
    <div class="open">
    <h2 class="question">5. How can i contact another user?
</h2><span class="faq-t"></span>
    </div>
    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</main>
<?php
    include('footer.php');
    ?>
  </nav>
</body>
</html>
<script type="text/javascript" >
		
		$(".open").click( function () {
		  var container = $(this).parents(".topic");
		  var answer = container.find(".answer");
		  var trigger = container.find(".faq-t");
		  
		  answer.slideToggle(200);
		  
		  if (trigger.hasClass("faq-o")) {
		    trigger.removeClass("faq-o");
		  }
		  else {
		    trigger.addClass("faq-o");
		  }
		  
		  if (container.hasClass("expanded")) {
		    container.removeClass("expanded");
		  }
		  else {
		    container.addClass("expanded");
		  }
		});
</script>