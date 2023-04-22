<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css"> 
    <title>Document</title>
</head>
<body>
    <div id='container'>
    <h1>Book Quicly for a lecture</h1>
    <form action="post">
        <label for="lucture_name" style='font-weight:600;'>Is There are a Name for Lecture ? </label>
       <div id="choose"> <label for="enable-input">Yes</label>
        <input type="radio" name="input-enabled" id="enable-input" value="1">
        <label for="disable-input">No</label>
        <input type="radio" name="input-enabled" id="disable-input" value="0"></div>
        <input type="text" name="lucture_name" id="lucture_name" placeholder="Enter the name">
        <label for="lucture_name">From Now To ?</label>
        <select name="to" id="to">
            <option value='1'>one duration long</option>
            <option value='2'>two durations long</option>
            <option value='3'>three durations long</option>
        </select>
    </form>
</div>
</body>
<script>


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
        background-image:radial-gradient(rgb(111, 111, 111),rgb(2, 0, 52));
        background-size:150% 150%;
        background-attachment: fixed;
        background-position:center;
    }
    #container{
        transform: scale(1.2);
        height: 50vh;
        width:40vw;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
        background-color:white;
        background-image:radial-gradient(rgb(255, 255, 255),rgb(255, 255,255));
        border-radius: 30px;
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
    input{
        width:100px;
        outline:none;
        border:0;
        border-bottom:2px;
        border-style:groove;
        border-color:black;
    }


</style>
</html>

<?php
include "database/databasemysqli.php";
$Room_Name=$_GET['Room_Name'];
$id=$_GET['id'];

?>