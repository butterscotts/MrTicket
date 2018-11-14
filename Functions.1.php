<?php

//This page is the only page which uses the $stat SESSION variable declared upon login, It was my way of determining whehter the user is logged in as a user or an admin
//i.e. throws them back to the Main.php or Admin.php

 include "Config.php";
   session_start();
    $stat = $_SESSION['stat'];
    if($stat == '1'){
    	header("Location: Main.1.php");
    }else if($stat == '2'){
    	header("Location: Admin.1.php");
    }else{
        	echo "<script>
        alert('Sorry, Please re-login.');
    window.location.href='/Index.1.php';
    </script>";
    }
    
    ?>