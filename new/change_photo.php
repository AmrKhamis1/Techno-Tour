<html>
    <head>
    <link rel="stylesheet" href="CSS/forget pass.css"> 
    <title>new name</title>
    </head>
    <body>
        <form id='form1' action="" method="post" enctype="multipart/form-data">
            <label for="">Add Your New Photo</label><br>
            <input type="file" name="new_photo" required><br>
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
            if(unlink("photos/".$getuser['image']))
            {
            $id=$getuser['id'];
            $email=$getuser['email'];
            $new=file_get_contents($_FILES["new_photo"]["tmp_name"]);
            $myfile = fopen("photos/".$email." photo.png", "w");
            fwrite($myfile,$new);
            $photo="$email photo.png";
                header("location:index.php");
            }
        }
    }
    ?>