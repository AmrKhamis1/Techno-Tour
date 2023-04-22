<?php 

function getuser($user){
   include "database/databasemysqli.php";
   $sql="SELECT*FROM members WHERE id={$user}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
   return $getuser;
}
  session_start();
   if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
   $_SESSION["id"]=$_COOKIE['user'];
   $getuser=getuser($_SESSION["id"]);
  }else{
  if(isset($_SESSION["id"])){
   $getuser=getuser($_SESSION["id"]);
  }
  else{
   $getuser=NULL;
   session_unset();
   session_destroy();
  }
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
      <link rel="stylesheet" href="CSS\index.css">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      <title>TecnoTour</title>
   </head>
   <body>  
   <div id="loading-screen">
  <img id='logo-intro' src="techno tour website design pro\inner logo.png" width='70px' alt="" srcset="">
      </div> 
   <div id="particles-js"></div>    
      <header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo2.png" alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <?php if(isset($getuser)){ 
                     if($getuser['position']!="Technical"){
                          echo "<li><a href='booking.php' class='links'>Booking</a></li>";
                     }
                  }
            ?>
            <li><a href="what's new.php" class="links">Broadcast</a></li>
            <li><a href="about us.php" class="links">About</a> </li>


       
         </ul>

         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src='techno tour website design pro\search.png' alt="..">
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
         </a><div id='login-div' style='width:30px;border-radius: 50%;height: 30px;display: flex;align-items:center;overflow: hidden;justify-content: center;'><img class="login-logo-img" onclick="logout_show();"          
         <?php
          if(isset($getuser)){
                echo "src='photos\\".$getuser['image']."'";
         }else{
          echo "src='techno tour website design pro\login.png'";
         }
         ?> alt=".."></div></div>

         <?php if(isset($getuser)){echo "
         <form method='post' action='form/login.php' id='out_form'>            
            <button name='logout' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'><img src='techno tour website design pro\logout.png' id='logout' title='log out' width='23px'></button>
            </form>
            ";} ?>
      </header>
      <div id="bage1" >

      <main style="display:flex;flex-direction:column;">
         <div class="hero">
         <font style="color:white;font-size:40px; margin-top:0%;align-items:center;text-align:center;" class="hero-header">
                     THE BEST BOOKING GUIDE <br>FOR DOCTORS,ASSISTANTS,<br>STUDENTS AND EXTERNAL USERS IN NCTU.
                     <br>
                     <?php
                     if(isset($getuser)){
                    echo "<button type='button' onclick='window.location.assign(`rooms.php`);' id='NCT-button' class='tour-button'>
                          Rooms
                         </button>";
                        }
                         ?>
                     </font>
                     <section class="scrollable-section">
  <div class="photo-grid">
    <div class="photo-container">
      <img src="https://via.placeholder.com/300" alt="Photo 1" class="photo">
      <div class="overlay">
        <p>Text Overlay for Photo 1</p>
      </div>
      <div class="read-here">
        <a href="#">Read Here</a>
      </div>
    </div>
    <div class="photo-container">
      <img src="https://via.placeholder.com/300" alt="Photo 2" class="photo">
      <div class="overlay">
        <p>Text Overlay for Photo 2</p>
      </div>
      <div class="read-here">
        <a href="#">Read Here</a>
      </div>
    </div>
    <div class="photo-container">
      <img src="https://via.placeholder.com/300" alt="Photo 3" class="photo">
      <div class="overlay">
        <p>Text Overlay for Photo 3</p>
      </div>
      <div class="read-here">
        <a href="#">Read Here</a>
      </div>
    </div>
    <div class="photo-container">
      <img src="https://via.placeholder.com/300" alt="Photo 4" class="photo">
      <div class="overlay">
        <p>Text Overlay for Photo 4</p>
      </div>
      <div class="read-here">
        <a href="#">Read Here</a>
      </div>
    </div>
    <div class="photo-container">
      <img src="https://via.placeholder.com/300" alt="Photo 5" class="photo">
      <div class="overlay">
        <p>Text Overlay for Photo 5</p>
      </div>
      <div class="read-here">
        <a href="#">Read Here</a>
      </div>
    </div>
  </div>
</section>
         </div> 
         
         <br><br> 
      </main>
   </div>
   <br><br>                     
                     <div id='about-det'>
                           <div id='about-ex'>x</div>
                            <div id='detailes'><img style='width:100vw;'  src='techno tour website design pro/details.png'></div>
                           <div id='about-det-1' class='about-dets'>
                              <font class='building_det'>Building (A)</font>
                              <font class='building_det'>Fourth Floor</font>
                              <font class='building_det'>Second Floor</font>
                              <font class='building_det'>Staff 99+</font>
                              <font class='building_det'>Programs 6</font>
                           </div>
                           <div id='about-det-2' class='about-dets'>
                           <font class='building_det2'>Meeting Floor</font>
                              <font class='building_det2'>Third Floor</font>
                              <font class='building_det2'>First Floor</font>
                           </div>
                     </div>  
   <div id="bage2">
    <div id='out-links'>
      <img src="techno tour website design pro/NCT logo3.png" alt="">
      <img src="techno tour website design pro/useful-3.png" alt="">
      <img src="techno tour website design pro/useful-4.png" alt="">
      <img src="techno tour website design pro/useful-2.png" alt="">
    </div>
    <div id="techno-tour-notify">
      <div>In relation to the technological orientation of the world in general and <br>
         Egypt in particular, the Techno Tour team decided to start this project to make the New Cairo University <br>
         technological room system more easy, flexible and fast to meet the requests of visitors outside and inside the university. <br>
           This is basically a student project, nothing more, so do not expect it to simulate reality by 100%</div> 
       <div><img src="techno tour website design pro/techno tour pro copy.png" width='300px' alt=""></div>

    </div>
<br><br>
                    <div id="building-div"> <img id="building" src="techno tour website design pro/NCT building.png" alt="uni-photo">  </div> 
      <p id="about-uni">Technological universities are an extension of the path of technical education students,which works to <br>
          provide them with practical and scientific skills to keep pace with the requirements of <br>
           the local and international labor market, through the technological programs that operate <br>
            in the faculties of the university.</p>
      <div id="u-contact"> 
         <a href="http://nctu.edu.eg" style="font-family: Impact;text-decoration: none;color:white;">NCTU</a>
       <img onclick="window.location.assign('https://www.facebook.com/nctu.edu.eg/');" src="techno tour website design pro/facebook.png" style="cursor: pointer;" width="30px"> 
       <a href="mailto:info@nctu.edu.eg"><img src="techno tour website design pro/email.png" style="cursor: pointer;"  width="30px" alt=""></a>
      </div>
   </div>
   <div id="scrollup" onclick="scrollup();">Up</div>
   </body>
   <script src="JS/home js.js"></script>
      <script src="JS/header.js"></script>
       <script src="JS/index.js"></script>
   <script type="text/javascript" src="JS/particles.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
</html>
