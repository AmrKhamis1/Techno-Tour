<?php
include "../database/databasemysqli.php";
$id=$_GET['r_id'];
$room=$_GET['room'];
$report=$_GET['report'];
if($report==='Pc not working'){
    $sql = "UPDATE rooms SET rooms.fixed_pc=rooms.pc_no , rooms.broken_pc='0' WHERE id=$room";
$result = $connection->query($sql);

}else if($report==='projector'){
    $sql = "UPDATE rooms SET projector='good'  WHERE id=$room";
$result = $connection->query($sql);
}else{
    $sql = "UPDATE rooms SET rooms.fixed_pc=rooms.pc_no, rooms.broken_pc='0', projector='good' WHERE id=$room";
    $result = $connection->query($sql);
}
if($room=54 && $report==='Pc not working' || $report!='projector'){

    $sql = "UPDATE pcs SET state='1';";
    $result = $connection->query($sql);
}
    $sql="DELETE FROM report WHERE id='$id' ";
    $result = $connection->query($sql);
 ?>
