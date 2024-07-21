<?php
  include "../database/databasemysqli.php";

$position=$_GET['p'];
if($position=='0'){
    $sql3="SELECT * FROM dr_ass WHERE position='Dr'  ORDER BY name";
    $result3 = $connection->query($sql3);
    while($row2=$result3->fetch_assoc()){
        echo "<option value='".$row2['name']."'>".$row2['position'].". ".$row2['name']."</option>";
    }
}else{
    $sql3="SELECT * FROM dr_ass WHERE position='Assisstant'  ORDER BY name";
    $result3 = $connection->query($sql3);
    while($row2=$result3->fetch_assoc()){
        echo "<option value='".$row2['name']."'>".$row2['position'].". ".$row2['name']."</option>";
    }
}

?>