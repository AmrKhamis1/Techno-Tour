<?php
include_once "databasemysqli.php";  
$ema_pass=null;
$error=null;
if(isset($_POST['login-submit']))
{
$email=$_POST['login-email'];
$password=$_POST['login-password'];
if (empty($email)||empty($password)){
    $error="This field is require";
}else{
    $sql="SELECT * FROM members WHERE email='$email'";
$result=mysqli_query($connection,$sql);
$getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($getuser){
if($getuser['email']==$email && password_verify($password,$getuser["passwordd"])){
    $id=$getuser["id"];
    session_start();
    $_SESSION["id"]=$id;
    header("Location:index.php");
}
}
else {
    $ema_pass="invalid email or password!";
    $not_succ="login();";
}
}

}

?>