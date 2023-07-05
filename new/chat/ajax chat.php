<?php
include "../database/databasemysqli.php";
$user=$_GET['user_id'];
$friend=$_GET['friend_id'];
$sql="SELECT * FROM chat WHERE user1_id=$user AND user2_id=$friend OR user1_id=$friend AND user2_id=$user;";
$result3 = $connection->query($sql);
if ($result3->num_rows > 0) {
while($row=$result3->fetch_assoc()){
   $chat_id=$row['id'];

}}else{
    $sql2="INSERT INTO chat(user1_id,user2_id) VALUES('$friend','$user');";
    $result2 = $connection->query($sql2);
}
    $sql="SELECT * FROM message WHERE chat_id=$chat_id ORDER BY date_time;";
    $result3 = $connection->query($sql);
    if ($result3->num_rows > 0) {
    while($row=$result3->fetch_assoc()){
      if($row['from_id']==$friend){
         echo   "<div class='from_mess'>".$row['message']."</div>";
      }else{
        echo   "<div class='to_mess'>".$row['message']."</div>";
      }
    }}
    ?>