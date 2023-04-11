<?php
function rooms() {
                include "databasemysqli.php";
                $day=date('d');
                $month=date('m');
                $year=date("y");
                $today = mktime(0, 0, 0, $month, $day, $year);
                $dayOfWeek = date('D', $today);
                $RoomNum=$_GET['Room_Num'];
                $rooms=substr($RoomNum, 3);
                $sql="SELECT * FROM time_table INNER JOIN rooms ON time_table.room_id = rooms.id WHERE rooms.r_no='$rooms' and weekday='$dayOfWeek';";
                $result = $connection->query($sql);
                $i=0;
                $start=[];
                $end=[];
                if ($result->num_rows > 0) {
                while($row=$result->fetch_assoc()){
                    if($row['weekday']==$dayOfWeek){
                    $start[$i]=$row['start_time'];
                    $end[$i]=$row['end_time'];
                    $subject[$i]=$row['sub_name'];
                    $lec[$i]=$row['user_id'];
                    $sql2="SELECT * FROM dr_ass WHERE id={$lec[$i]}";
                    $res=mysqli_query($connection,$sql2);
                    $id=mysqli_fetch_array($res,MYSQLI_ASSOC);
                    $lec[$i]=$id['name'];
                    $i++;
                }
                }
                $time=date("h:m:s"); 
                list($h, $m, $s) = explode(":", $time);
              for($x=0;$x<$i;$x++){
                list($h1[$x], $m1[$x], $s1) = explode(":", $start[$x]);
                list($h2[$x], $m2[$x], $s2) = explode(":", $end[$x]);
              }
              for($x=0;$x<$i;$x++){
                $h+=0;
                $h1[$x]=(int)$h1[$x];
                $h2[$x]=(int)$h2[$x];
                $m+=0;
                $m1[$x]=(int)$m1[$x];
                $m2[$x]=(int)$m2[$x];
                if($h<=$h2[$x] && $h>=$h1[$x]){
                    if(date('a')=='pm' && date('h')>5 || date('a')=='am' && date('h')<9){
                        $available='closed now';
                    }else{
                    $available= $lec[$x]."<br><span style='font-size:14px;font-weight: 500;font-family:Cairo;'>". $subject[$x]."</span>";
                    break;
                }
                }else{
                    if(date('a')=='pm' && date('h')>5 || date('a')=='am' && date('h')<9){
                     $available='closed now';
                    }else{
                    $available ="Available";
                }
                }
            }
            }
            else{
                if(date('a')=='pm' && date('h')>5 || date('a')=='am' && date('h')<9){
                    $available='closed now';
                }else{
                    $available="Available";
                }
                }
                return $available;
            }
            ?>