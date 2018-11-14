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
    border:4px solid #26759E;-webkit-box-shadow: #878787 0px 2px 2px ;-moz-box-shadow: #878787 0px 2px 2px ; box-shadow: #878787 0px 2px 2px ; -webkit-border-radius: 23px; -moz-border-radius: 23px;border-radius: 23px;font-size:13px;font-family:arial, helvetica, sans-serif; padding: 10px 20px 10px 20px; text-decoration:none; display:inline-block;text-shadow: 2px 2px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
     background-color: #cef8ff; background-image: -webkit-gradient(linear, left top, left bottom, from(#cef8ff), to(#7fe0f8));
 background-image: -webkit-linear-gradient(top, #cef8ff, #7fe0f8);
 background-image: -moz-linear-gradient(top, #cef8ff, #7fe0f8);
 background-image: -ms-linear-gradient(top, #cef8ff, #7fe0f8);
 background-image: -o-linear-gradient(top, #cef8ff, #7fe0f8);
 background-image: linear-gradient(to bottom, #cef8ff, #7fe0f8);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#cef8ff, endColorstr=#7fe0f8);/* Green */
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
        /*position: fixed;*/
    /*left: 150px;*/
}
  .button {
    border:4px solid #26759E;-webkit-box-shadow: #878787 0px 2px 2px ;-moz-box-shadow: #878787 0px 2px 2px ; box-shadow: #878787 0px 2px 2px ; -webkit-border-radius: 23px; -moz-border-radius: 23px;border-radius: 23px;font-size:13px;font-family:arial, helvetica, sans-serif; padding: 10px 20px 10px 20px; text-decoration:none; display:inline-block;text-shadow: 2px 2px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #49c0f0; background-image: -webkit-gradient(linear, left top, left bottom, from(#49c0f0), to(#2CAFE3));
 background-image: -webkit-linear-gradient(top, #49c0f0, #2CAFE3);
 background-image: -moz-linear-gradient(top, #49c0f0, #2CAFE3);
 background-image: -ms-linear-gradient(top, #49c0f0, #2CAFE3);
 background-image: -o-linear-gradient(top, #49c0f0, #2CAFE3);
 background-image: linear-gradient(to bottom, #49c0f0, #2CAFE3);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#49c0f0, endColorstr=#2CAFE3);
    /*background-color: dodgerblue;*/
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
    border-radius :0%;
    box-shadow: 0 9px #999;
    cursor: pointer;

}

.button2 {
    /*background-color: dodgerblue; */
    border:4px solid #26759E;-webkit-box-shadow: #878787 0px 2px 2px ;-moz-box-shadow: #878787 0px 2px 2px ; box-shadow: #878787 0px 2px 2px ; -webkit-border-radius: 23px; -moz-border-radius: 23px;border-radius: 23px;font-size:13px;font-family:arial, helvetica, sans-serif; padding: 10px 20px 10px 20px; text-decoration:none; display:inline-block;text-shadow: 2px 2px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #3093c7; background-image: -webkit-gradient(linear, left top, left bottom, from(#3093c7), to(#1c5a85));
 background-image: -webkit-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -moz-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -ms-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -o-linear-gradient(top, #3093c7, #1c5a85);
 background-image: linear-gradient(to bottom, #3093c7, #1c5a85);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#3093c7, endColorstr=#1c5a85);
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
    /*position: fixed;*/
    /*right: 150px;*/
   
}
.button3{
border:1px solid #495267; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #606c88; background-image: -webkit-gradient(linear, left top, left bottom, from(#606c88), to(#3f4c6b));
 background-image: -webkit-linear-gradient(top, #606c88, #3f4c6b);
 background-image: -moz-linear-gradient(top, #606c88, #3f4c6b);
 background-image: -ms-linear-gradient(top, #606c88, #3f4c6b);
 background-image: -o-linear-gradient(top, #606c88, #3f4c6b);
 background-image: linear-gradient(to bottom, #606c88, #3f4c6b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#606c88, endColorstr=#3f4c6b);
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
  
}

.button3:hover{
 border:1px solid #363d4c;
 background-color: #4b546a; background-image: -webkit-gradient(linear, left top, left bottom, from(#4b546a), to(#2c354b));
 background-image: -webkit-linear-gradient(top, #4b546a, #2c354b);
 background-image: -moz-linear-gradient(top, #4b546a, #2c354b);
 background-image: -ms-linear-gradient(top, #4b546a, #2c354b);
 background-image: -o-linear-gradient(top, #4b546a, #2c354b);
 background-image: linear-gradient(to bottom, #4b546a, #2c354b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#4b546a, endColorstr=#2c354b);
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
 border:4px solid #26759E;
 background-color: #1ab0ec; background-image: -webkit-gradient(linear, left top, left bottom, from(#1ab0ec), to(#1a92c2));
 background-image: -webkit-linear-gradient(top, #1ab0ec, #1a92c2);
 background-image: -moz-linear-gradient(top, #1ab0ec, #1a92c2);
 background-image: -ms-linear-gradient(top, #1ab0ec, #1a92c2);
 background-image: -o-linear-gradient(top, #1ab0ec, #1a92c2);
 background-image: linear-gradient(to bottom, #1ab0ec, #1a92c2);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#1ab0ec, endColorstr=#1a92c2);
    }
      .button1:hover{
    background-color: blue;
    color: white;
     border:4px solid #26759E;
 background-color: #9bf1ff; background-image: -webkit-gradient(linear, left top, left bottom, from(#9bf1ff), to(#4fd4f5));
 background-image: -webkit-linear-gradient(top, #9bf1ff, #4fd4f5);
 background-image: -moz-linear-gradient(top, #9bf1ff, #4fd4f5);
 background-image: -ms-linear-gradient(top, #9bf1ff, #4fd4f5);
 background-image: -o-linear-gradient(top, #9bf1ff, #4fd4f5);
 background-image: linear-gradient(to bottom, #9bf1ff, #4fd4f5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#9bf1ff, endColorstr=#4fd4f5);
    }
       .button2:hover{
    background-color: blue;
    color: white;
 border:4px solid #26759E;
 background-color: #26759e; background-image: -webkit-gradient(linear, left top, left bottom, from(#26759e), to(#133d5b));
 background-image: -webkit-linear-gradient(top, #26759e, #133d5b);
 background-image: -moz-linear-gradient(top, #26759e, #133d5b);
 background-image: -ms-linear-gradient(top, #26759e, #133d5b);
 background-image: -o-linear-gradient(top, #26759e, #133d5b);
 background-image: linear-gradient(to bottom, #26759e, #133d5b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#26759e, endColorstr=#133d5b);
    }
    .button:active,.button1:active,.button2:active,.button3:active {
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
    <br><br>
    <button class="button2" onclick = "Javascript:window.location.href = 'SearchWindow.1.php';">
    View<br>Tickets
    </button>
    <br>  <br>
     <button class="button3" onclick = "Javascript:window.location.href = 'UserAdd.1.php';">
    Add/Remove<br>Users
    </button>
    <br>  <br>

    </div>
    <!--<div class="col-sm-8 text-right">-->
   
    <!--  </div>-->
    <!--</div>-->
    <!-- <div style="font-size: 30px">  <a href="UserAdd1.php">Add a New User.</a> -->
    <!-- </div>-->
    <!-- <div style="font-size: 30px">  <a href="">Delete a User.</a> -->
    <!-- </div>-->
    <!-- <div style="font-size: 30px">  <a href="">Add a New Admin.</a> -->
    <!-- </div>-->
     
  </div>

</div>

<!--<footer class="container-fluid text-center">-->
<!--  <p>MrTicket-v.1.0</p>-->
<!--</footer>-->

</body>
</html>


<!--For adding in functionality of admins being able to add a new user through the admin main page...-->

<!--INSERT INTO  `MrTicket`.`USER` (-->
<!--`USER_ID` ,-->
<!--`USER_FNAME` ,-->
<!--`USER_LNAME` ,-->
<!--`USER_EMAIL` ,-->
<!--`USER_ADMIN`-->
<!--)-->
<!--VALUES (-->
<!--NULL ,  'Steve',  'Jobs',  'sjobs@example.com',  '0'-->
<!--);-->

<!--For making a user an administrator after adding them into the database-->

<!--UPDATE USER SET USER_ADMIN =  '1' WHERE USER_ID =  '$user_id'-->