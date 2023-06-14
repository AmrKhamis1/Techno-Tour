<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon"> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../CSS/forget pass.css"> 
    <title>new password</title>
    </head>
    <body>
        <form id='form1' action="" method="post">
            <label for="">Add Your New password</label><br>
            <input type="password" name="new" required><br>
            <button type="submit" name="done">Change</button>
</form>
    </body>
    <?php
    include "../database/databasemysqli.php";
    include "change.php";
    
    if(isset($_POST['done']))
    {
        session_start();
        $email3=$_SESSION['email2'];
        $newP=$_POST['new'];
        $newenp=password_hash($newP, PASSWORD_DEFAULT);
        $change_p=$connection->query("UPDATE members SET password='$newenp' WHERE email='$email3'");
        if($change_p)
        {
            header("location:../form.php");
        }
    }
?> 
</html>