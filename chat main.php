

<?php
  if($getuser){
    if($getuser['position']=='Dr'){
      echo "<div id='open_chat' ontouchstart='open_chating2'>chat</div>";
}
  }

if(isset($getuser)){
  if($getuser['position']=='Dr'){
    
    echo "<div id='chat_container1'><div onclick='close_chat();' id='exit_chat2'>X</div>";
$sql="SELECT * FROM members WHERE position='Dr' AND id!=".$getuser['id'].";";
$result3 = $connection->query($sql);
echo "<div id='DRs'>";
if ($result3->num_rows > 0) {
while($row=$result3->fetch_assoc()){
echo "
<div class='drs'>";
if($row['image']==NULL || $row['image']==" "){
  echo "<div class='drs_img'><img src='techno tour website design pro/unknown.png'></div>";

}else{
  echo "<div class='drs_img'><img src='photos/".$row['image']."'></div>";
}
if($getuser){
  echo "<div class='drs_name'>Dr/ ".$row['fname']." ".$row['lname']."</div>
<div class='drs_chat' onclick='open_chating();messages(".$getuser['id'].",".$row['id'].");chat_container(".$getuser['id'].",".$row['id'].");'>Chat</div>
</div>
";
}else{
  echo "<div class='drs_name'>Dr/ ".$row['fname']." ".$row['lname']."</div>
  </div>
  ";
}


}}
echo "</div>";
}
}
?>  



<?php
if($getuser){
    if($getuser['position']=='Dr'){
      echo "</div>
      <div id='chat_container'>

</div>
      ";
}}
?>
