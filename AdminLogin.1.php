<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mr Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h1{
      text-align: center;
      font-size: 175px;
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
    .button {
    background-color: dodgerblue; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius:10px;
    box-shadow: 0 9px #999;
    cursor: pointer;
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
    background-color: blue; /* Green */
    color: white;
    }
    .button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position: fixed;
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
  	<link rel="stylesheet" type="text/css" href="/js/blah.scss">
	<?php

// The following will reset any login variables, meaning a user won't be able to type in a url other than the index page
session_start();

// Unset all of the session variables.
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
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
        <li><a href="/FAQ.php">Frequently Asked Questions</a></li>
        <li><a href="/Contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="https://mrticket-mrcalihan.c9users.io/Index.1.php"><span class="glyphicon glyphicon-log-in"></span> Normal Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-center" style="font-size: 30px"> 
    <br>
      <h1>Mr Ticket</h1>
      <p>Enter your username and password to login as an admin</p>

      <form action="/Pages/AdminLoginCheck.1.php" method="POST">
    <input type="text" style="font-size:20px; text-align:center;"  name="username" size=75px placeholder="username"/><br>
    <input type="password" style="font-size:20px; text-align:center;"  name="password" size=75px placeholder="password"/><br>
  <br>
   <img style="width: 200px; height: 250px" src="/images/MrTicket.png" alt="Mr Ticket">
  <button class="button">
    Submit
    </button>
    <img style="width: 200px; height: 250px; transform: scaleX(-1);" src="/images/MrTicket.png" alt="Mr Ticket">
    <br>  <br><br><br>
</form>
    </div>
    <div class="col-sm-2 sidenav">
      
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>MrTicket-v.1.0</p>
</footer>

</body>
</html>
