<?php 

include "database/databasemysqli.php";  
session_start();
include_once "booking/validationBooking.php";
   if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
    $_SESSION["id"]=$_COOKIE['user'];
    $sql="SELECT*FROM members WHERE id={$_COOKIE['user']}";
    $result=mysqli_query($connection,$sql);
    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
   }
           if(isset($_SESSION["id"])){
            $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
            $result=mysqli_query($connection,$sql);
            $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
           }
     if(isset($getuser)){ 
        if(($getuser['position']=="Dr" || $getuser['position']=="Assisstant") && isset($_GET['Room_Name'])){

                header("Location:booking_dr_ass.php?Room_Name=".$_GET['Room_Name']."&id=".$getuser['id']);
            
        }}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Booking.css">
    <title>Rooms Booking</title>
    <script src="JS/check avalabile booking.js"></script>

</head>
<body>
<div id="container">
    </div>
    <form  id="Booking" action="Booking.php" method="post" novalidate>
                <div class="form-left">
                    <h1>Rooms Booking</h1>
                    <label for="b_title">Book Title <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_title" name="b_title" type="text" required>
                    <label for="b_date">Date <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label >
                    <input id="b_date" name="b_date" type="date" onchange='check();' onclick='check();' required>
                    <label for="b_start">Beginning of The Duration <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select  class='b_b' id="b_start" name="b_start" onclick='check();duration();' required> 
                        <option value='1'>1 (9 - 9:50)</option>
                        <option value='2'>2 (9:50 - 10:40)</option>
                        <option value='3'>3 (10:50 - 11:40)</option>
                        <option value='4'>4 (11:40 - 12:30)</option>
                        <option value='5'>5 (1 - 1:50)</option>
                        <option value='6'>6 (1:50 - 2:40)</option>
                        <option value='7'>7 (2:50 - 3:40)</option>
                        <option value='8'>8 (3:40 - 4:30)</option>
                        <option value='9'>9 (4:30 - 5:20)</option>
                    </select>

                    <label for="b_end">End of The Duration <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select class='b_b' id="b_end" name="b_end" onclick='check();' required>
                        <option class='end' value='1'>1 (9 - 9:50)</option>
                        <option class='end' value='2'>2 (9:50 - 10:40)</option>
                        <option class='end' value='3'>3 (10:50 - 11:40)</option>
                        <option class='end' value='4'>4 (11:40 - 12:30)</option>
                        <option class='end' value='5'>5 (1 - 1:50)</option>
                        <option class='end' value='6'>6 (1:50 - 2:40)</option>
                        <option class='end' value='7'>7 (2:50 - 3:40)</option>
                        <option class='end' value='8'>8 (3:40 - 4:30)</option>
                        <option class='end' value='9'>9 (4:30 - 5:20)</option>
                     </select>
                </div>

                <div class="form-right">
                    <label for="b_attendees">Total number of attendees <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_attendees" name="b_atte" type="number" min="1" max='100' required>

                    <label for="b_external_attendees">Number of External Attendees <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_external_attendees" type="number" name="b_exte" min="0" max='50' required>
                    <label for="b_Num_rooms">Avalable Rooms<span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select class='b_b' id="b_Num_rooms" name="room_num" type="text" required>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Done" id="done" name="done" class="done">
                    <p class="errors" style="color:green;font-size:10px;text-align:center;"><?php echo $done ;?></p>
        </div>
</body>
</html>