<?php
include_once "databasemysqli.php";  
$ema_pass=null;
$error=null;
$getuser=null;
if(isset($_POST['login-submit']))
{
$email=$_POST['login-email'];
$password=$_POST['login-password']; 
if (empty($email) || empty($password)){
    $error="This field is require";
    }
  
$sql="SELECT * FROM members WHERE email='$email'";
$result=mysqli_query($connection,$sql);
$getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($getuser){
if($getuser['email']==$email && password_verify($password,$getuser["password"])){
  $id=$getuser["id"];
if(isset($_POST['remember']))
{
$cookie_name ='user';
$cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
    
    session_start();
    $_SESSION["id"]=$id;
    header("Location:index.php"); 
     
}
}
else{
    $ema_pass="invalid email or password";
    $not_succ="login();";
}
}
if(isset($_POST['logout']))
{
    $cookie_name ='user';
    setcookie( $cookie_name,NULL, time() - (86400 * 30),"/");
    session_start();
    session_unset();
    session_destroy();
    
}

?>