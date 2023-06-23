<?php
include "../database/databasemysqli.php";
$Room_Name=$_GET['room'];
$duration_start=['09:00','09:50','10:50','11:40','13:00','13:50','14:50','15:40','16:30'];
$duration_end=['09:50','10:50','11:40','13:00','13:50','14:40','15:40','16:30','17:20'];
$now_time =  date("H:i");
list($h1, $m1) = explode(":", $now_time);
$h1+=1;
$check_time=($h1*60)+$m1;
for($i=0;$i<9;$i++){
list($h2, $m2) = explode(":", $duration_start[$i]);
list($h3, $m3) = explode(":", $duration_end[$i]);

$check_start=($h2*60)+$m2;
$check_end=($h3*60)+$m3;

if($check_time>$check_start&&$check_time<$check_end){
      $now_duration=$i;
      break;
}
}
$end_time=$now_duration+$_GET['for'];
$sql="SELECT * FROM rooms WHERE r_no='$Room_Name'";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
         $room=$row['id'];

    }}
    $weekday=date('D');
    $res=0;
    $sql="SELECT * FROM time_table WHERE room_id='$room' and weekday='$weekday'";
    
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
             if($end_time>=$row['start_time']&&$end_time<$row['end_time'] || $end_time==$row['end_time'] && $row['end_time']!=$row['start_time'] || $row['start_time']>$now_duration+1 && $row['end_time']<$end_time){
                   $res=1;
                   $room_n=$row['sub_name'];
             }
        }}
        if($res==1){
            echo "The Room Is Not empty until this duration !";
        }else{
             echo "OK";
        }

?>