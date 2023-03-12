<?php
include_once "database.php";


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$vpassword=$_POST['vpassword'];
$position=$_POST['position'];
$password_encrypt=password_hash($password,PASSWORD_DEFAULT);

if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($position) )
{
    header("Location:".$_SERVER['HTTP_REFERER']."?err=empty");
}
else if (! filter_var($email, FILTER_VALIDATE_EMAIL))
{
    header("Location:".$_SERVER['HTTP_REFERER']."?err=email");
}
else if (strlen($password)< 8)
{
    header("Location:".$_SERVER['HTTP_REFERER']."?err=password");
}
else if(! preg_match("/[a-zA-Z]/",$password))
{
    header("Location:".$_SERVER['HTTP_REFERER']."?err=password2");
}
else if ($password !== $vpassword)
{
header("Location:".$_SERVER['HTTP_REFERER']."?err=vpassword");
}
else{
$sql=$conn->prepare("INSERT INTO mempers(fname,lname,email,password,position) VALUES('$fname','$lname','$email','$password_encrypt','$position');");
$sql->execute();
header("Location:".$_SERVER['HTTP_REFERER']."?err=no");
}



?>
