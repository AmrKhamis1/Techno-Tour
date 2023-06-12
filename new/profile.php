<?php
     
       
  
         if(isset($getuser)){
            echo "
            <div id='profile'> ";
            if($getuser!=NULL){
               echo  "<div id='profile_photo'><img src='photos\\".$getuser['image']."'></div>";
            }else{
               echo  "<div id='profile_photo'><img src='techno tour website design pro\unknown.png'></div>";
            }
            
           echo "
            <div id='profile_name'>".$getuser["fname"]." ".$getuser["lname"]."</div>
            <p id='profile_p'>".$getuser["email"]."</p>
            <hr style='width: 80%;border-radius: 3pc;background-color:#00000029;height: 2px;border-color: #00000000;'>
            <form action='' method='post'>
            <button type='submit' id='change_photo' name='c_photo'>change photo</button>
            <button type='submit' id='change_name' name='c_name'>change name</button>
            <form method='post' action='form/login.php' id='out_form'>            
            <button id='out_form' name='logout' type='submit'>logout   <img src='techno tour website design pro\\".$logout."' id='logout' title='log out' style='margin-left:10px;' width='19px'></button>
            </form>
            </div>
            ";
            if(isset($_POST['c_photo']))
            {
               header("location:change_photo.php");
            }  
            if(isset($_POST['c_name']))
            {
               header("location:change_name.php");
            }
         }
           
           ?>

