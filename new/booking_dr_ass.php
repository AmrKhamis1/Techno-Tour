<?php
include "database/databasemysqli.php";
if(isset($_GET['Room_Name'])&& isset($_GET['id'])){
$Room_Name=$_GET['Room_Name'];
$id=$_GET['id'];
}else{
    header("Location:rooms.php?theme=b");
}
$duration_start=['09:00','09:50','10:50','11:40','01:00','01:50','02:50','03:40','04:30'];
$duration_end=['09:50','10:40','11:40','12:30','01:50','02:40','03:40','04:30','05:20'];
$now_time =  date("h:i");
list($h1, $m1) = explode(":", $now_time);
$check_time=($h1*60)+$m1;
for($i=0;$i<9;$i++){
list($h2, $m2) = explode(":", $duration_start[$i]);
list($h3, $m3) = explode(":", $duration_end[$i]);

$check_start=($h2*60)+$m2;
$check_end=($h3*60)+$m3;

if($check_time>$check_start&&$check_time<$check_end){
      $now_duration=$i;
}
}
if(isset($_POST['done'])){
    $today = mktime(0, 0, 0,date('m') ,date('d'),date('Y'));
    $dayOfWeek = date('D', $today);
    $b_tittle=$_POST['lucture_name'];
    $b_date=date('Y-m-d');
    $b_start=$now_duration+1;
    $b_end=$now_duration+$_POST['to'];
    $b_atte=NULL;
    $b_exte=NULL;
    $sql="SELECT * FROM rooms WHERE r_no='$Room_Name'";
    $result=mysqli_query($connection,$sql);
    $getroom=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $room_num=$getroom['id'];
    $insert2=$connection->prepare("INSERT INTO booking(b_tittle,start_time,end_time,date,total_atten,total_external,no_room,room_id,user_id)
    VALUES ('$b_tittle','$b_start','$b_end','$b_date','$b_atte','$b_exte','$room_num','".$room_num."','".$id."')");
    $insert2->execute();
    $insert=$connection->prepare("INSERT INTO time_table(room_id,start_time,end_time,weekday,user_id,sub_name,end_date,book)
    VALUES ('".$room_num."','$b_start','$b_end','$dayOfWeek','".$id."','$b_tittle','$b_date','1')");
    $insert->execute();
    header("Location:rooms.php?theme=b");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css"> 
    <script src="JS/check avalabile booking dr.js"></script>

    <title>Document</title>
</head>
<body>
    <div id='container'>
    <h1>Book Quicly for a lecture</h1>
    <form action='' method="post">
        <label for="lucture_name" style='font-weight:600;'>Is There are a Name for Lecture ? </label>
       <div id="choose"> <label for="enable-input">Yes</label>
        <input type="radio" id="enable-input" value="1">
        <label for="disable-input">No</label>
        <input type="radio" id="disable-input" value="0"></div>
        <input type="text" name="lucture_name" id="lucture_name" placeholder="Enter the name">
        <label for="lucture_name">From Now To ?</label>
        <select name="to" onchange='check(this.value,`<?php echo $Room_Name;?>`)' id="to">
            <option value='1'>one duration long</option>
            <option value='2'>two durations long</option>
            <option value='3'>three durations long</option>
        </select>
        <p id='message' style='font-size:11px;'></p>
        <button id='done' type="submit" name='done'>Book</button>
    </form>
</div>
</body>
<script>


const enableInput = document.getElementById('enable-input');
const disableInput = document.getElementById('disable-input');
const myInput = document.getElementById('lucture_name');

enableInput.addEventListener('change', () => {
  myInput.disabled = false;
});

disableInput.addEventListener('change', () => {
  myInput.disabled = true;
});
</script>
<style>

    body{
        width:100vw;
        height: 100vh;
        display: flex;
        align-items:center;
        justify-content: center;
        overflow: hidden;
        background-image:radial-gradient(rgb(111, 111, 111),rgb(2, 0, 52));
        background-size:150% 150%;
        background-attachment: fixed;
        background-position:center;
    }
    #container{
        transform: scale(1.2);
        height: 50vh;
        width:40vw;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
        background-color:white;
        background-image:radial-gradient(rgb(255, 255, 255),rgb(255, 255,255));
        border-radius: 30px;
     	align-items: center;
    }
    form{
        height: 50vh;
        width:30vw;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
     	align-items: center;
    }
    #choose{
        width:30%;
        display: flex;
        flex-direction:row;
        justify-content: space-around;
    }
    input{
        width:100px;
        outline:none;
        border:0;
        border-bottom:2px;
        border-style:groove;
        border-color:black;
    }


</style>
</html>

