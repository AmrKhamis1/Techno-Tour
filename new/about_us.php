<?php 
include "form/login.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS Black/about_us.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
  <title>About Us</title>
  <link rel='stylesheet' href='CSS Black\header.css'>
  <link rel="stylesheet" href="CSS 300/header.css">
  <link rel="stylesheet" href="CSS 300/about_us.css">
  <link rel="stylesheet" href="chat/chat.css">
      <link rel="stylesheet" href="chat/chat 300.css">

</head>
<body>
    <?php include "profile.php"; 
           include "header.php";    
           include "chat main.php";

    ?>   
<section class="aboutus"><!---Start aBout Us Section--->
  <!--------------Start Page Container----------------->
  <div class="container" id="container">
    <!--------------Start Header----------------->
 
    
   <!--------------End Header----------------->
   <!--------------Start About us contain----------------->
    <div class="aboutus-p" id="aboutus-p">
      <h3>About Us</h3>
      <p>we are NCT University students and focused on excellence and innovation in 
       education in our learning journey. As we enter our second year in 2023, we are
        proud of our achievements and committed to providing a transformative project experience. <br>
         With dedicated faculty, state-of-the-art facilities, and a focus on emerging technologies.</p>
         <button type="button" onclick="window.location.assign('mailto:technotour2023@gmail.com');"  id="contactus"> Contact Us Now </button>
    </div>
       <!--------------End About us contain----------------->
   <!--------------Start Team contain----------------->
    <div class="team">
      <h1>Techno-Tour Team</h1>
      <div id='team_container'>
      <div class="adel team_members" id="adel">
        <img src="techno tour website design pro/adel.png" alt="">
        <h2 class="names">Adel Sherif</h2>
      </div>
      <div class="amr team_members" id="amr">
        <img src="techno tour website design pro/amr.png" alt="">
        <h2 class="names">Amr Khames</h2>
      </div>
      <div class="ahmed team_members" id="ahmed">
        <img src="techno tour website design pro/ahmed.png" alt="">
        <h2 class="names team_members">Ahmed Hosny</h2>
      </div>
      <div class="sara team_members" id ="sara">
        <img src="techno tour website design pro/sara.png" alt="">
        <h2 class="names">Sara Magdy</h2>
      </div>
      <div class="shahd team_members" id="shahd">
        <img  src="techno tour website design pro/shahd.png" alt="">
        <h2 class="names">Shahd Abo Elkaramat</h2>
       </div>
      </div>
    </div>
       <!--------------END Team contain----------------->    <!--------------End Page Container----------------->


</section>
<!---Start aBout Project Section--->
<section class="about-project">
  <div class="about-project-body-paragraph">
      <div class="about-project-paragraph">
        <center><h1>About The Project</h1></center>
        <p>The project we would like to present is a revolutionary room booking system that was initiated in 2023. Initially, the team consisted  of four dedicated members,<br>
           each driven by a shared vision to simplify the process of reserving rooms within the university. Over time, the team expanded with a fifth member .<br>
           
         The core concept behind this system was born out of the difficulties faced by students, faculty, and staff when it came to booking rooms <br>
           for various university activities and the projector and PCs issues behind some rooms. Recognizing the need for a streamlined and efficient <br>
            solution, the team embarked on a mission to develop a comprehensive platform that would address these challenges.
          
          </p>
            <div class="photo" id="photo1"><img src="techno tour website design pro/NCT building.png" alt=""></div>
      </div>
  </div>
</section>
<div id='footer'>
    <div id='footer_words'>
   This project serves as a prototype for a comprehensive university room management system <br>
     It  also include a copyright form to address intellectual property concerns and protect the rights of all users within the system.<br>
    </div>
    <div style='background-color:#c6c6c638;width:2px; height:70px;align-self: center;'></div>
    <span id='footer_copy'>2023 Copyright© | Design By : <a style='text-decoration: none;' href='about_us.php'><span style='color:#fff;font-size:13px;;font-weight: 100; font-family:"Maven Pro";'>TechoTour Team</span></a></span>
   </div>
   </div>
<!---End aBout Project Section--->
</body>


<?php
if($getuser){
echo "<script src='JS/chat.js'></script>
<script src='chat/chat.js'></script>";
}
?>
<script src="JS/header.js"></script>
<script>
  window.onload=()=>{
    document.getElementById('header-style').style.display='flex';

  }
</script>
</html>