
<?php
   include "../database/databasemysqli.php";
   function getuser($user){
    include "../database/databasemysqli.php";
    $sql="SELECT*FROM members WHERE id={$user}";
    $result=mysqli_query($connection,$sql);
    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $getuser;
 }
 $getuser=NULL;
 
   session_start();
    if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
    $_SESSION["id"]=$_COOKIE['user'];
    $getuser=getuser($_SESSION["id"]);
   }else{
   if(isset($_SESSION["id"])){
    $getuser=getuser($_SESSION["id"]);
   }
   else{
    $getuser=NULL;
    session_unset();
    session_destroy();
   }
 }
 
   $chat_id=NULL;
   $sql="SELECT * FROM chat WHERE user1_id='".$_GET['friend']."' AND user2_id='".$getuser['id']."' OR user2_id='".$_GET['friend']."' AND user1_id='".$getuser['id']."';";
   $result2 = $connection->query($sql);
   if ($result2->num_rows > 0) {
    while($row=$result2->fetch_assoc()){
               $chat_id=$row['id'];
              }
   }else{
    $sql="INSERT INTO chat(user1_id,user2_id) VALUES('".$getuser['id']."','".$_GET['friend']."');";
    $result2 = $connection->query($sql);
   }
   $sql="SELECT * FROM members WHERE id=".$_GET['friend'].";";
   $result2 = $connection->query($sql);
   $chat_image=NULL;
   if ($result2->num_rows > 0) {
    while($row=$result2->fetch_assoc()){
  if($row['image']==NULL||$row['image']==''||$row['image']==" "){
         $chat_image='techno tour website design pro/unknown.png';
         $chat_name=$row['fname'].' '.$row['lname'];
    }else{
        $chat_image="photos/".$row['image'];
        $chat_name=$row['fname'].' '.$row['lname'];

    }
            }}



?>


<div class="center">
  <div class="contacts">
    <i class="fas fa-bars fa-2x"></i>
    <h2>
      Contacts
    </h2>
    <div class="contact">
      <div class="pic thor"></div>
      <div class="name">
        Thor Odinson
      </div>
    </div>
  </div>
  <div class="chat">
    <div class="contact bar">
      <div class="pic stark" style='background-image:url("<?php echo $chat_image;?>");'></div>
      <div class="name"><?php echo "Dr/ ".$chat_name;?></div>
      <div class='close_chat' onclick='close_chat()'>x</div>
    </div>
    <div class="messages" id="chat">
    <?php

$sql="SELECT * FROM message WHERE chat_id='".$chat_id."' ORDER BY id ";
    $result2 = $connection->query($sql);
    if ($result2->num_rows > 0) {
    while($row=$result2->fetch_assoc()){
          if($row['from_id']==$getuser['id']){
                echo "<div class='message parker'>
                ".$row['message']."
              </div>";
          }else{
                echo "
                <div class='message stark'>
                ".$row['message']."
              </div>
                ";
          }

    }}?>
    </div>
    <div class="input">
      <input placeholder="Type your message here!" type="text" /><button type="submit"><img width='25px' src="techno tour website design pro/send.png" alt=""></button>
    </div>
  </div>
</div>

