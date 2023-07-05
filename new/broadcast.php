<?php 
include 'form/login.php';
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='CSS Black\broadcast.css'>
    <link rel='stylesheet' href='CSS Black\header2.css'>
    <link rel="stylesheet" href="chat/chat.css">
    <link rel="stylesheet" href="CSS 300/header2.css">
    <link rel="stylesheet" href="CSS 300/broadcast.css">
    <link rel="stylesheet" href="chat/chat 300.css">
    <title>Broadcast</title>
</head>
<body>
  <?php
  
  include "chat main.php";

  ?>
<div id='container'>
<?php 
include "broadcast_post.php";
include "profile.php"; 
include "header.php";
if(isset($getuser)){ 
  if($getuser['position']=="Dr" ){
    echo "
    <form action='".$_SERVER['PHP_SELF']."' method='post' id='post' enctype='multipart/form-data'>
  <textarea  rows='10' cols='30' id='caption' name='caption' type='text' placeholder=\"What's new ?\" required></textarea>
<input id='post_image' name='post_image' type='file'>
    <button type='submit' name='post'>Post</button>
</form>
";
  }
}

?>

  
      <div id='posts' <?php if(isset($getuser)){
        if($getuser['position']!='Dr'){
          echo "style='width: 100%;align-items:center;margin-top:13vh;margin-left:0;overflow:hidden;'";
        }else{
        echo "style=''";}}else{echo "style='width: 100%;align-items:center;margin-top:13vh;margin-left:0;overflow:hidden;'";} ?>> 
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
                              echo "<img src='techno tour website design pro\unknown.png'>";
                             }
                           echo  "</div>
                             <div class='user_name'>
                             ".$user_name[$i]."</div>
                             <div class='date_time'>".$time[$i]."<br>".$date[$i]."</div>
                             </div>
                             <div class='div_cap'>
                             <div class='caption_post'>".$caption[$i]."</div>
                             
                             </div>
                             <div class='post_image'><img src='".$image[$i]."'></div>
                          </div>
                          ";


                        }}
           ?>
      </div>

</div>

</body>
<script src="JS/chat.js"></script>
<script src="chat/chat.js"></script>
<script src="JS/header2.js"></script>
</html>