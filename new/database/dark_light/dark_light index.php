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
            <link rel='stylesheet' href='CSS Black\Home.css'>
            <link rel='stylesheet' href='CSS Black\header.css'>
            <link rel='stylesheet' href='CSS Black\index.css'>
            ";
            $search="'techno tour website design pro\search light.png'";
            $login="'techno tour website design pro\login light.png'";
            $logo="'techno tour website design pro\web site logo2 light.png'";
            $photo1="'techno tour website design pro\\techno tour pro copy light.png'";
            $photo2="'techno tour website design pro\\techno tour pro copy2 light.png'";
            $theme_logo="'techno tour website design pro\dark_light light.png'";
            $logout="logout2.png";
            $loading="inner logo.png";
          }else{
            $theme='b';
            $theme2=$_GET['theme'];
            echo "
            <link rel='stylesheet' href='CSS\Home.css'>
            <link rel='stylesheet' href='CSS\header.css'>
            <link rel='stylesheet' href='CSS\index.css'>
            ";
            $search="'techno tour website design pro\search.png'";
            $login="'techno tour website design pro\login.png'";
            $logo="'techno tour website design pro\web site logo2.png'";
            $photo1="'techno tour website design pro\\techno tour pro copy.png'";
            $photo2="'techno tour website design pro\\techno tour pro copy2.png'";
            $theme_logo="'techno tour website design pro\dark_light.png'";
            $logout="logout.png";
            $loading="inner logo2.png";
          }
      }else{
        $theme2='b';
        $theme='l';
        echo "
        <link rel='stylesheet' href='CSS Black\Home.css'>
        <link rel='stylesheet' href='CSS Black\header.css'>
        <link rel='stylesheet' href='CSS Black\index.css'>
        ";
        $search="'techno tour website design pro\search light.png'";
        $login="'techno tour website design pro\login light.png'";
        $logo="'techno tour website design pro\web site logo2 light.png'";
        $photo1="'techno tour website design pro\\techno tour pro copy light.png'";
        $photo2="'techno tour website design pro\\techno tour pro copy2 light.png'";
        $theme_logo="'techno tour website design pro\dark_light light.png'";
        $logout="logout2.png";
        $loading="inner logo.png";
      }
      ?> 