<?php 
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon"> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      <?php include 'dark_light/dark_light index.php';?>
      <title>TecnoTour</title>
   </head>
   <body>  
   <div id="loading-screen">
  <img id='logo-intro' src="techno tour website design pro\<?php echo $loading;?>" width='70px'>
      </div> 
   <div id="particles-js"></div>
   <?php include "profile.php"; 
   include "header.php";
   ?>    
      <div id="bage1" >
      <main style="display:flex;flex-direction:column;">
      <div id='home_open' class='no-animation'>
        <div class='home_open1 home_o no-animation'></div>
        <div class='home_open2 home_o no-animation'></div>
      </div>
      <div id='building_img_2' class='no-animation' >
    <img class='no-animation' src="techno tour website design pro/NCT building real.png" alt="">
    </div>
         <div class="hero">
         <font style="color:white;font-size:30px; margin-top:0%;align-items:center;text-align:center;" class="hero-header">
                <?php
                $hero='THE BEST BOOKING GUIDE FOR PROFESSORS,ASSISTANTS,';
                $hero2='STUDENTS AND EXTERNAL USERS IN NCTU.';
                for($i=0;$i<100;$i++){
                  if(isset($hero[$i])){
                    if($hero[$i]==' '){
                      echo "<span class='animate'>&nbsp</span>";
                    }else{
                    echo "<span class='animate'>".$hero[$i]."</span>";}
                  }else{
                    break;
                  }
                  
                }echo "<br>";
                for($i=0;$i<100;$i++){
                  if(isset($hero2[$i])){
                    if($hero2[$i]==' '){
                      echo "<span class='animate'>&nbsp</span>";
                    }else{
                    echo "<span class='animate'>".$hero2[$i]."</span>";
                  }
                  }else{
                    break;
                  }
                  
                } 
              
                ?>
                     
                     <br> 
                     <span id='head-home'>
                     Welcome to our university room reservation system! We understand the importance of a <br>
                      seamless and convenient booking process for students, external users, and professors alike. <br>
                       Our user-friendly platform allows you to effortlessly reserve a rooms. <br>
                        if you are external user attending a conference, our system caters to your diverse needs. With just a <br>
                          few clicks, you can explore available options, select the perfect room,and finalize <br>
                          your reservation. We are committed to providing an inclusive and efficient experience, <br>
                           enabling you to focus on your professional engagements. <br>
                           Join us and simplify room reservation process today!</span>
                     <?php
                     if(isset($getuser)){
                    echo "<button type='button' onclick='window.location.assign(`rooms.php?theme=".$theme2."`);' id='NCT-button' class='tour-button'>
                          Rooms
                         </button>";
                        }
                         ?>
                     </font>
                     <section class="scrollable-section">
  <div class="photo-grid">
    <?php
      $count=4;
      include "broadcast show.php";
      for($i=0;$i<$count;$i++){
        if(isset($caption[$i])){

        
            echo "
                <div class='photo-container'>
      <img src='posts/".$image[$i]."' alt='Photo 1' class='photo'>
      <div class='overlay'>
        <p>".substr($caption[$i],0,150)."...</p>
      </div>
      <div class='read-here'>
        <a href='broadcast.php?theme=".$theme2."'>Read Here</a>
      </div>
    </div> 
            
            ";
          }
      }
    ?>
  
  </div>
</section>
         </div> 
         
         <br><br> 
      </main>
   </div>
   <br><br>                     
                     <div id='about-det'>
                           <div id='about-ex'>x</div>
                            <div id='detailes'><img style='width:100vw;'  src='techno tour website design pro/details.png'></div>
                           <div id='about-det-1' class='about-dets'>
                              <font class='building_det'>Building (A)</font>
                              <font class='building_det'>Fourth Floor</font>
                              <font class='building_det'>Second Floor</font>
                              <font class='building_det'>Staff 99+</font>
                              <font class='building_det'>Programs 6</font>
                           </div>
                           <div id='about-det-2' class='about-dets'>
                           <font class='building_det2'>Meeting Floor</font>
                              <font class='building_det2'>Third Floor</font>
                              <font class='building_det2'>First Floor</font>
                           </div>
                     </div>  
   <div id="bage2">
    <div id="techno-tour-notify">
      <div>Having university room reservations is of utmost importance for both students and academic institutions. <br>
       It ensures a smooth and efficient utilization of available resources while providing students with a sense of security and comfort. <br>
        With the ever-increasing number of students enrolling in universities, a streamlined reservation system becomes crucial to manage the limited <br>
         campus accommodations effectively. By creating a dedicated system for room reservations, we aim to simplify the process for our users, enabling <br>
          them to conveniently select and book their preferred rooms. <br>
          This solution not only saves time and effort but also enhances the overall experience of students, <br>
           allowing them to focus on their studies and personal growth without worrying about housing arrangements.</div> 
       <div><img src=<?php echo $photo1; ?> width='200px' alt=""></div>

    </div>
<br>
<br>
<div id='out-links'>
      <img src="techno tour website design pro/NCT logo3.png" alt="">
      <img src="techno tour website design pro/useful-3.png" alt="">
      <img src="techno tour website design pro/useful-2.png" alt="">
    </div>
    <br>
    <br>
<div id="techno-tour-notify2">
  <div><img src=<?php echo $photo2;?> width='150px' alt=""></div>
          <div>In addition to catering to students, our system for university room reservations also extends its benefits to external users and professors. <br>
           Recognizing the diverse needs of the academic community, we have designed the system to accommodate bookings from external users, such as guest speakers, <br>
            conference attendees, and visiting scholars. This feature not only fosters collaboration and knowledge exchange but also generates additional revenue <br>
             for the institution. Furthermore, the system enables professors and other faculty members to easily reserve rooms for their academic activities, <br>
              including meetings, seminars, and research discussions. By offering a user-friendly interface accessible to both internal and external stakeholders, <br>
               our system promotes inclusivity and efficient resource utilization across the university campus.
          </div> 
    </div>
    <br>
    <br>
      <div id="building-div"> <img id="building" src="techno tour website design pro/NCT building.png" alt="uni-photo">  </div> 
      <p id="about-uni">Technological universities are an extension of the path of technical education students,which works to <br>
          provide them with practical and scientific skills to keep pace with the requirements of <br>
           the local and international labor market, through the technological programs that operate <br>
            in the faculties of the university.</p>
      <div id="u-contact"> 
         <a href="http://nctu.edu.eg" style="font-family: Impact;text-decoration: none;color:white;">NCTU</a>
       <img onclick="window.location.assign('https://www.facebook.com/nctu.edu.eg/');" src="techno tour website design pro/facebook.png" style="cursor: pointer;" width="30px"> 
       <a href="mailto:info@nctu.edu.eg"><img src="techno tour website design pro/email.png" style="cursor: pointer;"  width="30px" alt=""></a>
      </div>
   </div>
   <div id="scrollup" onclick="scrollup();">Up</div>
   </body>
   <script src="JS/home js.js"></script>
      <script src="JS/header.js"></script>
       <script src="JS/index.js"></script>
   <script type="text/javascript" src="JS/particles.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
</html>
