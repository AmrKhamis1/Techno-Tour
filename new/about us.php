<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS\about_us.css">
  <link rel="stylesheet" href="CSS\header.css">
  <script href="JS/home js.js"></script>
  <title>About Us</title>
</head>
<body>  
<header id="header-style">
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo3.png" alt="..">
         <img src="techno tour website design pro\NCT logo3.png" style="margin-left:50px;"  width="0px" alt="">
         <ul >
            <li><a onclick="window.location.assign('index.php');" class="links">Home</a></li>
            <li><a href="booking.php" class="links">Booking</a></li>
            <li><a href="what's new.php" class="links">What's New</a></li>
            <li><a href="contact us.php" class="links">Contact Us</a></li>
            <li><a href="about us.php" class="links">About Us</a> </li>
         </ul>
         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a href="form.php" id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><img class="login-logo-img" src="techno tour website design pro\login.png" alt=".."></div>
        
      </header>
    <div class="aboutus" id="aboutus">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis cumque delectus obcaecati earum unde quasi accusamus consequatur ducimus blanditiis,
         facilis nesciunt aut iure magni amet officia ipsum pariatur voluptatibus.</p>
      <button type="button" onclick="window.location.assign('contact us.php');"  id="contactus"> Contact Us Now </button>
    </div>
    <div class="team">
      <h3>Meet our Team :</h3>
      <br>
      <div class="members adel">
        <img src="techno tour website design pro/adel.jpg" alt="Adel">
        <p>Adel Sherif</p>
      </div>
      <div class="members amr">
        <img src="techno tour website design pro/amr.jpg" alt="Amr">
        <p>Amr Khames</p>
      </div>
      <div class="members ahmed">
        <img src="techno tour website design pro/ahmed.jpg" alt="Ahmed">
        <p>Ahmed Hosny</p>
      </div>
      <div class="members sara">
        <img src="techno tour website design pro/sara.jpg" alt="Sara">
        <p>Sara Magdy</p>
      </div>
      <div class="members shahd">
        <img src="techno tour website design pro/shahd.jpg" alt="Shahd">
        <p>Shahd Abo Elkaramat</p>
      </div>
    </div>
</body>
</html>