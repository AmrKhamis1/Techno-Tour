<?php

 $fname=$_GET['fname'];
 $lname=$_GET['lname'];
 $email=$_GET['email'];
 $password=$_GET['password'];
 $position=$_GET['position'];
 $v=$_GET['v'];
if(empty($fname) || empty($lname)||empty($email)||empty($password) || empty($v)){
    header("Location:./index.php");
}

if(isset($_POST['v-submit'])){

   if( password_verify($_POST['v_number'],$v)){
    include "./database/databasemysqli.php";
$insert=$connection->prepare("INSERT INTO members(fname,lname,email,password,position)
VALUES ('$fname','$lname','$email','".$_GET['password']."','$position')");
$insert->execute();
header('Location:./form.php');
   }else{
    $ema_pass='code not correct !';
   }
}
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/form.css"> 
    <script src="./JS/form.js"></script>
    <title>verify</title>
</head>

<body>
    <div id="container">
    </div>
    <form id="form11" action="" method="post" novalidate>
        <img src="./techno tour website design pro/login.png" width="50px" alt="login.png">
        <h1>Verify Code </h1>
       <p> <?php if(isset($ema_pass)){ echo $ema_pass;}?></p>
        <br>
        <label for="remember" style='font-size:10px;'>Enter The code</label>
        <input id="v_number" name="v_number" type="number" class="input-text input-text1" required/>
        <button class="buttons1" type="submit" name="v-submit">done</button>
    </form>
</body>
</html> 


