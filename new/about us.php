<?php 
include_once "database/databasemysqli.php";
include_once "form/login.php";
session_start();
if(isset($_SESSION["id"])){
   $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
}
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
</head>
<body>

<section class="aboutus"><!---Start aBout Us Section--->
  <!--------------Start Page Container----------------->
  <div class="container" id="container">
    <!--------------Start Header----------------->
    <header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo2.png" alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <?php if(isset($getuser)){ echo "<li><a href='booking.php' class='links'>Booking</a></li>";} ?>
            <li><a href="what's new.php" class="links">What's New</a></li>
            <li><a href="contact us.php" class="links">Contact Us</a></li>
            <li><a href="about us.php" class="links">About Us</a> </li>
         </ul>

         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a <?php
          if(isset($getuser)){
            echo "onclick='logout_show();'";
            }else{
            echo "href='form.php'";
              }
         ?> id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><img class="login-logo-img" onclick="logout_show();" src="techno tour website design pro\login.png" alt=".."></div>
         <?php if(isset($getuser)){echo "
         <form method='post' id='out_form'>            

            <button name='logout' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'><img src='techno tour website design pro\logout.png' id='logout' title='log out' width='23px'></button>

            </form>
            ";} ?>
      </header>
   <!--------------End Header----------------->
   <!--------------Start About us contain----------------->
    <div class="aboutus-p" id="aboutus-p">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis cumque delectus obcaecati earum unde quasi accusamus consequatur ducimus blanditiis,
         facilis nesciunt aut iure magni amet officia ipsum pariatur voluptatibus.</p>
         <button type="button" onclick="window.location.assign('contact us.php');"  id="contactus"> Contact Us Now </button>
    </div>
       <!--------------End About us contain----------------->
   <!--------------Start Team contain----------------->
    <div class="team">
      <h1>Techno-Tour Team</h1>
      <div class="adel" id="adel">
        <img src="techno tour website design pro/adel.jpg" alt="Adel">
        <h2 class="names">Adel Sherif</h2>
      </div>
      <div class="amr" id="amr">
        <img src="techno tour website design pro/amr.jpg" alt="Amr">
        <h2 class="names">Amr Khames</h2>
      </div>
      <div class="ahmed" id="ahmed">
        <img src="techno tour website design pro/ahmed.jpeg" alt="Ahmed">
        <h2 class="names">Ahmed Hosny</h2>
      </div>
      <div class="sara" id ="sara">
        <img src="techno tour website design pro/sara.jpeg" alt="Sara">
        <h2 class="names">Sara Magdy</h2>
      </div>
      <div class="shahd" id="shahd">
        <img src="techno tour website design pro/shahd.jpeg" alt="Shahd">
        <h2 class="names">Shahd Abo Elkaramat</h2>
      </div>
    </div>
       <!--------------END Team contain----------------->
  </div>
    <!--------------End Page Container----------------->

                    <!-------------------------------pop up pages----------------------------->

<!------------Start Adel popup---------->
<div id="popup-adel-body">
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
    <span id="image"><img src="techno tour website design pro/adel.jpg" alt="adel"></span>
    <h2 id="popup-name">Adel Sherif Adel</h2>
    <!-----------Skills----------->
    <span id="popup-skills">
      <span id="popup-title-Skills">Skills</span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior Front-end :</span> 
        <span id="popup-subject-body"><span id="popup-adel-skill1">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior Back-end :</span> 
        <span id="popup-subject-body"><span id="popup-adel-skill2">80%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Java Programming:</span> 
        <span id="popup-subject-body"><span id="popup-adel-skill3">90%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Database Programming :</span> 
        <span id="popup-subject-body"><span id="popup-adel-skill4">80%</span></span>
      </span>
    </span>
    <!-----------Contact----------->
    <span id="popup-contact">
      <span id="popup-contact-title">Contact Me</span> 
      <span id="popup-contact-row">
        <span id="popup-adel-facebook"><img src="techno tour website design pro/facebook.png" alt="">Facebook: </span>
        <p><a href="https://www.facebook.com/profile.php?id=100008321981890">Adel Sherif</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-adel-gmail"><img src="techno tour website design pro/gmail.png" alt="">Gmail: </span>
        <p><a href="Os6225091@Gmail.com">Os6225091@Gmail.com</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-adel-linkedin"><img src="techno tour website design pro/linkedin.png" alt="">Linkedin: </span>
        <p><a href="https://www.linkedin.com/in/adel-sherif-56941a253/">Adel-Sherif</a> </p>
      </span>
    </span>
  </div></center>
</div>
<!------------ End Adel popup---------->

<!------------Start Amr popup---------->
<div id="popup-amr-body">
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
    <span id="image"><img src="techno tour website design pro/amr.jpg" alt="amr"></span>
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

<!------------ Start Ahmed popup---------->
<div id="popup-ahmed-body">
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
    <span id="image"><img src="techno tour website design pro/ahmed.jpeg" alt="ahmed"></span>
    <h2 id="popup-name">Ahmed Hosny</h2>
    <!-----------Skills----------->
    <span id="popup-skills">
      <span id="popup-title-Skills">Skills</span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Html :</span> 
        <span id="popup-subject-body"><span id="popup-ahmed-skill1">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Css :</span> 
        <span id="popup-subject-body"><span id="popup-ahmed-skill2">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">JS :</span> 
        <span id="popup-subject-body"><span id="popup-ahmed-skill3">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Python :</span> 
        <span id="popup-subject-body"><span id="popup-ahmed-skill4">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">java :</span> 
        <span id="popup-subject-body"><span id="popup-ahmed-skill5">100%</span></span>
      </span>
    </span>
    <!-----------Contact----------->
    <span id="popup-contact">
      <span id="popup-contact-title">Contact Me</span> 
      <span id="popup-contact-row">
        <span id="popup-ahmed-facebook"><img src="techno tour website design pro/facebook.png" alt="">Facebook: </span>
        <p><a href="https://www.facebook.com/profile.php?id=100041003527060&mibextid=ZbWKwL">Ahmed Hosny</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-ahmed-gmail"><img src="techno tour website design pro/gmail.png" alt="">Gmail: </span>
        <p><a href="ahmedhosnikassab@gmail.com">ahmedhosni@gmail.com</a> </p>
      </span>
    </span>
  </div></center>
</div>
<!------------ End Ahmed popup---------->

<!------------ Start Sara popup---------->
<div id="popup-sara-body">  
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
    <span id="image"><img src="techno tour website design pro/sara.jpeg" alt="sara"></span>
    <h2 id="popup-name">Sara Magdy</h2>
    <!-----------Skills----------->
    <span id="popup-skills">
      <span id="popup-title-Skills">Skills</span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior back-end :</span> 
        <span id="popup-subject-body"><span id="popup-sara-skill1">95%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior front-end :</span> 
        <span id="popup-subject-body"><span id="popup-sara-skill2">70%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Database programmer :</span> 
        <span id="popup-subject-body"><span id="popup-sara-skill3">87%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">java :</span> 
        <span id="popup-subject-body"><span id="popup-sara-skill4">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Python :</span> 
        <span id="popup-subject-body"><span id="popup-sara-skill5">100%</span></span>
      </span>
    </span>
    <!-----------Contact----------->
    <span id="popup-contact">
      <span id="popup-contact-title">Contact Me</span> 
      <span id="popup-contact-row">
        <span id="popup-sara-facebook"><img src="techno tour website design pro/facebook.png" alt="">Facebook: </span>
        <p><a href="https://www.facebook.com/sara.magdy.92167789?mibextid=LQQJ4d">Sara Magdy</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-sara-gmail"><img src="techno tour website design pro/gmail.png" alt="">Gmail: </span>
        <p><a href="saramagdyy77@gmail.com">saramagdyy77<br>@gmail.com</a> </p>
      </span>
    </span>
  </div></center>
</div>
<!------------ End Sara popup---------->

<!------------ Start Shahd popup---------->
<div id="popup-shahd-body">
  <img id ="close" src="techno tour website design pro/exit.png" alt="">
  <center><div class="popup-container">
  <span id="image"><img src="techno tour website design pro/shahd.jpeg" alt="shahd"></span>
    <h2 id="popup-name">Shahd Abo Elkaramat</h2>
    <!-----------Skills----------->
    <span id="popup-skills">
      <span id="popup-title-Skills">Skills</span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior back-end :</span> 
        <span id="popup-subject-body"><span id="popup-shahd-skill1">90%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Junior front-end :</span> 
        <span id="popup-subject-body"><span id="popup-shahd-skill2">70%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Database programmer :</span> 
        <span id="popup-subject-body"><span id="popup-shahd-skill3">70%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">java :</span> 
        <span id="popup-subject-body"><span id="popup-shahd-skill4">100%</span></span>
      </span>
      <span id="popup-subject-row">
        <span id="popup-subject-name">Python :</span> 
        <span id="popup-subject-body"><span id="popup-shahd-skill5">100%</span></span>
      </span>
    </span>
    <!-----------Contact----------->
    <span id="popup-contact">
      <span id="popup-contact-title">Contact Me</span> 
      <span id="popup-contact-row">
        <span id="popup-sara-facebook"><img src="techno tour website design pro/facebook.png" alt="">Facebook: </span>
        <p><a href="https://www.facebook.com/shoody.karam?mibextid=LQQJ4d">Shahd Karam</a> </p>
      </span>
      <span id="popup-contact-row">
        <span id="popup-sara-gmail"><img src="techno tour website design pro/gmail.png" alt="">Gmail: </span>
        <p><a href="Shahdkaram18@gmail.com">Shahdkaram18<br>@gmail.com</a> </p>
      </span>
    </span>
  </div></center>
</div>
<!------------ End Shahd popup---------->

                <!-------------------------------End pop up pages----------------------------->

</section>
<!---Start aBout Project Section--->
<section class="about-project">
  <div class="about-project-body-paragraph">
      <div class="about-project-paragraph">
        <center><h1>About The Project</h1></center>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt molestias accusamus quisquam! Autem nostrum itaque voluptatem quam dolore quisquam laboriosam neque. Doloribus et commodi non vel amet deserunt, perspiciatis quaerat porro molestiae autem, neque aut quidem est?</p>
      </div>
  </div>
  <div class="project-photos">
      <div class="photo" id="photo1"><img src="techno tour website design pro/NCT building.png" alt=""></div>
      <div class="photo" id="photo2"><img src="techno tour website design pro/NCT building.png" alt=""></div>
      <div class="photo" id="photo3"><img src="techno tour website design pro/NCT building.png" alt=""></div>
      <div class="photo" id="photo4"><img src="techno tour website design pro/NCT building.png" alt=""></div>
      <div class="photo" id="photo5"><img src="techno tour website design pro/NCT building.png" alt=""></div>
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
</script>
<!-------------------------------End pop up pages Js----------------------------->

</html>