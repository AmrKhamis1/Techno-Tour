<?php

function getuser($user){
    include "database/databasemysqli.php";
    $sql="SELECT*FROM members WHERE id={$user}";
    $result=mysqli_query($connection,$sql);
    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $getuser;
 }
    if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
    $_SESSION["id"]=$_COOKIE['user'];
    $getuser=getuser($_SESSION["id"]);
   }else{
   if(isset($_SESSION["id"])){
    $getuser=getuser($_SESSION["id"]);
   }
   else{
    $getuser=NULL;
    session_unset();
    session_destroy();
   }
 }
 
?>