<?php
include "database/databasemysqli.php";
session_start();
$n_o_pc=$_POST['number_of'];
$room_id=$_POST['room_id'];
$report=$_POST['department'];
if($report=='1'){
    $report='Pc not working';
    $report_det=$n_o_pc;
}else if($report=='2'){
    $report='projector';
    $report_det='projector not working !';
    

}else if($report=='3'){
$report='projector and pc';
$report_det="projector and ".$n_o_pc." PCs not working ";
}else{
    $report='report';
    $report_det=$_POST['else'];
}
$user_id=$_SESSION["id"];


if(isset($_POST['report_done'])){
    $date=date('y-m-d');
    $time=date('h:i');
$insert=$connection->prepare("INSERT INTO report(report,user_id,note,room_id,date,time)
VALUES ('$report','$user_id','$report_det','$room_id','$date','$time')");
$insert->execute();
$sql="SELECT * FROM rooms WHERE id='$room_id'";
$result=mysqli_query($connection,$sql);
$getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
$PCs=$getuser['pc_no'];
if($report=="projector"){
    $update=$connection->query("UPDATE rooms SET projector='borken' WHERE id={$room_id};");
}else if($report=='Pc not working'){
    $fixed=$PCs-$n_o_pc;
$update=$connection->query("UPDATE rooms SET fixed_pc='$fixed' , broken_pc='$n_o_pc' WHERE id={$room_id};");
}
else{
    $fixed=$PCs-$n_o_pc;
$update=$connection->query("UPDATE rooms SET fixed_pc='$fixed' , broken_pc='$n_o_pc' , projector='borken' WHERE id={$room_id};");
}

if($update)
{
    header("location:rooms.php?theme=b");
}
}



?>