<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  ?>
  <title>Mr Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h1{
      text-align: center;
      font-size: 100px;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    .button1 {
    /*background-color: dodgerblue; */
   border:1px solid #ff6262; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #ff9a9a; background-image: -webkit-gradient(linear, left top, left bottom, from(#ff9a9a), to(#ff4040));
 background-image: -webkit-linear-gradient(top, #ff9a9a, #ff4040);
 background-image: -moz-linear-gradient(top, #ff9a9a, #ff4040);
 background-image: -ms-linear-gradient(top, #ff9a9a, #ff4040);
 background-image: -o-linear-gradient(top, #ff9a9a, #ff4040);
 background-image: linear-gradient(to bottom, #ff9a9a, #ff4040);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ff9a9a, endColorstr=#ff4040);
    border: none;
    color: white;
      height:150px;
    width: 90%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    /*margin: 4px 2px;*/
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.2s;
    border-radius:0%;
    box-shadow: 0 9px #999;
    cursor: pointer;
        /*position: relative;*/
    /*left: 200px;*/
}

.button {
    /*background-color: dodgerblue; */
   border:1px solid #72021c; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #a90329; background-image: -webkit-gradient(linear, left top, left bottom, from(#a90329), to(#6d0019));
 background-image: -webkit-linear-gradient(top, #a90329, #6d0019);
 background-image: -moz-linear-gradient(top, #a90329, #6d0019);
 background-image: -ms-linear-gradient(top, #a90329, #6d0019);
 background-image: -o-linear-gradient(top, #a90329, #6d0019);
 background-image: linear-gradient(to bottom, #a90329, #6d0019);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#a90329, endColorstr=#6d0019);
    border: none;
    color: white;
    height:150px;
    width: 90%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    /*margin: 4px 2px;*/
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.2s;
    border-radius:0%;
    box-shadow: 0 9px #999;
    cursor: pointer;
    /*position: relative;*/
    /*right: 200px;*/
   
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    .button:hover {
    background-color: blue;
    color: white;
 border:1px solid #450111;
 background-color: #77021d; background-image: -webkit-gradient(linear, left top, left bottom, from(#77021d), to(#3a000d));
 background-image: -webkit-linear-gradient(top, #77021d, #3a000d);
 background-image: -moz-linear-gradient(top, #77021d, #3a000d);
 background-image: -ms-linear-gradient(top, #77021d, #3a000d);
 background-image: -o-linear-gradient(top, #77021d, #3a000d);
 background-image: linear-gradient(to bottom, #77021d, #3a000d);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#77021d, endColorstr=#3a000d);
    }
      .button1:hover{
    background-color: blue;
    color: white;
     border:1px solid #ff3434;
 background-color: #ff6767; background-image: -webkit-gradient(linear, left top, left bottom, from(#ff6767), to(#ff0d0d));
 background-image: -webkit-linear-gradient(top, #ff6767, #ff0d0d);
 background-image: -moz-linear-gradient(top, #ff6767, #ff0d0d);
 background-image: -ms-linear-gradient(top, #ff6767, #ff0d0d);
 background-image: -o-linear-gradient(top, #ff6767, #ff0d0d);
 background-image: linear-gradient(to bottom, #ff6767, #ff0d0d);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ff6767, endColorstr=#ff0d0d);
    }

    .button:active,.button1:active{
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position: absolute;
      bottom: 0;
      width: 100%;
        
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
    <?php
  
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.
  

	if (isset($_SESSION['user'])) {
$user = $_SESSION['user'];
$stat = $_SESSION['stat'];
}	else{
?>
<meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Index.1.php'" />
<script>
        alert('Please Login to Access Mr. Ticket');
</script>
<?php
}
?>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/Pages/FAQPages.php">Frequently Asked Questions</a></li>
        <li><a href="/Pages/ContactPages.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="https://mrticket-mrcalihan.c9users.io/Index.1.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <!--<div class="col-sm-2 sidenav">-->
    <!--</div>-->
    <div style="font-size: 30px"> 
    <br>
      <?php 
      	include "Config.php";

//Uses the previously declared SESSION variable to double check and state which user is logged in.

  $sql = "select USER_FNAME from USER where USER_ID = '$user'";
  	$result2 = $db->query($sql);
		  	if ($result2->num_rows == 1) {
			$row2 = $result2->fetch_assoc();
			$dbfname = $row2["USER_FNAME"];
		  	}
		  	echo"<h1>Welcome $dbfname</h1>"; ?>
     <br>
     <button class="button1" onclick = "Javascript:window.location.href = 'Profile.1.php';">
    View<br>Profile
    </button>
    <br><br>
  <button class="button" onclick = "Javascript:window.location.href = 'TicketWindow.1.php';">
    Place<br>Ticket
    </button>
    <br>  <br>

    </div>
    <!--<div class="col-sm-8 text-right">-->
   
    <!--  </div>-->
    </div>
  </div>
</div>

<!--<footer class="container-fluid text-center">-->
<!--  <p>MrTicket-v.1.0</p>-->
<!--</footer>-->

</body>
</html>
