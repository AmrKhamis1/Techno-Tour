<?php 

include "../form/login.php";
include "../session.php";
if(isset($getuser)){
    if($getuser['position']!='Dr'&&$getuser['position']!='admin'){
          header('Location:../index.php');
    }
       }else{
        header('Location:../index.php');
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>FrameWork</title>
</head>
<body>
    <select value="1" name="year_show" id="year_show">
        <option value="1">Year 1</option>
        <option value="2">Year 2</option>
        <option value="3">Year 3</option>
        <option value="4">Year 4</option>
    </select>
    <select value='Sun' name="day_show" id="day_show">
        <option value="Sun">Sun</option>
        <option value="Mon">Mon</option>
        <option value="Tue">Tue</option>
        <option value="Wed">Wed</option>
        <option value="Thu">Thu</option>
    </select>
<div id='container'>


</div>
<div id='insert'>
   <label for="room">Room Number :</label> 
   <select value="" name="room" id="room">
  <?php
  include "../database/databasemysqli.php";
   $sql3="SELECT r_no FROM rooms";
        $result3 = $connection->query($sql3);
        while($row2=$result3->fetch_assoc()){
            echo "<option value='".$row2['r_no']."'>".$row2['r_no']."</option>";
        }
        ?>
    </select>
   <label for="lecture">Lecture Name :</label> <input type="text" name="lecture" id="lecture">
   <label for="sec">Section :</label>  
   <select value="1" name="sec" id="sec" onchange='dr_asst();'>
        <option value="0">lecture for all</option>
        <option value="1">Sec 1</option>
        <option value="2">Sec 2</option>
        <option value="3">Sec 3</option>
        <option value="4">Sec 4</option>
        <option value="5">Sec 5</option>
    </select>
   <label for="dr_ass">Lecturer Name :</label>
   <select value="" name="dr_ass" id="dr_ass">

    </select>
   <label for="year">year :</label> 
   <select value="1" name="year" id="year">
        <option value="1">Year 1</option>
        <option value="2">Year 2</option>
        <option value="3">Year 3</option>
        <option value="4">Year 4</option>
    </select>

   <label for="day">Day :</label>
   <select value='Sun' name="day" id="day">
        <option value="Sun">Sun</option>
        <option value="Mon">Mon</option>
        <option value="Tue">Tue</option>
        <option value="Wed">Wed</option>
        <option value="Thu">Thu</option>
    </select>
   <label for="from">Start Time :</label> 
     <select  name="from" id="from">
        <option value="1">09:00 - 09:50</option>
        <option value="2">09:50 - 10:40</option>
        <option value="3">10:50 - 11:40</option>
        <option value="4">11:40 - 12:30</option>
        <option value="5">01:00 - 01:50</option>
        <option value="6">01:50 - 02:40</option>
        <option value="7">02:50 - 03:40</option>
        <option value="8">03:40 - 04:30</option>
        <option value="9">04:30 - 05:20</option>
    </select>
    <label for="to">End Time :</label> 
    <select  name="to" id="to">
        <option value="1">09:00 - 09:50</option>
        <option value="2">09:50 - 10:40</option>
        <option value="3">10:50 - 11:40</option>
        <option value="4">11:40 - 12:30</option>
        <option value="5">01:00 - 01:50</option>
        <option value="6">01:50 - 02:40</option>
        <option value="7">02:50 - 03:40</option>
        <option value="8">03:40 - 04:30</option>
        <option value="9">04:30 - 05:20</option>
    </select>
<button id='button' class='buttons1' onclick='add_lec()' type="button">Add</button>
</div>
</body>
<script src="index.js"></script>

</html>