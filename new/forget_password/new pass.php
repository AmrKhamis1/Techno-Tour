<html>
    <body>
        <form action="" method="post">
            <label for="">New password</label>
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