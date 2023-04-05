<?php 
include_once "databasemysqli.php";
include_once "login.php";
  if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
   session_start();
   $_SESSION["id"]=$_COOKIE['user'];
   $sql="SELECT*FROM members WHERE id={$_COOKIE['user']}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
  }else{
   session_start();
   session_unset();
   session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon">  
      <link rel="stylesheet" href="CSS\Home.css">
      <link rel="stylesheet" href="CSS\header.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      <title>TecnoTour</title>
   </head>
   <body>      
      <header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo2.png" alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
                        <?php if(isset($getuser)){ 
                   if($getuser['position']!="Technical"){
                     echo "<li><a href='booking.php' class='links'>Booking</a></li>";
                  } 
                  } ?>
            <li><a href="what's new.php" class='links'>What's New</a></li>
            <li><a href='contact us.php' class='links'>Contact Us</a></li>
            <li><a href='about us.php'class='links'>About Us</a> </li>


       
         </ul>

         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a 
         <?php
          if(isset($getuser)){
            echo "onclick='logout_show();'";
            }else{
            echo "href='form.php'";
              }
         ?> id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><img class="login-logo-img" onclick="logout_show();" src="techno tour website design pro\login.png" alt=".."></div>
         <?php if(isset($getuser)){echo "
         <form method='post' id='out_form'>            

            <button name='logout' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'><img src='techno tour website design pro\logout.png' id='logout' title='log out' width='23px'></button>

            </form>
            ";} ?>
      </header>
      <div id="bage1" >

      <main style="display:flex;flex-direction:column;">
         <div class="hero">
            
               <img src="techno tour website design pro/background light theme3.png" class="bg-img" style="size:cover;">
               <div id="hero-text2">
                  <div class="hero-text">
                     <div id="btn">
                         <div id="btn1">

                         </div>
                      </div>
                  </div>
               </div>
                     <font style="color:white;font-size:40px; margin-top:0%;align-items:center;text-align:center;" class="hero-header">
                     THE BEST BOOKING GUIDE
                     FOR DOCTORS,ASSISTANTS,STUDENTS <br>
                     AND EXTERNAL USERS IN NCTU.<br>
                     <span style="color:white;font-size:20px;font-family:Roboto,sans-serif;font-weight:600;">
                     “Life is my university, and I hope to graduate <br> from it with some distinction.” ~ Louisa May Alcott
                     </span>                         
                     <br>
                     <button type="button" onclick="window.location.assign('rooms.php');" id="NCT-button" class="tour-button">
                          Rooms
                         </button>
                     </font>
                     

         </div> 
         <br><br>           
         <div id="hero-section">
         <img src="techno tour website design pro/labs/networking lab.jpg" class="img-gal" width="280px">
         <img src="techno tour website design pro/labs/IT lab.jpg" class="img-gal" width="280px">
         <img src="techno tour website design pro/labs/electric lab.jpg" class="img-gal" width="280px">
         <img src="techno tour website design pro/labs/physics lab2.jpg" class="img-gal" width="280px">
         <img src="techno tour website design pro/labs/physics lab1.jpg" class="img-gal" width="280px">
         </div>
      </main>
   </div>
   <br><br>
   <div id="bage2">
   <br>
   <div id="particles-js"></div>
                        <img src="techno tour website design pro/NCT logo.png" width="500px"> 
                        <br><br><br>
                    <div id="building-div"> <img id="building" src="techno tour website design pro/NCT building.png"  alt="uni-photo">  </div> 
      <p id="about-uni">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut<br>
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris<br>
           nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis<br>
             nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div id="u-contact"> 
         <a href="http://nctu.edu.eg" style="font-family: Impact;text-decoration: none;color:white;">NCTU</a>
       <img onclick="window.location.assign('https://www.facebook.com/nctu.edu.eg/');" src="techno tour website design pro/facebook.png" style="cursor: pointer;" width="30px"> 
      </div>
   </div>
   <div id="scrollup" onclick="scrollup();">Up</div>
   </body>
   <script src="JS/home js.js"></script>
   <script src="JS/header.js"></script>
   <script type="text/javascript" src="JS/particles.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
</html>
