<?php 
include 'form/login.php';
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="chat/chat.css">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="chat/chat.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "dark_light/dark_light broadcast.php";?>
    <title>Broadcast</title>
</head>
<body>
<div id='open_chat' onclick='open_chating();'>chat</div>
<div id='container'>
<?php include "profile.php"; 
include "broadcast_post.php";
include "header.php";
if(isset($getuser)){ 
  if($getuser['position']=="Dr" ){
    echo "
    <form action='".$_SERVER['PHP_SELF']."?theme=".$theme2."' method='post' id='post' enctype='multipart/form-data'>
  <textarea  rows='10' cols='30' id='caption' name='caption' type='text' placeholder=\"What's new ?\" required></textarea>
<input id='post_image' name='post_image' type='file'>
    <button type='submit' name='post'>Post</button>
</form>
";
  }
}

$sql="SELECT * FROM members WHERE position='Dr';";
$result3 = $connection->query($sql);
echo "<div id='DRs'>";
if ($result3->num_rows > 0) {
while($row=$result3->fetch_assoc()){
echo "
<div class='drs'>";
if($row['image']==NULL || $row['image']==" "){
  echo "<div class='drs_img'><img src='techno tour website design pro/unknown.png'></div>";

}else{
  echo "<div class='drs_img'><img src='photos/".$row['image']."'></div>";
}
if($getuser){
  echo "<div class='drs_name'>Dr/ ".$row['fname']." ".$row['lname']."</div>
<div class='drs_chat' onclick='open_chating();messages(".$getuser['id'].",".$row['id'].");chat_container(".$getuser['id'].",".$row['id'].");'>Chat</div>
</div>
";
}else{
  echo "<div class='drs_name'>Dr/ ".$row['fname']." ".$row['lname']."</div>
  </div>
  ";
}


}}
echo "</div>";
?>  
<div id='chat_container'>

</div>


  
      <div id='posts'> 
           <?php
                      $count=10;
                      include "broadcast show.php";
                      for($i=0;$i<$count;$i++){
                        if(isset($caption[$i])){
                          
                          echo "
                          <div class='post_div'>
                             <div class='user_post'>
                             <div class='user_photo'>";
                             if($user_photo[$i]!=''){
                            echo "<img src='photos/".$user_photo[$i]."' width='50px'>";
                             }else{
                              echo "<img src='techno tour website design pro\unknown.png' width='50px'>";
                             }
                           echo  "</div>
                             <div class='user_name'>
                             ".$user_name[$i]."</div>
                             <div class='date_time'>".$time[$i]."<br>".$date[$i]."</div>
                             </div>
                             <div class='div_cap'>
                             <div class='caption_post'>".$caption[$i]."</div>
                             
                             </div>
                             <div class='post_image'><img src='posts/".$image[$i]."' height='400px'></div>
                          </div>
                          ";


                        }}
           ?>
      </div>

</div>

</body>
<script src="JS/chat.js"></script>
<script src="chat/chat.js"></script>
<script src="JS/header.js"></script>
</html>