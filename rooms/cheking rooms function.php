<?php
                
  function getCurrentIndex() {
    $dayOfWeek = date('D');
    if($dayOfWeek=='Fri' || $dayOfWeek=='Sat'){
        return 0;
    }
    $duration_start=['09:00','09:50','10:50','11:40','13:00','13:50','14:50','15:40','16:30'];
    $duration_end=['09:50','10:40','11:40','12:30','13:50','14:40','15:40','16:30','17:20'];
    $duration_out=['10:40','10:50','12:30','13:00','14:40','14:50'];
    $now_time =  date("H:i");
    list($h1, $m1) = explode(":", $now_time);
    $h1+=1;
    $check_time=($h1*60)+$m1;
    $am_pm_time =  date("a");
    if(($am_pm_time == 'pm' && $check_time >1040)||( $am_pm_time == 'am' && $check_time < 540)){
        return 0; 
    }
for($i=0;$i<6;$i++){
list($h4[$i], $m4[$i]) = explode(":", $duration_out[$i]);
    $out_time[$i]=($h4[$i]*60)+$m4[$i];
}
for($i=0;$i<=4;$i+=2){
    if($check_time >= $out_time[$i] && $check_time <= $out_time[$i+1]){
       return 10;
    }
}
for($i = 0; $i < 9; $i++){
    list($h2[$i], $m2[$i]) = explode(":", $duration_start[$i]);
    list($h3[$i], $m3[$i]) = explode(":", $duration_end[$i]);
    $start_time[$i]=($h2[$i]*60)+$m2[$i]; 
    $end_time[$i]=($h3[$i]*60)+$m3[$i];   
}

 for ($i = 0; $i < 9; $i++) {    
         if ($check_time >= $start_time[$i] && $check_time <= $end_time[$i]) {
                return $i+1;   
                        }            
                    }

 return 0;          
 }

function rooms($RoomNum) {
include "../database/databasemysqli.php";
$duration_now =(int) getCurrentIndex(); 

if($duration_now==0){
$available="Closed Now";
}else if($duration_now==10){
$available="Break Duration";
}
else{
$rooms=$RoomNum;  
$month=date('m');
$day=date('d');
$year=date("y");
$today = mktime(0, 0, 0,$month ,$day,$year);
$dayOfWeek = date('D', $today);

$sql="SELECT id FROM rooms WHERE r_no='$RoomNum';";
$result=mysqli_query($connection,$sql);
$id=mysqli_fetch_array($result,MYSQLI_ASSOC);
$room =$id['id'];
$sql="SELECT * FROM time_table WHERE room_id='$room' AND weekday='$dayOfWeek' AND end_time >=".($duration_now)." AND start_time <=".($duration_now).";";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
            $subject = $row['sub_name'];
            $lec = $row['user_id'];
            $sql2="SELECT * FROM members WHERE id=$lec";
            $res=mysqli_query($connection,$sql2);
            $id=mysqli_fetch_array($res,MYSQLI_ASSOC);
            $lec=$id['fname'];
            
            if($row['book']==1){
                if($id['position']=="Dr" || $id['position']=="Assisstant"){
                    $available = $id['position']." : ".$lec . "<br><span style='font-size:14px;font-weight: 500;font-family:Cairo;border-radius: 10px;background-color:#e0ca00;width:70%;color:black;'>" . $subject . "</span>";   

                }else{
                    $available = $lec . "<br><span style='font-size:14px;font-weight: 500;font-family:Cairo;border-radius: 10px;background-color:#e0ca00;width:70%;color:black;'>" . $subject . "</span>";   
                }
            }else{
                if($id['position']=="Dr" || $id['position']=="Assisstant"){
                    $available = $id['position']." : ".$lec . "<br><span style='font-size:14px;font-weight: 500;font-family:Cairo;'>" . $subject . "</span>";   
               
            }else{
                $available = $lec . "<br><span style='font-size:14px;font-weight: 500;font-family:Cairo;'>" . $subject . "</span>";   
            }
        }
            
    }
}else{
    $available="Available";
}
}

                

return $available;
            }
            ?>