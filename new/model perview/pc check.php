<?php
include_once "../database/databasemysqli.php";
$pc=$_GET['pc'];
$sql="SELECT * FROM pcs WHERE id='$pc'";
$result=mysqli_query($connection,$sql);
$getpc=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($getpc['state']==1){
echo "[1,1,1,0]";
}else{
     echo "[150,0,0,0]";
}
?>

