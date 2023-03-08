<?php
$host="127.0.0.1:3309";
$username="root";
$password="";
$db="technotour";

$connection=new mysqli($host,$username,$password,$db);
if($connection->connect_errno)
{
    echo "error connecting to DB";
}
return $connection;
?>