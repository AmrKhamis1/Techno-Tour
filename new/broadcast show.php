<?php

include "database/databasemysqli.php";
    
    $sql="SELECT * FROM (SELECT * FROM broadcast ORDER BY id DESC LIMIT $count) as s ORDER BY id";
    $result2 = $connection->query($sql);
    $i=0;
    $caption=[""];
    $image=[""];
    if ($result2->num_rows > 0) {
    while($row=$result2->fetch_assoc()){
      $caption[$i]=$row['caption'];
      $image[$i]=$row['image'];
      $date[$i]=$row['date'];
      $time[$i]=$row['time'];
      $user[$i]=$row['user_id'];
      include "database/databasemysqli.php";
      $sql="SELECT*FROM members WHERE id={$user[$i]}";
      $result=mysqli_query($connection,$sql);
      $getphoto=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $user_photo[$i]=$getphoto['image'];
      $user_name[$i]=$getphoto['fname']." ".$getphoto['lname'];
      $i++;
    }
}


?>