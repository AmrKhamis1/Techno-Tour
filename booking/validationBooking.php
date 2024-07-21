<?php
include_once "./database/databasemysqli.php";
//initialize all the variables in this code
$b_tittle=null;
$b_date=null;
$b_start=null;
$b_end=null;
$b_atte=null;
$b_exte=null;
$room_num=null;
$done=null;
$mess=null;
//check if the user submit the form or not
if(isset($_POST['done'])){
$b_tittle=$_POST['b_title'];
$b_date=$_POST['b_date'];
$b_start=$_POST['b_start'];
$b_end=$_POST['b_end'];
$b_atte=$_POST['b_atte'];
$b_exte=$_POST['b_exte'];
$room_num=$_POST['room_num'];
if (empty($b_tittle) || empty($b_date) || empty($b_start) || empty($b_end)|| empty($b_atte) || empty($b_exte) || empty($room_num)){
$mess="required !";
}else{

list($year,$month,$day) = explode("-", $b_date);
$today = mktime(0, 0, 0,$month ,$day,$year);
$dayOfWeek = date('D', $today);
$done="Your booking is done";
$sql="SELECT * FROM rooms WHERE r_no='$room_num'";
$result=mysqli_query($connection,$sql);
$getroom=mysqli_fetch_array($result,MYSQLI_ASSOC);
$insert2=$connection->prepare("INSERT INTO booking(b_tittle,start_time,end_time,date,total_atten,total_external,no_room,room_id,user_id)
VALUES ('$b_tittle','$b_start','$b_end','$b_date','$b_atte','$b_exte','$room_num','".$getroom['id']."','".$_SESSION["id"]."')");
$insert2->execute();
$insert=$connection->prepare("INSERT INTO time_table(room_id,start_time,end_time,weekday,user_id,sub_name,end_date,book)
VALUES ('".$getroom['id']."','$b_start','$b_end','$dayOfWeek','".$_SESSION["id"]."','$b_tittle','$b_date','1')");
$insert->execute();

    }

}


?>