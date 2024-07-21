<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon"> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="CSS Black/forget pass.css"> 
    <title>new name</title>
    </head>
    <body>
        <form id='form1' action="" method="post">
            <label for="">New Fisrt Name</label><br>
            <input type="text" name="fname" required><br>
            <label for="">New Last Name</label><br>
            <input type="text" name="lname" required><br>
            <button type="submit" name="change">Change</button>
</form>
    </body>
<?php 
  include "database/databasemysqli.php";
  session_start();
  include "session.php";
  
  if(!isset($getuser)){
      header("location:index.php");
  }
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
    ?>