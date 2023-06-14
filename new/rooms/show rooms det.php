
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
                    function days_sub($day){
                        include "../database/databasemysqli.php";
                        $RoomNum=$_GET['room_number'];
                        $sql="SELECT id FROM rooms WHERE r_no='$RoomNum';";
                        $result=mysqli_query($connection,$sql);
                        $id=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $room =$id['id'];
                        $sql="SELECT * FROM time_table WHERE room_id='$room'";
                        $result = $connection->query($sql);
                        $duration=['1','2','3','4','5','6','7','8','9'];
                        $sub_in_day=["","","","","","","","","","",""];
                        $book=["","","","","","","","","","",""];
                         while($row=$result->fetch_assoc()){
                          if($row['weekday']==$day){
                            for($i=0;$i<9;$i++){
                                if($row['start_time']==$duration[$i]){
                                   if($row['book']==1){
                                        $book[$i]="#e0ca00";
                                      }else{
                                        $book[$i]="rgb(230,0, 0)";
                                      }
                                    for($j=$i;$j<9;$j++){
                                    if($row['end_time']==$duration[$j] && $j!=$i){
                                      $sub_in_day[$i]=$row['sub_name']; 
                                      $sub_in_day[$i+1]=$row['sub_name'];   
                                      $sub_in_day[$j]=$row['sub_name'];
                                     
                                    }else{
                                   $sub_in_day[$i]=$row['sub_name'];
                               }
                                  
                               }
                            }
                          }
                        }
      
                      }                  
                      
                      
                      for($i=0;$i<9;$i++){
                                            if($sub_in_day[$i]==$sub_in_day[$i+1] && $sub_in_day[$i]!=""){
                                                if($sub_in_day[$i+1]==$sub_in_day[$i+2] && $sub_in_day[$i+1]!=""){

                                                  echo "<td style='background-color:".$book[$i].";' colspan='3'>".$sub_in_day[$i]."</td>"; 
                                                  $i+=2;
                                                }else{
                                                  echo "<td style='background-color:".$book[$i].";' colspan='2'>".$sub_in_day[$i]."</td>"; 
                                                  $i++;
                                                }
                                                
                                            }else if($sub_in_day[$i]!=""){
                                                echo "<td style='background-color:".$book[$i].";'>".$sub_in_day[$i]."</td>"; 
                                            }else{
                                              echo "<td style='background-color:rgb(0, 230, 0);'>".$sub_in_day[$i]."</td>"; 
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
<?php
                     include "../database/databasemysqli.php";
                     $RoomNum=$_GET['room_number'];
            $sql="SELECT * FROM rooms WHERE r_no='$RoomNum'";
            $result=mysqli_query($connection,$sql);
            $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $room_id=$getuser['id'];
?>
            <div class="detail">
                <p style='font-weight: 600;'>Number of PCs :
                <?php
                 echo " "."<span style='font-weight: 700;'>".$getuser['fixed_pc']."</span>";
                 ?></p>
                <p style='font-weight: 600;'>Projector's State : <?php 
                if($getuser['projector']=='good'){
                    echo " <span style='color:rgb(0,200,0);font-weight: 700;'>".$getuser['projector']."</span>";
                }else{
                  echo " <span style='color:rgb(255,0,0);font-weight: 700;'>".$getuser['projector']."</span>";
                }
                 ?>
                 
                </p>
            </div>
            <?php
            if($RoomNum=="A206"){
                   echo "<button onclick='open_3d();' style='width:fit-content;border:0;background-color:rgba(0,0,0,0);cursor: pointer;'>
                   <span style='font-size: xx-large; color:#fff;'>&#10066;</span>
                    <span style='font-size:20px; color:rgb(68, 255, 0);'> new</span> 
                   </button>";
            }
            ?>
            <hr>
            <?php
            session_start();
            $sql="SELECT * FROM members WHERE id={$_SESSION['id']}";
            $result=mysqli_query($connection,$sql);
            $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if(isset($getuser)){
              if($getuser['position']=="Dr" || $getuser['position']=="Assisstant" || $getuser['position']=="Technical"){
              echo "
              <div class='button'>
              <form method='post' action='report.php'>
                  <label for='department'>Report for : </label>
                  <select id='department' onchange='reports();' name='department'>
                  <option value='1' selected>Pc is not working</option>
                  <option value='2'>projector down</option>
                  <option value='3'>All of the above</option>
                  <option value='4'>Something else</option>
            </select>
            <div id='report_det'>
            <input type='text' name='room_id' style='display:none;' value='". $room_id."'>
            <lable for='number_of' id='lable_number'>Number Of PCs : </lable>
            <input type='number' name='number_of' id='number_of' value='1' min='1'>
            <input type='text' name='else' id='else' placeholder='type your report'>
            </div>
               <button id='report_button' name='report_done' type='submit'>Send</button>
              </form>
          </div>
              ";
              }else{
                echo ""; 

            }
            }
            ?>
      <div class='reports'>
        <?php
        include "../database/databasemysqli.php";
        $sql=$connection->prepare("SELECT * FROM report where room_id='$room_id'");
        $sql->execute();
        $result=$sql->get_result();
        echo "<p>Reports:</p>";
        while($getreport=$result->fetch_assoc())
        {  
          
              echo $getreport['report'];
              echo" : ";
               echo $getreport['note']."<span style='color:#555555;'>  ".$getreport['date']."|".$getreport['time']."  </span> <br>";
          }
        
        ?>
        
      </div>
      <script>

      </script>
        </div>
