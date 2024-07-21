<html>
<head>
    <link rel="stylesheet" href="../CSS Black/forget pass.css"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon"> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>forget password</title>
    </head>
    <body>
        

<form id='form1' action="" method="post">
            <?php include "change.php";?>
    <h1> Reset the password</h1>
    <br>
    <span style='<?php if(isset($sucss)){echo "color:rgba(0,255,0,0.9)";}else{echo 'color:rgba(255,0,0,0.9)';}?>;font-size:13px;'><?php 
    if(isset($faild) || isset($sucss)){
         echo $faild; echo $sucss;
    }
   
    ?></span>
        <label for="">Email</label>
        <input type="email" name="reset">
       <button type="submit" name="reset2" >Send</button>
</form>
</body>
</html>