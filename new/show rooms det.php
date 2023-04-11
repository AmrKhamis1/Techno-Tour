
        <div class="contain">
            <div class="head">
            <?php
                $RoomNum=$_GET['room_number'];
                echo "<h1>Room ".$RoomNum."</h1>";
            ?>
            </div>
            <hr>
            <div class="timetable">
                <table border=1>
                    <tr>
                        <td>Time</td>
                        <td>9 - 9:50</td>
                        <td>9:50 - 10:40</td>
                        <td>10:50 - 11:40</td>
                        <td>11:40 - 12:30</td>
                        <td>1 - 1:50</td>
                        <td>1:50 - 2:40</td>
                        <td>2:50 - 3:40</td>
                        <td>3:40 - 4:30</td>
                        <td>4:30 - 5:20</td>
                    </tr>
                    <?php
                      
                    function days_sub($day){
                        include "databasemysqli.php";
                        $RoomNum=$_GET['room_number'];
                        $sql="SELECT id FROM rooms WHERE r_no='$RoomNum';";
                        $result=mysqli_query($connection,$sql);
                        $id=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $room =$id['id'];
                        $sql="SELECT * FROM time_table WHERE room_id='$room'";
                        $result = $connection->query($sql);
                        $duration_start=['09:00:00','09:50:00','10:50:00','11:40:00','01:00:00','01:50:00','02:50:00','03:40:00','04:30:00'];
                        $duration_end=['09:50:00','10:40:00','11:40:00','12:30:00','01:50:00','02:40:00','03:40:00','04:30:00','05:20:00'];
                        $sub_in_day=["","","","","","","","","","",""];
                         while($row=$result->fetch_assoc()){
                          if($row['weekday']==$day){
                            for($i=0;$i<9;$i++){
                                if($row['start_time']==$duration_start[$i]){
                                    for($j=0;$j<9;$j++){
                                    if($row['end_time']==$duration_end[$j]){
                                      $sub_in_day[$i]=$row['sub_name'];    
                                      $sub_in_day[$i+1]=$row['sub_name'];
                                    }else{
                                   $sub_in_day[$i]=$row['sub_name'];
                               }
                                  
                               }
                            }
                          }
                        }
      
                      }                  for($i=0;$i<9;$i++){
                                            if($sub_in_day[$i]==$sub_in_day[$i+1] && $sub_in_day[$i]!=""){
                                                if($sub_in_day[$i+1]==$sub_in_day[$i+2] && $sub_in_day[$i+1]!=""){
                                                  echo "<td colspan='3'>".$sub_in_day[$i]."</td>"; 
                                                  $i+=2;
                                                }else{
                                                  echo "<td colspan='2'>".$sub_in_day[$i]."</td>"; 
                                                  $i++;
                                                }
                                                
                                            }else{
                                                echo "<td>".$sub_in_day[$i]."</td>"; 
                                            }

                                             }
                    }
                    
                      echo "<tr><td>Sun</td>";
                      days_sub('Sun');
                      echo "</tr><tr><td>Mon</td>";
                      days_sub('Mon');
                      echo "</tr><tr><td>Tue</td>";
                      days_sub('Tue');
                      echo "</tr><tr><td>Wed</td>";
                      days_sub('Wed');
                      echo "</tr><tr><td>Thu</td>";
                      days_sub('Thu');
                      echo "</tr>";
                    ?>
                </table>
            </div>
            <hr>
            <div class="detail">
                <p>Number of avilable PCs :</p>
                <p>Number of avilable Chairs : </p>
                <p>Projector's State : </p>
            </div>
            <hr>
            <div class="button">
                <form action="#">
                    <label>Report for : </label>
			            <select name="department">
				            <option value="1">Not Enough Chairs</option>
				            <option value="2">Pc is not working</option>
				            <option value="3">projector down</option>
				            <option value="4">All of the above</option>
				            <option value="5">Something else</option>
			        </select>

                </form>
            </div>
        </div>
