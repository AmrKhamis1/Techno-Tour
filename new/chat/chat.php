

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

$sql="SELECT * FROM members WHERE id=$friend;";
$result3 = $connection->query($sql);
if ($result3->num_rows > 0) {
while($row=$result3->fetch_assoc()){
$friend_name=$row['fname']." ".$row['lname'];
$friend_img=$row['image'];
}}



?>

    <div id='chat_bar'>
       <div id='friend_img'><img src="photos/<?php echo $friend_img;?>" alt=""></div>
       <div id='friend_name'><?php echo $friend_name;?></div>
       <div onclick='close_chat();' id='exit_chat'>X</div>
    </div>
    <div id='messages_container'>
        
    </div>
    <div id='send_bar'>
         <input type="text" onkeypress='send_enter(<?php echo $user.",".$friend;?>);' placeholder='Type your message!' id="message">
         <div id='send'  onclick='send(<?php echo $user.",".$friend;?>);'><img src="techno tour website design pro/send.png" alt=""></div>
    </div>
