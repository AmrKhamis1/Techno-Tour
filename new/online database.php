<?php
$host="sql8.freesqldatabase.com";
$username="sql8610996";
$password="5dvPxTSdWK";
$db="sql8610996";

$connection=new mysqli($host,$username,$password,$db);

if($connection->connect_errno)
{
    die("error");
}
return $connection;
?>