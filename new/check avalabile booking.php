<?php
                 $date = $_GET['date'];
                $start=DateTime::createFromFormat('H:i:s',$_GET['start']);
                $end=DateTime::createFromFormat('H:i:s',$_GET['end']);
                $sql="SELECT `room_id`,`end_date`,`start_time`,`end_time` FROM time_table ;";
                $avalable=[];
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                while($row=$result->fetch_assoc()){
                     
                }
            } 

            $check_time = DateTime::createFromFormat('H:i:s', '12:30:00');
            
            if ($check_time >= $start_time && $check_time <= $end_time) {
                echo "The check time is between the start time and end time";
            } else {
                echo "The check time is not between the start time and end time";
            }

                ?>