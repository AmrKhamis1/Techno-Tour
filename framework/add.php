<?php
include "../database/databasemysqli.php";
$room=$_GET['room'];
$lecture=$_GET['lecture'];
$dr_ass=$_GET['dr_ass'];
$year=$_GET['year'];
$sec=$_GET['sec'];
$from=$_GET['from'];
$to=$_GET['to'];
$day=$_GET['day'];

if (empty($room) || empty($lecture) || empty($dr_ass) || empty($year) || empty($from) || empty($to)){
    }else{
    $sql="SELECT * FROM rooms WHERE r_no='$room'";
    $result=mysqli_query($connection,$sql);
    $getroom=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $sql="SELECT * FROM dr_ass WHERE name='$dr_ass'";
    $result=mysqli_query($connection,$sql);
    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $insert=$connection->prepare("INSERT INTO time_table(room_id,start_time,end_time,weekday,user_id,sub_name,year,sec)
    VALUES ('".$getroom['id']."','$from','$to','$day','".$getuser['user_id']."','$lecture','$year','$sec')");
    $insert->execute();
    
        }


?>