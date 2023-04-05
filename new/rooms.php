<?php 
include_once "databasemysqli.php";
include_once "login.php";
session_start();
if(isset($_SESSION["id"])){
   $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon">  
      <link rel="stylesheet" href="CSS\rooms.css">
      <link rel="stylesheet" href="CSS\header.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      
      <title>Rooms</title>
   </head>
   <body>    
   <div id='add-event'>
       <div id='exit' onclick='event_display();'>×</div>
       <div id='show' style='color:white;'></div>
   </div>

 <!-- php code for all rooms -->
 <?php
 $rooms=["A 106","A 105","A 104","A 103","A108","A107","A101","A102","A207","A206","A205","A204","A203","A210","A209","A208","A201","A202","A307","A306","A305","A304","A303","A310","A309","A308","A301","A302","A407","A406","A405","A404","A403","A409","A408","A401","A402"];


 ?>
   <header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo2.png" alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <?php if(isset($getuser)){ echo "<li><a href='booking.php' class='links'>Booking</a></li>";} ?>
            <li><a href="what's new.php" class="links">What's New</a></li>
            <li><a href="contact us.php" class="links">Contact Us</a></li>
            <li><a href="about us.php" class="links">About Us</a> </li>
         </ul>

         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a <?php
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
      <div class="bage">
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
                     <div id="a207" class="rooms"></div>
                     <div id="a206" class="rooms"></div>
                     <div id="a205" class="rooms"></div>
                     <div id="a204" class="rooms"></div>
                     <div id="a203" class="rooms"></div>
                  </div>
                  <div id="row2">
                     <div id="a210" class="rooms"></div>
                     <div id="a209" class="rooms"></div>
                     <div id="a208" class="rooms"></div>
                     <div id="a201" class="rooms"></div>
                     <div id="a202" class="rooms"></div>
                  </div>
               </div>
               <!--************************** face 3  ***************************************************************-->
               <div id="f3" class="face">
                  <div id="row1">
                     <div id="a307" class="rooms"></div>
                     <div id="a306" class="rooms"></div>
                     <div id="a305" class="rooms"></div>
                     <div id="a304" class="rooms"></div>
                     <div id="a303" class="rooms"></div>
                  </div>
                  <div id="row2">
                     <div id="a310" class="rooms"></div>
                     <div id="a309" class="rooms"></div>
                     <div id="a308" class="rooms"></div>
                     <div id="a301" class="rooms"></div>
                     <div id="a302" class="rooms"></div>
                  </div>
               </div>
               <!--************************** face 4  ***************************************************************-->
               <div id="f4" class="face">
                  <div id="row1">
                     <div id="a407" class="rooms"></div>
                     <div id="a406" class="rooms"></div>
                     <div id="a405" class="rooms"></div>
                     <div id="a404" class="rooms"></div>
                     <div id="a403" class="rooms"></div>
                  </div>
                  <div id="row2">
                     <div id="a409" class="rooms"></div>
                     <div id="a408" class="rooms"></div>
                     <div id="a401" class="rooms"></div>
                     <div id="a402" class="rooms"></div>
                  </div>
               </div>
               <!--************************** buttom  ***************************************************************-->
               <div id="bottom" class="face"></div>
            </div>
         </div>
         </div>
        </body>
        <script src="JS/home js.js"></script>
        <script src="JS/header.js"></script>
        <script src="JS/rooms.js"></script>
        <script>
         <?php
         echo "var rooms=document.getElementsByClassName('rooms');";
          for($i=0;$i<37;$i++){
 echo "
 rooms[".$i."].innerHTML='".$rooms[$i]."<div class=\'a106 about\'><font class=\'available\'>Available </font><a class=\'book_button\' href=\'book.php?Room_Name=".$rooms[$i]."\' name=\'Room_Book\' type=\'submit\'>Book</a></div>';";
}

echo " window.onload=function(){";
 for($i=0;$i<37;$i++){
    echo "
    rooms[".$i."].addEventListener('click', function(){
      show_room_det('".$rooms[$i]."');
    });";
 }
 echo "}";
?>
        </script>
   <?php
echo "<style>
@keyframes border {
";
for($i=0;$i<51;$i++){
echo "
".($i*2)."%{	
	background:
	  linear-gradient(#c2c3d2,#c2c3d2) padding-box,
	  linear-gradient(".$i*7.2."deg,red,#c2c3d2) border-box;
	}
";
}
echo "}

.rooms:hover {
	border:2px solid #0000;
	border-radius:20px;
   animation: border;
	animation-timing-function: linear;
	animation-duration: 2000ms;
	animation-iteration-count: infinite;

}
</style>";
?>
        </html>