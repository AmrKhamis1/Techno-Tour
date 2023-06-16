<?php
include "database/databasemysqli.php";

$caption_post=NULL;
$image_post=NULL;
$date_post=date('Y-m-d');
$time_post=date('H:i:s');
$uploadPath = "posts/"; 
$image=NULL;
 function compress($source, $destination, $quality) {
  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);

  elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

  return $destination;
}


  if(isset($_POST['post'])){

    // Check whether user inputs are empty 
    if(!empty($_FILES["post_image"]["name"])) { 
      // File info 
      $fileName = basename($_FILES["post_image"]["name"]); 
      $allowTypes = array('jpg','png','jpeg','gif'); 
      $imageUploadPath = $uploadPath .$fileName; 
      $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
      if(in_array($fileType, $allowTypes)){ 
          $image_name=rand(0,10000000000);
          $imageUploadPath = $uploadPath . $image_name." photo.png"; 
          $imageTemp = $_FILES["post_image"]["tmp_name"]; 
          compress($imageTemp,$imageUploadPath, 30);
          $caption_post=$_POST['caption'];
          $caption_post=nl2br($caption_post);        
          $sql="INSERT INTO broadcast(user_id,caption,image,date,time) VALUES(".$getuser["id"].",'$caption_post','$imageUploadPath','$date_post','$time_post');";
          $insert=$connection->prepare($sql);
          $insert->execute();
      }else{ 
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
      } 

  }else{ 
      $statusMsg = 'Please select an image file to upload.'; 
  } 

    }

?>