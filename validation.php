<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password= $_POST["password"];
$vpassword= $_POST["vpassword"];
$position=$_POST["positions"];

if (empty($fname) || empty($lname))
{
    echo "This field is require";
}
if (! filter_var($email, FILTER_VALIDATE_EMAIL))
{
       echo "invalid email format";
}
if (strlen($password)< 8)
{
    echo "Password must be more then 8 char";
}
elseif(! preg_match("/[a-zA-Z]/",$password))
{
    echo "must conntain one letter";
}
if ($password !== $vpassword)
{
    echo "Must be match";
}
print_r($_POST);
$password_encrypt=password_hash($password, PASSWORD_DEFAULT);
var_dump($password_encrypt);
$connection=include_once "database.php"  ;
$insert=$connection->prepare("INSERT INTO user_data (fname,lname,email,password_hash,position)
VALUES (?,?,?,?,?)");
$insert->bind_param("sssss",$fname,$lname,$email,$password_encrypt,$position);
$insert->execute();
?>