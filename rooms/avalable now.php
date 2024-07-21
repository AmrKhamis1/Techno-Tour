<?php
include "../database/databasemysqli.php";

            $RoomNum=$_GET['Room_Num'];
            $rooms=substr($RoomNum,3);
            include 'cheking rooms function.php';
            $available2 = rooms($rooms);
            
            if($available2!="Available"){
                echo $rooms."<font class='available'>".$available2."</font>
                <div class='about'>
                <a class='book_button' style='visibility: hidden;' id='book_button".$rooms."' href='booking.php?Room_Name=".$rooms."'>Book</a>
                </div>";
            }else{
                session_start();
                    $sql="SELECT * FROM members WHERE id={$_SESSION['id']}";
                    $result=mysqli_query($connection,$sql);
                    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    if(isset($getuser)){
                if($getuser['position']!="Dr" && $getuser['position']!="Assisstant"){
                    echo $rooms."<font class='available'>".$available2."</font>
                    <div class='about'>
                    <a class='book_button' style='visibility: hidden;' id='book_button".$rooms."' href='booking.php?Room_Name=".$rooms."'>Book</a>
                    </div>";
                }else{

                 echo $rooms."<font class='available'>".$available2."</font>
                 <div class='about'>
                 <a class='book_button' id='book_button".$rooms."' href='booking.php?Room_Name=".$rooms."'>Book</a>
                 </div>";
                }

        }else{
            echo $rooms."<font class='available'>".$available2."</font>
            <div class='about'>
            <a class='book_button' style='visibility: hidden;' id='book_button".$rooms."' href='booking.php?Room_Name=".$rooms."'>Book</a>
            </div>";
        }

            }
            

                    
            ?>