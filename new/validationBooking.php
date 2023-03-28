<?php
include_once "databasemysqli.php";
//initialize all the variables in this code
$b_tittle=null;
$b_date=null;
$b_start=null;
$b_end=null;
$duration=null;
$b_atte=null;
$b_exte=null;
$room_num=null;
$done=null;
$mess=null;
//check if the user submit the form or not
if($_SERVER["REQUEST_METHOD"] == "POST"){
$b_tittle=$_POST['b_tittle'];
$b_date=$_POST['b_date'];
$b_start=$_POST['b_start'];
$b_end=$_POST['b_end'];
$duration=$_POST['b_duration'];
$b_atte=$_POST['b_atte'];
$b_exte=$_POST['b_exte'];
$room_num=$_POST['room_num'];
//validation on the user data 
if (empty($b_tittle) || empty($b_date) || empty($b_start) || empty($b_end) || empty($duration) || empty($b_atte) || empty($b_exte) || empty($room_num)){
    $mess="This field is require";
    $fl=0;
}
else
{
    $f1=1;
    $done="Your booking is done";
    $insert2=$connection->prepare("INSERT INTO booking(b_tittle,start_time,end_time,datee,duration,total_atten,total_external,no_room)
    VALUES ('$b_tittle','$_start','$b_end','$b_date','$duration','$b_atte','$b_exte','$room_num')");
    $insert2->execute();
}
}
?>