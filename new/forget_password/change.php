<?php
include "../database/databasemysqli.php";
$sucss=null;
$faild=null;
$email=null;

if(isset($_POST['reset2']))
{
    if(empty($_POST['reset2'])){
        $faild="can't be empty";
    }else{
    session_start();
    $email=$_POST['reset'];
    $_SESSION['email2']=$email;
    $sql="SELECT email FROM members WHERE email='$email'";
    $check=mysqli_query($connection,$sql);
    if(mysqli_num_rows( $check)>0)
    {
        $row=mysqli_fetch_array( $check);
        //$sucss="Check your gmail";

    }
    else
    {
        $faild="Email doesn't exist";
    }
}
}
    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../mailer/src/Exception.php';
require '../mailer/src/PHPMailer.php';
require '../mailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'technotour2023@gmail.com';                     //SMTP username
    $mail->Password   = 'kjhginemxzbuthsw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('technotour2023@gmail.com', 'Technotour');
    $mail->addAddress($email);     //Add a recipient
    $rand=substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset password';
    $mail->Body    = 'To reset your password click <a href="http://localhost/test/Techno-Tour-main/new/forget_password/new pass.php?code='.$rand.'">here
    </a>';
    $sql="SELECT email FROM members WHERE email='$email'";
    $check=mysqli_query($connection,$sql);
    if(mysqli_num_rows( $check)>0)
    {
        $st="UPDATE members SET code='$rand' WHERE email='$email'";
        $ex=mysqli_query($connection,$st);
      $mail->send();
      $sucss= 'Message has been sent, Check your email';

    }
} catch (Exception $e) {
    
}
?>