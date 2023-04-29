<?php

include "database/databasemysqli.php";
$caption_post=NULL;
$image_post=NULL;
$date_post=date('Y-m-d');
$time_post=date('H:i:s');
    if(isset($_POST['post'])){
        $caption_post=$_POST['caption'];
        $image=file_get_contents($_FILES["post_image"]["tmp_name"]);
        $image_post=$date_post.$caption_post.$getuser['id'].$time_post." photo.png";
        $myfile = fopen("posts/".$image_post, "w");
        fwrite($myfile,$image);
        $sql="INSERT INTO broadcast(user_id,caption,image,date,time) VALUES(".$getuser['id'].",'$caption_post','$image_post','$date_post','$time_post');";
        $insert=$connection->prepare($sql);
        $insert->execute();
    }

?>