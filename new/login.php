<?php
include_once "databasemysqli.php";  
$ema_pass=null;
$error=null;
if($_SERVER['REQUEST_METHOD']=='POST')
{
$email=$_POST['login-email'];
$password=$_POST['login-password'];
if (empty($email) || empty($password)){
    $error="This field is require";
    }
$sql="SELECT * FROM members WHERE email='$email'";
$result=mysqli_query($connection,$sql);
$getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
$id=$getuser['id'];
if($getuser){
if($getuser['email']==$email && password_verify($password,$getuser["passwordd"])){
    session_start();
    $_SESSION["id"]=$id;
    header("Location:index.php");
   die();
}else{
    $ema_pass="invalid email or password";
}}}

?>