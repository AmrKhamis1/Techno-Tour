<?php
if (empty($_POST["fname"]))
{
    die("This field is require");
}
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
       die("invalid email");
}
if (strlen( $_POST["password"])< 8)
{
    die("Password must be more then 8 char");
}
elseif(! preg_match("/[a-zA-Z]/",$_POST["password"]))
{
    die("must conntain one letter");
}
if ($_POST["password"] !== $_POST["vpassword"])
{
    die("Must be match");
}
print_r($_POST);
$password_encrypt=password_hash($_POST["password"], PASSWORD_DEFAULT);
var_dump($password_encrypt);
$connection=require __DIR__."/database.php";
$insert=$connection->prepare("INSERT INTO user_data (fname,lname,email,password_hash,position)
VALUES (?,?,?,?,?)");
$insert->bind_param("sssss",$_POST["fname"],$_POST["lname"],$_POST["email"],$password_encrypt,$_POST["positions"]);
$insert->execute();
?>