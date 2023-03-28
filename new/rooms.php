 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon">  
      <link rel="stylesheet" href="CSS\rooms.css">
      <link rel="stylesheet" href="CSS\header.css">
      <title>Rooms</title>
   </head>
   <body >      
      <header id="header-style">
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo3.png" alt="..">
         <img src="techno tour website design pro\NCT logo3.png" style="margin-left:50px;"  width="0px" alt="">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <li><a href="booking.php" class="links">Booking</a></li>
            <li><a href="what's new.php" class="links">What's New</a></li>
            <li><a href="contact us.php" class="links">Contact Us</a></li>
            <li><a href="about us.php" class="links">About Us</a> </li>
         </ul>
         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a href="form.php" id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><img class="login-logo-img" src="techno tour website design pro\login.png" alt=".."></div>
      </header>
      
      <div id="f-btns">
         <div id="f-btn1" onclick="floor1();" class="fbtn">Floor 1</div>
         <div id="f-btn2" onclick="floor2();" class="fbtn">Floor 2</div>
         <div id="f-btn3" onclick="floor3();" class="fbtn">Floor 3</div>
         <div id="f-btn4" onclick="floor4();" class="fbtn">Floor 4</div>
         
      </div>
<div id="cont-home">
         <div class="container">
            <div id="cube">
               <!--************************** face 1  ***************************************************************-->
               <div id="f1" class="face">
                  <div id="row1">
                     <div id="a106"  class="rooms">A106</div>
                     <div id="a105"  class="rooms">A105</div>
                     <div id="a104"  class="rooms">A104</div>
                     <div id="a103"  class="rooms">A103</div>
                  </div>
                  <div id="row2">
                     <div id="a108" class="rooms">A108</div>
                     <div id="a107"  class="rooms">A107</div>
                     <div id="a101" class="rooms">A101</div>
                     <div id="a102" class="rooms">A102</div>
                  </div>
               </div>
               <!--************************** face 2  ***************************************************************-->
               <div id="f2" class="face">
                  <div id="row1">
                     <div id="a207" class="rooms">A207</div>
                     <div id="a206" class="rooms">A206</div>
                     <div id="a205" class="rooms">A205</div>
                     <div id="a204" class="rooms">A204</div>
                     <div id="a203" class="rooms">A203</div>
                  </div>
                  <div id="row2">
                     <div id="a210" class="rooms">A210</div>
                     <div id="a209" class="rooms">A209</div>
                     <div id="a208" class="rooms">A208</div>
                     <div id="a201" class="rooms">A201</div>
                     <div id="a202" class="rooms">A202</div>
                  </div>
               </div>
               <!--************************** face 3  ***************************************************************-->
               <div id="f3" class="face">
                  <div id="row1">
                     <div id="a307" class="rooms">A307</div>
                     <div id="a306" class="rooms">A306</div>
                     <div id="a305" class="rooms">A305</div>
                     <div id="a304" class="rooms">A304</div>
                     <div id="a303" class="rooms">A303</div>
                  </div>
                  <div id="row2">
                     <div id="a310" class="rooms">A310</div>
                     <div id="a309" class="rooms">A309</div>
                     <div id="a308" class="rooms">A308</div>
                     <div id="a301" class="rooms">A301</div>
                     <div id="a302" class="rooms">A302</div>
                  </div>
               </div>
               <!--************************** face 4  ***************************************************************-->
               <div id="f4" class="face">
                  <div id="row1">
                     <div id="a407" class="rooms">A407</div>
                     <div id="a406" class="rooms">A406</div>
                     <div id="a405" class="rooms">A405</div>
                     <div id="a404" class="rooms">A404</div>
                     <div id="a403" class="rooms">A403</div>
                  </div>
                  <div id="row2">
                     <div id="a409" class="rooms">A409</div>
                     <div id="a408" class="rooms">A408</div>
                     <div id="a401" class="rooms">A401</div>
                     <div id="a402" class="rooms">A402</div>
                  </div>
               </div>
               <!--************************** buttom  ***************************************************************-->
               <div id="bottom" class="face"></div>
            </div>
         </div>
        </body>
        <script src="JS/home js.js"></script>

        </html>