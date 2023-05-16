<?php 
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/about_us.css">
  <link rel="stylesheet" href="CSS/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
  <title>About Us</title>
  <?php include 'dark_light/dark_light index.php';?>
</head>
<body>

<section class="aboutus"><!---Start aBout Us Section--->
  <!--------------Start Page Container----------------->
  <div class="container" id="container">
    <!--------------Start Header----------------->
    <?php include "profile.php"; 
           include "header.php";    
    ?>    
    
   <!--------------End Header----------------->
   <!--------------Start About us contain----------------->
    <div class="aboutus-p" id="aboutus-p">
      <h3>About Us</h3>
      <p></p>
         <button type="button" onclick="window.location.assign('contact us.php');"  id="contactus"> Contact Us Now </button>
    </div>
       <!--------------End About us contain----------------->
   <!--------------Start Team contain----------------->
    <div class="team">
      <h1>Techno-Tour Team</h1>
      <div class="adel team_members" id="adel">
        <img src="techno tour website design pro/adel.jpg" alt="">
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
       <!--------------END Team contain----------------->
  </div>
    <!--------------End Page Container----------------->

                    <!-------------------------------pop up pages----------------------------->

<!------------Start Adel popup---------->

<!------------Start Amr popup---------->
<div id="popup-amr-body">
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
    <span id="image"><img src="techno tour website design pro/amr.png" alt="amr"></span>
    <h2 id="popup-name">Amr Khames</h2>
    <!-----------Skills----------->
    <span id="popup-skills">
      <span id="popup-title-Skills">Skills</span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior Full-stack web design: </span> 
        <span id="popup-subject-body"><span id="popup-amr-skill1">70%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Senior Graphic :</span> 
        <span id="popup-subject-body"><span id="popup-amr-skill2">95%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior 3d :</span> 
        <span id="popup-subject-body"><span id="popup-amr-skill3">60%</span></span>
      </span>
    </span>
    <!-----------Contact----------->
    <span id="popup-contact">
      <span id="popup-contact-title">Contact Me</span>
      <span id="popup-contact-row">
        <span id="popup-amr-facebook"><img src="techno tour website design pro/facebook.png" alt="">Facebook: </span>
        <p><a href="https://www.facebook.com/amr.khamis.7127">Amr Khames</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-amr-gmail"><img src="techno tour website design pro/gmail.png" alt="">Gmail: </span>
        <p><a href="khamisamr90@gmail.com">khamisamr90<br>@gmail.com</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-amr-linkedin"><img src="techno tour website design pro/linkedin.png" alt="">Linkedin: </span>
        <p><a href="https://www.linkedin.com/in/amr-khamis-51041622a">amr-khamis</a> </p>
      </span>
    </span>
  </div></center>
</div>
<!------------ End Amr popup---------->
                <!-------------------------------End pop up pages----------------------------->

</section>
<!---Start aBout Project Section--->
<section class="about-project">
  <div class="about-project-body-paragraph">
      <div class="about-project-paragraph">
        <center><h1>About The Project</h1></center>
        <p></p>
      </div>
  </div>
  <div class="project-photos">
      <div class="photo" id="photo1"><img src="techno tour website design pro/NCT building.png" alt=""></div>
   </div>
</section>
<!---End aBout Project Section--->
</body>
<script src="JS/header.js"></script>
<!-------------------------------Start  pop up pages Js----------------------------->
<script>
  /*************Adel And cancelBtn Js********/
    const   section1 = document.querySelector("section"),
            adel = section1.querySelector("#adel"),
           cancelBtn = document.querySelectorAll("#close");


        adel.addEventListener("click", ()=>{
            section1.classList.add("show-adel");
        });
        cancelBtn.forEach(cBtn => {
            cBtn.addEventListener("click", () =>{
                section1.classList.remove("show-adel");
            });
        });
    /*************Amr Js***************/
        section2 = document.querySelector("section"),
            amr = section2.querySelector("#amr"),

        amr.addEventListener("click", ()=>{
            section2.classList.add("show-amr");
        });
        cancelBtn.forEach(cBtn => {
            cBtn.addEventListener("click", () =>{
                section2.classList.remove("show-amr");
            });
        });
    /*************Ahmed Js***************/
        section3 = document.querySelector("section"),
            ahmed = section3.querySelector("#ahmed"),

        ahmed.addEventListener("click", ()=>{
          section3.classList.add("show-ahmed");
        });
        cancelBtn.forEach(cBtn => {
            cBtn.addEventListener("click", () =>{
              section3.classList.remove("show-ahmed");
            });
        });
            /*************Sara Js***************/
            section4 = document.querySelector("section"),
            sara = section4.querySelector("#sara"),

            sara.addEventListener("click", ()=>{
          section4.classList.add("show-sara");
        });
        cancelBtn.forEach(cBtn => {
            cBtn.addEventListener("click", () =>{
              section4.classList.remove("show-sara");
            });
        });
            /*************Shahd Js***************/
            section5 = document.querySelector("section"),
            shahd = section5.querySelector("#shahd"),

            shahd.addEventListener("click", ()=>{
              section5.classList.add("show-shahd");
        });
        cancelBtn.forEach(cBtn => {
            cBtn.addEventListener("click", () =>{
              section5.classList.remove("show-shahd");
            });
        });
        window.onload=()=>{
          document.getElementById('header-style').style.display='flex';
        }
</script>
<!-------------------------------End pop up pages Js----------------------------->

</html>