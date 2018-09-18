<?php
 session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Slabo+27px" rel="stylesheet">
    <title>MedEasy</title>
    <style type="text/css">
    button{
    	/*background-color: #fc4a1a;*/
    	background-color: #f7b733; 
    }
    .a{
    	width: 100%;
    	height: 100%;
    	opacity: 0.3%;
    }
     body{
     	background:rgba(74, 189, 172,1) !important; 
     }
      .jumbo
      {
        text-align:center;
        font-family: 'Slabo 27px', serif;
      }
      .image{
        border:2px solid black;
        padding-bottom:100px;
        padding-top:100px;
      }
      .info{
        margin-top:50px;
            background-color: #e9ecef;
      }

    </style>
  </head>


  
  <body style="text-align: center">
    <div class="a container-fluid">
        <nav class="a navbar navbar-expand-lg navbar-dark bg-dark">

                <a class="navbar-brand" href="../PHP/index.php">MedEasy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="../PHP/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                      <a class="nav-link disabled" href="../HTML/About.html">About Us</a>
                    </li>

                    <li class="nav-item active">
                      <a class="nav-link disabled" href="../HTML/FAQ.html">FAQ</a>
                    </li>

                    <li class="nav-item active">
                      <a class="nav-link disabled" href="../PHP/EditProfile.php">Edit Profile</a>
                    </li>

                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input style="float: right;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button style="float: right;" class="btn  my-2 my-sm-0" type="submit">Search</button>
                  </form>
                    <li class="nav-item dropdown ">
                      <a style="float:right;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" style="width: 10%;border-radius: 50%;">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../HTML/signin.html">Login</a>
                        <a class="dropdown-item" href="../HTML/createaccount.html">Create Account</a>
                      
                    </li>

                </div>
              </nav>
              <div class="a jumbotron jumbotron-fluid jumbo">
                <div class="container">
                	<img class="a" src="https://i1.wp.com/www.buymedicineonline.co.in/wp-content/uploads/2018/09/990x450_medlife.jpg?fit=990%2C450&ssl=1">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">

                   <p><img src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/Wireless/CEEX/Redmi6A/19thsept/D6149486_Redmi_6A_GW_Ingress_PCBunk_1500x300-2._CB485204111_.jpg" alt="banner"></p>
                </div>

              </div>
              <footer>
              <div class="row info">
              <div class="col-md-4">
                  <p>
                      Why do we use it?
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                      
                      </p>
              </div>
              <div class="col-md-4"><p>
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                
                </p></div>
              
              <div class="col-md-4">
                  <p>
                      Why do we use it?
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                      
                      </p>
              </div>
            </div>
            </footer>
            </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>