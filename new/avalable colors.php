<?php
include_once 'cheking rooms function.php';
$RoomNum=$_GET['Room_Num'];
$rooms=substr($RoomNum, 3);
$available2 = rooms($rooms);

if($available2=='closed now'){
    echo "rgba(255, 255,255,30%)";
}
else{
    if($available2!="Available"){
    echo "rgb(230, 0, 0)";                            
}else{
    echo "rgb(0, 230, 0)";
}
} 


?>