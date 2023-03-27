<?php
$host="localhost";
$username="root";
$password="";
$db="technotour";

$connection=new mysqli($host,$username,$password,$db);

if($connection->connect_errno)
{
    die("error");
}
return $connection;
?>