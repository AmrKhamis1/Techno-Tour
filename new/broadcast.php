<?php 

function getuser($user){
   include "database/databasemysqli.php";
   $sql="SELECT*FROM members WHERE id={$user}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
   return $getuser;
}
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "dark_light/dark_light broadcast.php";?>
    <title>Broadcast</title>
</head>
<body>
<div id='container'>
<?php include "profile.php"; ?>  
<header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php?theme=<?php echo $theme2;?>');" src=<?php echo $logo;?> alt="..">
         <ul >
            <li><a href="index.php?theme=<?php echo $theme2;?>" class="links">Home</a></li>
            <?php if(isset($getuser)){ 
                     if($getuser['position']!="Technical"){
                          echo "<li><a href='booking.php' class='links'>Booking</a></li>";
                     }
                  }
            ?>
            <li><a href="broadcast.php?theme=<?php echo $theme2;?>" class="links">Broadcast</a></li>
            <li><a href="about us.php?theme=<?php echo $theme2;?>" class="links">About</a> </li>


       
         </ul>
          <div style='height: 12px;'><a href="broadcast.php?theme=<?php echo $theme?>"><img src=<?php echo $theme_logo; ?> width='18px' alt=""></a></div>
         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src=<?php echo $search;?> alt="..">
         </div>
         <div class="user-logo"><a 
         <?php
          if(isset($getuser)){
            echo "onclick='logout_show();'";
            }else{
            echo "href='form.php'";
              }
         ?> id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><div id='login-div' style='width:30px;border-radius: 50%;height: 30px;display: flex;align-items:center;overflow: hidden;justify-content: center;'><img class="login-logo-img" onclick="logout_show();"          
         <?php
          if(isset($getuser)){
            if($getuser['image']!=NULL){
                echo "src='photos\\".$getuser['image']."'";
             } else{
              echo "src=".$login." style='width:20px;'";
              }
         }else{
          echo "src=".$login." style='width:20px;'";
         }
         ?> alt=".."></div></div>
      </header>

</div>
</body>
<script src="JS/header.js"></script>
</html>