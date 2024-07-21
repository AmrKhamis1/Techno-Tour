<?php
include "../database/databasemysqli.php";
$year=$_GET['year'];
$sec=0;
$weekDay=$_GET['day'];
$sql2="SELECT * FROM time_table WHERE year='$year' and sec='$sec' and weekday='$weekDay'";
$result2 = $connection->query($sql2);
$start_lec[0]=NULL;
$end_lec[0]=NULL;
$sub_lec[0]=NULL;
$room_lec[0]=NULL;
$user_lec[0]=NULL;
while($row=$result2->fetch_assoc()){
$start_lec[$row['start_time']]=$row['start_time'];
$end_lec[$row['start_time']]=$row['end_time'];
$sub_lec[$row['start_time']]=$row['sub_name'];
$sql3="SELECT r_no FROM rooms WHERE id='".$row['room_id']."';";
$result3 = $connection->query($sql3);
while($row2=$result3->fetch_assoc()){
    $room_lec[$row['start_time']]=$row2['r_no'];
}


}

?>

<table border='2'>
    <tr>
        <td rowspan='8'>year <?php echo $year;?></td>
    </tr>
    <tr>
        <td>Day</td>
        <td colspan='9'><?php echo $weekDay;?></td>
    </tr>
                     <tr>
                        <td>Time</td>
                        <td>09:00 - 09:50</td>
                        <td>09:50 - 10:40</td>
                        <td>10:50 - 11:40</td>
                        <td>11:40 - 12:30</td>
                        <td>01:00 - 01:50</td>
                        <td>01:50 - 02:40</td>
                        <td>02:50 - 03:40</td>
                        <td>03:40 - 04:30</td>
                        <td>04:30 - 05:20</td>
                    </tr>
<?php
$end[0]=0;
for($i=1;$i<=5;$i++){
    echo "<tr><td>sec $i</td>";
for($x=1;$x<=9;$x++){        
$sql="SELECT * FROM time_table WHERE  year='$year' and weekday='$weekDay' and sec='$i' and start_time='$x'";
$result = $connection->query($sql);

if(isset($start_lec[$x])&&$start_lec[$x]==$x&&$start_lec[$x]!=NULL){
    $col=$end_lec[$x]-$start_lec[$x]+1;
    $end[$x]=$end_lec[$x];
    $start[$x]=$start_lec[$x];
    $start_lec[$x]=NULL;
    echo "<td colspan='$col' style='background-color:#a0ddff; color:black;' rowspan='5'>".$sub_lec[$x]."<br>Room : ".$room_lec[$x]."</td>";
    $x+=$col-1;
    continue;
}    
if(isset($start[$x])&&$start[$x]<=$x){
        $x+=$end[$x]-$start[$x];
        continue;
 }
if ($result->num_rows > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $sql3="SELECT r_no FROM rooms WHERE id='".$row['room_id']."';";
        $result3 = $connection->query($sql3);
        while($row2=$result3->fetch_assoc()){
            $room_lec2=$row2['r_no'];
        }
        
   $col=$row['end_time']-$row['start_time']+1;
   echo "<td style='background-color:#ff0000;' colspan='$col'>".$row['sub_name']."<br>Room : ".$room_lec2."</td>";
   $x+=$row['end_time']-$row['start_time'];
}
}else{
    echo "<td style='background-color:#00ff00;'></td>";
}
}
    echo "</tr>";
}



?>
</table>