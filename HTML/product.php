<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
        .mySlides {display:inline-block}
        .demo {cursor:pointer}
        </style>



    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <div class="row" style="margin-top:50px;">
        <div class="col m12 l8">
            <div class="card">
                <div class="card-image"> 
                <div class="container image-container" style="width: 50%a;">
                    <img class="mySlides" src="ms.png" style="width: 100%;">
                    <img class="mySlides" src="logo1.png" style="width:100%">
                </div>
                <div class="w3-row-padding w3-section">
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="ms.png" style="width: 50px;" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="logo1.png" style="width: 50px;" onclick="currentDiv(2)">
                </div>
                </div>
            </div>
        </div>
        </div>
            <div class="col m12 l4">
                <div class="card ">
                    <div class="card-content black-text">
                    <span class="card-title">MIHIR SHAH</span>
                    <br> 
                    <h5>Product Description</h5> 
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>  
                    <br><p>M.R.P.: Rs <span style="text-decoration: line-through;">120</span></p>
                    <p>Price: Rs <span style="color: rgba(255, 0, 0, 0.719);">80</span></p>
                    <p>You Saved: Rs <span style="color:rgba(255, 0, 0, 0.719);">40</span> (33%)</p>
                
                </div>
                    <div class="card-action">
                    <form>
                        <div class = "row">
                            <label>Quantity</label>
                            <select class = "browser-default">
                                <option value = "1" selected="">1</option>
                                <option value = "2" >2</option>
                                <option value = "3" >3</option>
                                <option value = "4" >4</option>
                                <option value = "5" >5</option>
                                <option value = "6" >6</option>
                                <option value = "7" >7</option>
                                <option value = "8" >8</option>
                                <option value = "9" >9</option>
                                <option value = "10" >10</option>
                                <option value = "11" >11</option>
                                <option value = "12" >12</option>
                            </select>
                         </div>
                        <a class="waves-effect waves-light btn"><i class="material-icons">add_shopping_cart</i>ADD TO CART</a>
                    </form>
                    </div>
                </div>
            </div>
  </div>

  <div class="row">
    

    

</div>


<!--  
        <img class="mySlides" src="ms.png" style="width:50%">
        <img class="mySlides" src="logo1.png" style="width:50%">
        <img class="mySlides" src="kjsce logo.png" style="width:50%">
      
        <div class="w3-row-padding w3-section">
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="ms.png" style="width:50%" onclick="currentDiv(1)">
          </div>
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="logo1.png" style="width:50%" onclick="currentDiv(2)">
          </div>
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="kjsce logo.png" style="width:50%" onclick="currentDiv(3)">
          </div>
        </div> -->
            


  
                

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
            showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>
  </body>
</html>