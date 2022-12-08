<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){

    $url="https://";

}else{
    $url="http://";
    $url.=$_SERVER['HTTP_HOST'];
    $url.=$_SERVER['REQUEST_URI'];
    $url;

}
$page=$url;
$sec="8";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wn.css">
    <title>corses and summary</title>
</head>
<body>

    <center><h1 id="user">    
        <form method="post">
       <input onkeyup="showHint()" type="text" name='input'><br>
       <button name="in">send</button>
    </form></h1></center>
   <div id='dive'> <center><h5 id="txtHint">
   <?php
$mas = $_POST['input'];
if(isset($_POST['in'])){
$fi = file_put_contents('masg.txt',$mas . '<br>',FILE_APPEND);
}
?>
</h5></center></div>

    <script src="wn.js"></script>

</html>