<?php
        $search=NULL;
        $login=NULL;
        $logo=NULL;
        $photo1=NULL;
        $photo2=NULL;
        $theme_logo=NULL;
      if(isset($_GET['theme'])){
          if($_GET['theme']=='b'){
            $theme2=$_GET['theme'];
            $theme='l';
            echo "
            <link rel='stylesheet' href='CSS Black\broadcast.css'>
            <link rel='stylesheet' href='CSS Black\header2.css'>
            ";
            $search="'techno tour website design pro\search light.png'";
            $login="'techno tour website design pro\login light.png'";
            $logo="'techno tour website design pro\web site logo2 light.png'";
            $theme_logo="'techno tour website design pro\dark_light light.png'";
            $logout="logout.png";
          }else{
            $theme='b';
            $theme2=$_GET['theme'];
            echo "
            <link rel='stylesheet' href='CSS\broadcast.css'>
            <link rel='stylesheet' href='CSS\header2.css'>
            ";
            $search="'techno tour website design pro\search.png'";
            $login="'techno tour website design pro\login.png'";
            $logo="'techno tour website design pro\web site logo2.png'";
            $theme_logo="'techno tour website design pro\dark_light.png'";
            $logout="logout2.png";
          }
      }else{
        $theme='b';
        $theme2='l';
        echo "
        <link rel='stylesheet' href='CSS\broadcast.css'>
        <link rel='stylesheet' href='CSS\header2.css'>
        ";
        $search="'techno tour website design pro\search.png'";
        $login="'techno tour website design pro\login.png'";
        $logo="'techno tour website design pro\web site logo2.png'";
        $theme_logo="'techno tour website design pro\dark_light.png'";
        $logout="logout2.png";
      }
      ?> 