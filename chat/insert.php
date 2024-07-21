<?php

include "../database/databasemysqli.php";
$user=$_GET['user_id'];
$friend=$_GET['friend_id'];
$message=$_GET['message'];
$sql="SELECT * FROM chat WHERE user1_id=$user AND user2_id=$friend OR user1_id=$friend AND user2_id=$user;";
$result3 = $connection->query($sql);
if ($result3->num_rows > 0) {
while($row=$result3->fetch_assoc()){
   $chat_id=$row['id'];

}}
$date= date("Y-m-d h:i:s");
$sql="INSERT INTO message(chat_id,from_id,to_id,message,date_time) VALUES($chat_id,$user,$friend,'$message','$date');";
$result3 = $connection->query($sql);
?>