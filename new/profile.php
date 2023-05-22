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
            <div style='font-size:20px; text-transform: capitalize;' id='profile_name'>".$getuser["fname"]." ".$getuser["lname"]."</div>
            <p style='font-size:13px;'>".$getuser["email"]."</p>
            <hr style='width:100%;'>
            <form method='post'>
            <button type='submit' id='change_photo' name='c_photo'>change photo</button>
            <button type='submit' id='change_name' name='c_name'>change name</button>
            <form method='post' action='form/login.php' id='out_form'>            
            <button name='logout' type='submit' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'>logout   <img src='techno tour website design pro\\".$logout."' id='logout' title='log out' style='margin-left:10px;' width='23px'></button>
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

