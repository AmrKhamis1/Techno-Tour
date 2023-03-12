<?php 
$err=NULL;
$login=NULL;
if(empty($_GET['err'])){
$err=NULL;
}else{
$err=$_GET['err'];
}
if(empty($_GET['login'])){
    $login=NULL;
    }else{
        $id=$_GET['id'];
    header("Location:index.php?id=$id");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/form.css">        
    <script src="JS/form.js"></script>
    <title>Form</title>
</head>
<body onload="animation();">
    <div id="container">
    </div>
    <form id="form11" action="mempers/login.php" method="post">
        <img src="techno tour website design pro/login.png" width="50px" alt="login.png">
        <h1>Login</h1>
        <p><?php if($err=="err"){echo "password or email not valid!";}?></p>
        <br>
        <label for="login-email">Email</label>
        <input id="login-email" name="login-email" type="email" class="input-text input-text1" required>
        <label for="login-password" style="margin-top: 30px;" >Password</label>
        <input id="login-password" name="login-password" type="password" class="input-text input-text1" required>
        <button class="buttons1" type="submit" name="login-submit">Done</button>
        <button class="buttons1" type="button" onclick="signup();" name="signup-button">Sign Up</button>
    </form>
    <form style="display: none;" id="form22" action="mempers/signup.php" method="post" >

             <div id="form1">
                <h1>SignUp</h1>
                <?php
                $err=NULL;
                if(empty($_GET['err'])){
                    $err=NULL;
                }else{
                    $err=$_GET['err'];
                }
                
                if($err=="empty"){
                     echo "<script>window.alert('All filds are required !')</script>";
                }else if($err=="email"){
                    echo "<script>window.alert('Email format not correct !')</script>";
                }else if($err=="password"){
                    echo "<script>window.alert('Password low lenth !')</script>";
                }else if($err=="vpassword"){
                    echo "<script>window.alert('Password Verify not match !')</script>";
                }else if($err=="password2"){
                    echo "<script>window.alert('Password not strong yet !')</script>";
                }else if($err=="no"){
                    echo "<script>window.alert('done now you are a memper of TechnoTour !')</script>";
                }
                ?>
            <label for="fname">First Name</label>
            <input id="fname" onkeyup="form1();" name="fname" type="text" class="input-text input-text2" required>
            <label for="lname">Last Name</label >
            <input id="lname" onkeyup="form1();" name="lname" type="text" class="input-text input-text2" required>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="input-text input-text2" required>
            <label for="password" >Password <span id="strong">| <span></label>
            <input id="password" name="password" onkeyup="form2();" type="password" class="input-text input-text2" required>
            <label for="vpassword" >Verify Password<span id="Worning"></span></label>
            <input id="vpassword" name="vpassword" onkeyup="form3();" type="password" class="input-text input-text2" required>
            <label for="photos">Add Your photo:</label>
            <input name="photos" type="file" id="photos">
        </div>
            <div id="form2">
            <label for="positions">Choose Your position</label>
            <select onchange="form1();" name="position" id="positions" required>
                <option value="Dr">Dr</option>
                <option value="Assisstant">Assisstant</option>
                <option value="Student">Student</option>
                <option value="Technical">Technical</option>
                <option value="External">External</option>
            </select>
            <label for="name">Your Name</label>
            <input id="name" type="text" disabled>
            <label for="photo">Your photo</label>
            <input id="photo" width="50px" height="50px" disabled>
            <script>
            setInterval(function(){ 
                var str = document.getElementById("photos");
                var str2 = str.value;
                var str3 = str2.slice(12);
            var x4=  document.getElementById('photo');
               x4.value=str3;
        },1000);
           </script>

            <label for="position">Your position</label>
            <input id="position" type="text" disabled>
            <button class="buttons2" type="submit" name="signup-submit">Done</button>
            <button class="buttons2" type="button" onclick="login();" name="login-button">Login</button>
        </div>
        </form>
        <img id="smoke" src="techno tour website design pro/smoke04.gif" alt="">
</body>
</html> 