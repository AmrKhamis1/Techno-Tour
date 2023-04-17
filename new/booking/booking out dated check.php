<?php
include "./database/databasemysqli.php";
$RoomNum=$_GET['Room_Num'];
$rooms=substr($RoomNum,3);
$date=date('Y-m-d');
list($y,$m,$d)= explode("-",$date);
$out_date=($y*360)+($m*30)+$d;  
$sql="SELECT id FROM rooms WHERE r_no='$rooms';";
$result=mysqli_query($connection,$sql);
$id=mysqli_fetch_array($result,MYSQLI_ASSOC);
$room =$id['id'];
$sql="SELECT * FROM time_table WHERE room_id='$room' and book='1';";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
        $out=$row['end_date'];
        list($y1,$m1,$d1)= explode("-",$out);
        echo $out;
        $end_date=($y1*360)+($m1*30)+$d1; 
            if($out_date > $end_date){
                $sql2="DELETE FROM time_table WHERE end_date='$out';";
                $connection->query($sql2);
               
            }
    }
}


?>