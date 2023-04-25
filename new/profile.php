<?php
     
       
  
         if(isset($getuser)){
            echo "
            <div id='profile'> 
            <div id='profile_photo'><img src='photos\\".$getuser['image']."'></div>
            <div style='font-size:20px; text-transform: capitalize;' id='profile_name'>".$getuser["fname"]." ".$getuser["lname"]."</div>
            <p style='font-size:13px;'>".$getuser["email"]."</p>
            <hr style='width:100%;'>
            <div id='change_photo'><a href=''>change photo</a></div>
            <div id='change_name'><a href=''>change name</a></div>
            <form method='post' action='form/login.php' id='out_form'>            
            <button name='logout' type='submit' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'>logout   <img src='techno tour website design pro\\".$logout."' id='logout' title='log out' style='margin-left:10px;' width='23px'></button>
            </form>
            </div>
            
            ";}
           
           ?>

