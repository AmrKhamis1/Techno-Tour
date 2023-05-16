<html>
    <head>
    <link rel="stylesheet" href="CSS/forget pass.css"> 
    <title>new name</title>
    </head>
    <body>
        <form id='form1' action="" method="post">
            <label for="">Add Your New Fname</label><br>
            <input type="text" name="fname" required><br>
            <label for="">Add Your New Lname</label><br>
            <input type="text" name="lname" required><br>
            <button type="submit" name="change">Change</button>
</form>
    </body>
<?php 
  include "database/databasemysqli.php";
  include "session.php";
    if(isset($getuser))
    {
        if(isset($_POST['change']))
        {
            $id=$getuser['id'];
            $new_fname=$_POST['fname'];
            $new_lname=$_POST['lname'];
            $change_n=$connection->query("UPDATE members SET fname='$new_fname',lname='$new_lname' WHERE id='$id'");
            if($change_n)
            {
                header("location:index.php");
            }
        }
    }
    ?>