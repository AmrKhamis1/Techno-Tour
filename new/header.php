<header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src='techno tour website design pro\web site logo2 light.png' alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <?php if(isset($getuser)){ 
                     if($getuser['position']!="Technical"){
                          echo "<li><a href='booking.php' class='links'>Booking</a></li>";
                     }
                  }
            ?>
            <li><a href="broadcast.php" class="links">Broadcast</a></li>
            <li><a href="about_us.php" class="links">About</a> </li>


       
         </ul>
         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src='techno tour website design pro\search light.png' alt="..">
         </div>
         <div class="user-logo"><a 
         <?php
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
         </a><div id='login-div'><img class="login-logo-img" onclick="logout_show();"          
         <?php
          if(isset($getuser)){
            if($getuser['image']!=NULL){
                echo "src='photos\\".$getuser['image']."'";
             } else{
              echo "src='techno tour website design pro\login.png' style='width:20px;'";
              }
         }else{
          echo "src='techno tour website design pro\login.png' style='width:20px;'";
         }
         ?> alt=".."></div></div>

         
      </header>