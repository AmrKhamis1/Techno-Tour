<?php
include_once "databasemysqli.php";
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
if(isset($_POST['signup-submit'])){
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
if (empty($fname) || empty($lname)){
    $flname="This field is require";
    $fl=0;
}else{
    $fl=1;
}
if(empty($email)){
    $email_error= "email field is require";
    $em=0;
}
else if (! filter_var($email, FILTER_VALIDATE_EMAIL)){
      $email_error= "Invalid email format";
      $em=0;
}
else if ($row>0)
{
      $email_error= "This email already exists";
      $em=0;

}else{
    $em=1;
}
 if(empty($password))
{
    $pass_error= "password field is require";
    $ps=0;
}
else if (strlen($password)< 8)
{
   $pass_error= "Password must be more then 8 char";
   $ps=0;
}

 else if(! preg_match("/[a-zA-Z]/",$password))
{
   $pass_error= "Must conntain one letter";
   $ps=0;
}
else{
    $ps=1;
}
if(empty($vpassword))
{
    $vpass_error= "Verifcation field is require";
    $vps=0;
}
else if ($password != $vpassword)
{
    $vpass_error= "Must be match";
    $vps=0;
}else{
    $vps=1;
}
//if none of the above is empty then it will insert the user data into the members table and display the message
if ($fl==1 && $em==1 && $ps==1 && $vps==1)
{
$succ="Done now you are a member of TechnoTour!";
$insert=$connection->prepare("INSERT INTO members(fname,lname,email,password,position)
VALUES (?,?,?,?,?)");
$insert->bind_param("sssss",$fname,$lname,$email,$password_encrypt,$position);
$insert->execute();
}
}
?>