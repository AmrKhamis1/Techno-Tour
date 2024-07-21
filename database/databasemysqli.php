<?php
$host="localhost";
$username="root";
$password="";
$db="technotour";
//start the connection
$connection=new mysqli($host,$username,$password,$db);
//check if the connection ture or not 
if($connection->connect_errno)
{
    die("error");
}
return $connection;
?>