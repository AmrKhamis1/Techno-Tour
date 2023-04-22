<?php
include "../database/databasemysqli.php";

$date=$_GET['date'];
$start=$_GET['start'];
$end=$_GET['end'];
list($year, $month,$day) = explode("-", $date);
$day_num = mktime(0, 0, 0,$month ,$day,$year);
$dayOfWeek = date('D', $day_num);
$roomss = ["A106", "A105", "A104", "A103", "A108", "A107", "A101", "A102", "A207", "A206", "A205", "A204", "A203", "A210", "A209", "A208", "A201", "A202", "A307", "A306", "A305", "A304", "A303", "A310", "A309", "A308", "A301", "A302", "A407", "A406", "A405", "A404", "A403", "A409", "A408", "A401", "A402"];
$new='';
for($i=0;$i<37;$i++){
$sql="SELECT * FROM rooms WHERE r_no='".$roomss[$i]."';";
$result=mysqli_query($connection,$sql);
$id=mysqli_fetch_array($result,MYSQLI_ASSOC);
$sql2="SELECT * FROM time_table WHERE room_id='".$id['id']."' and weekday='$dayOfWeek';";
$result2 = $connection->query($sql2);
 if ($result2->num_rows > 0) {
  $count=0;
     while($row=$result2->fetch_assoc()){
       if(($start >$row['start_time']&&$start <$row['end_time']) || ($end >$row['start_time']&&$end <$row['end_time']) ||($start <$row['start_time']&&$end >$row['start_time']) || ($end ==$row['end_time'] || $start ==$row['start_time'])){
        $count+=1 ;
            }
    }
    if($count>0){
      continue;
    }else{
      $ava=$roomss[$i];
    }
    
}else{
  $ava=$roomss[$i];
}

$new.= "<option value='".$ava."'>".$ava."</option>";
    
  }
echo $new;
 ?>