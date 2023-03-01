
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/form.css">
    <title>Form</title>
</head>
<body>
    <div id="container">
    </div>
    <form action="form.php" method="post" enctype="multipart/form-data">

             <div id="form1">
                <h1>SignUp</h1>
            <label for="fname">First Name</label>
            <input id="fname" type="text" class="input-text" required>
            <label for="lname">Last Name</label >
            <input id="lname" type="text" class="input-text" required>
            <label for="email">Email</label>
            <input id="email" type="email" class="input-text" required>
            <label for="password">Password <span id="strong">| <span></label>
            <input id="password" type="password" class="input-text" required>
            <label for="vpassword">Verify Password<p id="Worning"></p></label>
            <input id="vpassword" type="password" class="input-text" required>
            <label for="photos">Add Your photo:</label>
            <input name="photos" type="file" id="photos">
        </div>
            <div id="form2">
            <label for="positions">Choose Your position</label>
            <select name="positions" id="positions">
                <option value="Dr">Dr</option>
                <option value="Assisstant">Assisstant</option>
                <option value="Student">Student</option>
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
            <button type="submit" name="submit">Done</button>
        </div>
        
        </form>
        <img id="smoke" src="techno tour website design pro/smoke04.gif" alt="">
        <script src="JS/form.js"></script>
</body>

</html> 