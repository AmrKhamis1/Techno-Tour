<?php
include "../database/databasemysqli.php";




?>


    <div id='close_rlist' onclick='reports_close_open()'>x</div>
    <div id='report_list2'>
    <div class='reports_row'>
        Reports
    </div>
    <?php
    $sql="SELECT * FROM report";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
            $sql2="SELECT * FROM rooms WHERE id='".$row['room_id']."'";
            $result2 = $connection->query($sql2);
            if ($result2->num_rows > 0) {
                while($row2=$result2->fetch_assoc()){
                          $room = $row2['r_no'];
                }}
            echo "<div class='reports_row'>
            <div class='reports_title'>".$row['report']."</div>
            <div class='reports_note'>".$row['note']." at room : ".$room."</div>
            <div class='reports_at'>".$row['date']."|".$row['time']."</div>
            <button onclick='delete_report(".$row['id'].",".$row['room_id'].",`".$row['report']."`);'>Fix</button>
            </div>";

        }}
    ?>
        </div>
