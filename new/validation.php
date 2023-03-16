<?php
include_once "database.php";
//initialize all the variables in this code
$fname=null;
$lname=null;
$email=null;
$password=null;
$vpassword=null;
$position=null;
$password_encrypt=null;
$flname=null;
$email_error=null;
$pass_error=null;
$vpass_error=null;
$succ=null;
//check if the user submit the form or not
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password= $_POST['password'];
$vpassword= $_POST['vpassword'];
$position=$_POST['positions'];
//hashing the password
$password_encrypt=password_hash($password, PASSWORD_DEFAULT);
//retrieving the email form database
$check="SELECT email FROM members WHERE email='$email'";
$resl=mysqli_query($connection,$check);
$row=mysqli_num_rows($resl);
//validation on the user data 
if (empty($fname) || empty($lname))
{
    $flname="This field is require";
}
if(empty($email))
{
    $email_error= "This field is require";
}
else if (! filter_var($email, FILTER_VALIDATE_EMAIL))
{
      $email_error= "Invalid email format";
}
else if ($row>0)
{
      $email_error= "This email already exists";
}
 if(empty($password))
{
    $pass_error= "This field is require";
}
else if (strlen($password)< 8)
{
   $pass_error= "Password must be more then 8 char";
}

 else if(! preg_match("/[a-zA-Z]/",$password))
{
   $pass_error= "Must conntain one letter";
}
if(empty($password))
{
    $vpass_error= "This field is require";
}
else if ($password != $vpassword)
{
    $vpass_error= "Must be match";
}
//if none of the above is empty then it will insert the user data into the members table and display the message
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($vpassword))
{
$succ="Done now you are a member of TechnoTour!";
$insert=$connection->prepare("INSERT INTO members (fname,lname,email,password_hash,position)
VALUES (?,?,?,?,?)");
$insert->bind_param("sssss",$fname,$lname,$email,$password_encrypt,$position);
$insert->execute();
}
}
?>