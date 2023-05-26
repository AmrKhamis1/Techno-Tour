<?php 

include_once "database/databasemysqli.php";
include 'form/login.php';
session_start();
if(isset($_SESSION["id"])){
   $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);

}else{
   header("Location:index.php"); 
}
 $rooms=["A106","A105","A104","A103","A108","A107","A101","A102","A207","A206","A205","A204","A203","A210","A209","A208","A201","A202","A307","A306","A305","A304","A303","A310","A309","A308","A301","A302","A407","A406","A405","A404","A403","A409","A408","A401","A402"];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon">  
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      <?php include "dark_light/dark_light rooms.php";?>
      <title>Rooms</title>
   </head>  

   <body class='no-animation'>   
   <div id='add-event'>
       <div id='exit' onclick="show();">×</div>
       <div id='show' style='color:white;'></div>
   </div> 

    
  
      <div class="bage">
      <?php include "profile.php";
       include "header.php";
 ?> 
      <div id="f-btns" class='no-animation'>
         <div id="f-btn1" onclick="floor1();" class="fbtn">Floor 1</div>
         <div id="f-btn2" onclick="floor2();" class="fbtn">Floor 2</div>
         <div id="f-btn3" onclick="floor3();" class="fbtn">Floor 3</div>
         <div id="f-btn4" onclick="floor4();" class="fbtn">Floor 4</div>
      </div>
      <div id='head' class='no-animation2'><div  id='head-info' style='text-align:center;'> Click On Rooms For More <br>Information</div> 
      <div  id='head-info'>Rooms For Building (A)</div>
      <div  id='color-map'>
         <div style='display:inline-block;background-color:rgb(230, 0, 0);width:10px;height: 10px;border-radius:50%; '></div> Unbookable Duration<br>
         <div style='display:inline-block;background-color:rgb(0, 230, 0);width:10px;height: 10px;border-radius:50%; '></div> Avalable Duration<br>
        <div style='display:inline-block;background-color:#e0ca00;width:10px;height: 10px;border-radius:50%; '></div> A Booked Duration <br>
        <div style='display:inline-block;background-color:#363642;width:10px;height: 10px;border-radius:50%; '></div> A Cloesd UNI Duration
      </div></div>
<div id="cont-home" class='no-animation'>
         <div class="container">
            <div id="cube" class='no-animation'>
               <!--************************** face 1  ***************************************************************-->
               <div id="f1" class="face">
                  <div id="row1">
                     <?php
                     $i=0;
                      for($i=0;$i<4;$i++){
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                  <?php
                      for($i=4;$i<8;$i++){
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 2  ***************************************************************-->
               <div id="f2" class="face">
                  <div id="row1">
                     <?php
                      for($i=8;$i<13;$i++){                        
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                     <?php
                      for($i=13;$i<18;$i++){                       
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 3  ***************************************************************-->
               <div id="f3" class="face">
                  <div id="row1">
                     <?php
                      for($i=18;$i<23;$i++){                       
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                     <?php
                      for($i=23;$i<28;$i++){                     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 4  ***************************************************************-->
               <div id="f4" class="face">
                  <div id="row1">
                      <?php
                      for($i=28;$i<33;$i++){     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                      <?php
                      for($i=33;$i<37;$i++){     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                      }
                      ?>
                  </div>
               </div>
               <!--************************** buttom  ***************************************************************-->
               <div id="bottom" class="face"></div>
            </div>
         </div>
         </div>

        </body>
        <script src="JS/rooms.js"></script>
      <script src="JS/header.js"></script>
        </html>