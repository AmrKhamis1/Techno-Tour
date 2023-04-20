<html>
<head>
    <link rel="stylesheet" href="../CSS/forget pass.css"> 
    <title>forget password</title>
    </head>
    <body>
        

<form id='form1' action="" method="post">
            <?php include "change.php";?>
    <h1> Reset the password</h1>
    <br>
    <span style='color:rgba(0, 106, 255, 0.5)'><?php 
    if(isset($faild) || isset($sucss)){
         echo $faild; echo $sucss;
    }
   
    ?></span>
        <label for="">Email</label>
        <input type="email" name="reset">
       <button type="submit" name="reset2" >Send</button>
</form>
</body>
</html>