<?php
 include_once "validation.php";
include_once "login.php";?>
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
    <form id="form11" action="login.php" method="post" novalidate>
        <img src="techno tour website design pro/login.png" width="50px" alt="login.png">
        <h1>Login</h1>
        <?php echo $ema_pass;?>
        <br>
        <label for="login-email">Email<span class="errors"><?php echo $error ;?></span></label>
        <input id="login-email" name="login-email" type="email" class="input-text input-text1" required>
        <label for="login-password" style="margin-top: 30px;" >Password<span class="errors"><?php echo $error ;?></span></label>
        <input id="login-password" name="login-password" type="password" class="input-text input-text1" required>
        <button class="buttons1" type="submit" name="login-submit">Done</button>
        <button class="buttons1" type="button" onclick="signup();" name="signup-button">Sign Up</button>
    </form>
    <form id="form22" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" novalidate>

             <div id="form1">
                <h1>SignUp</h1>
            <label for="fname">First Name <span class="errors"><?php echo $flname ;?></span></label>
            <input id="fname" onkeyup="form1();" name="fname" type="text" class="input-text input-text2"  required>
            <label for="lname">Last Name <span class="errors"><?php echo $flname ;?></span></label>
            <input id="lname" onkeyup="form1();" name="lname" type="text" class="input-text input-text2" required>
            <label for="email">Email <span class="errors"><?php echo $email_error ;?></span></label>
            <input id="email" name="email" type="email" class="input-text input-text2" required>
            <label for="password" >Password <span class="errors"><?php echo $pass_error;?><span></label>
            <input id="password" name="password" onkeyup="form2();" type="password" class="input-text input-text2" required>
            <label for="vpassword" >Verify Password <span class="errors"><?php echo $vpass_error ;?></span></label>
            <input id="vpassword" name="vpassword" onkeyup="form3();" type="password" class="input-text input-text2" required>
            <label for="photos">Add Your photo:</label>
            <input name="photos" type="file" id="photos">
        </div>
            <div id="form2">
            <label for="positions">Choose Your position</label>
            <select onchange="form1();" name="positions" id="positions" required>
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
            <p class="error succ" ><?php echo $succ ;?></p>
            <button class="buttons2" type="button" onclick="login();" name="login-button">Login</button>
        </div>
        </form>
        <img id="smoke" src="techno tour website design pro/smoke04.gif" alt="">
</body>
</html> 