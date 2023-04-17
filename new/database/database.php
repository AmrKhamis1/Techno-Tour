<?php
$host="localhost";
$username="root";
$password="";
$db="technotour";
//create the connection
$connection=new mysqli($host,$username,$password,$db);
//check if the connection is true or not
if($connection->connect_errno)
{
    die("error");
}
return $connection;
?>