<?php

include_once "database.php";

$email=$_POST['login-email'];
$password=$_POST['login-password'];
$getuser = $conn->prepare("select * from mempers where email='$email'");
$getuser->execute();
$getuser = $getuser->fetch(PDO::FETCH_ASSOC);
$password2=$getuser['password'];
$id=$getuser['id'];
if($getuser['email']==$email && password_verify($password,$password2)){
    header("Location:".$_SERVER['HTTP_REFERER']."?id=$id&login=logedin");
    exit();
}else{
    header("Location:".$_SERVER['HTTP_REFERER']."?err=err");
    exit();
}

?>