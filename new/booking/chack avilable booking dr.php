<?php
include "../database/databasemysqli.php";
$Room_Name=$_GET['room'];
$duration_start=['09:00','09:50','10:50','11:40','01:00','01:50','02:50','03:40','04:30'];
$duration_end=['09:50','10:40','11:40','12:30','01:50','02:40','03:40','04:30','05:20'];
$now_time =  date("h:i");
list($h1, $m1) = explode(":", $now_time);
$check_time=($h1*60)+$m1;
for($i=0;$i<9;$i++){
list($h2, $m2) = explode(":", $duration_start[$i]);
list($h3, $m3) = explode(":", $duration_end[$i]);

$check_start=($h2*60)+$m2;
$check_end=($h3*60)+$m3;

if($check_time>$check_start&&$check_time<$check_end){
      $now_duration=$i;
}
}
$end_time=$now_duration+$_GET['for'];
$sql="SELECT * FROM rooms WHERE r_no='$Room_Name'";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
         $room=$row['id'];

    }}
    $res=0;
    $sql="SELECT * FROM time_table WHERE room_id='$room'";
    
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
             if($end_time>$row['start_time']&&$end_time<$row['end_time'] || $end_time==$row['end_time'] && $row['end_time']!=$row['start_time'] || $row['start_time']>$now_duration+1 && $row['end_time']<$end_time){
                   $res=1;
             }
        }}
        if($res==1){
            echo "The Room Is Not empty until this duration !";
        }else{
             echo "OK";
        }

?>