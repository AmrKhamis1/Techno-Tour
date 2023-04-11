<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id='container'>
    <h1>Book Quicly for a lecture</h1>
    <form action="post">
        <label for="lucture_name">Is There are a Name for Lecture ? </label>
       <div id="choose"> <label for="enable-input">Yes</label>
        <input type="radio" name="input-enabled" id="enable-input" value="1">
        <label for="disable-input">No</label>
        <input type="radio" name="input-enabled" id="disable-input" value="0"></div>
        <input type="text" name="lucture_name" id="lucture_name" placeholder="Enter the name">
        <label for="lucture_name">from</label>
        <input type="time" name="from" id="from" disabled>
        <label for="lucture_name">To ?</label>
        <input type="time" name="to" id="to">
    </form>
</div>
</body>
<script>
    function x(){
var date = new Date();
var timeM = date.getMinutes();
var timeH = date.getHours();
var from = document.getElementById('from');
var time=timeH+":"+timeM+":00";
from.value=time;
}
setInterval(x(),1000*60);

const enableInput = document.getElementById('enable-input');
const disableInput = document.getElementById('disable-input');
const myInput = document.getElementById('lucture_name');

enableInput.addEventListener('change', () => {
  myInput.disabled = false;
});

disableInput.addEventListener('change', () => {
  myInput.disabled = true;
});
</script>
<style>

    body{
        width:100vw;
        height: 100vh;
        display: flex;
        align-items:center;
        justify-content: center;
        overflow: hidden;
    }
    #container{
        height: 50vh;
        width:40vw;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
     	align-items: center;
    }
    form{
        height: 50vh;
        width:30vw;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
     	align-items: center;
    }
    #choose{
        width:30%;
        display: flex;
        flex-direction:row;
        justify-content: space-around;

    }

</style>
</html>

<?php
include_once "databasemysqli.php";
$Room_Name=$_GET['Room_Name'];
$id=$_GET['id'];

?>