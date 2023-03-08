<?php
$host="127.0.0.1:3309";
$username="root";
$password="";
$db="signup";

$connection=new mysqli($host,$username,$password,$db);
if($connection->connect_errno)
{
    die("error");
}
return $connection;
?>