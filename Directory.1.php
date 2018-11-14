<!DOCTYPE html>
<html>
<head>
  <?php
  session_start();
  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  h2{
      text-align: center;
      font-size: 40px;
      font-weight: bold;
  }    
  .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
    }
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
        table-layout: fixed;

    word-wrap:break-word;
}

#customers td, #customers th {
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
    padding: 8px;
 text-align: center;
      text-overflow: ellipses;
    /*overflow: hidden;*/
   
}

#customers tr {
    background-color: white;
}

#customers tr:hover {background-color: #ddd;

}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #076314;
    color: black;
}
.row{
   position: static;
}
.collapsible {
 
    background-color: #777;
    color: white;
    /*cursor: pointer;*/
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

/*.active, .collapsible:hover {*/
/*    background-color: #555;*/
/*}*/

.content {
    padding: 0 18px;
    
    /*max-height: 0;*/
    cursor: pointer;
    /*overflow: hidden;*/
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
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
      <li><a href="https://mrticket-mrcalihan.c9users.io/Pages/Functions.1.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>
  </div>
</nav>
<h2> <?php 
      	include "Config.php";

//Uses the previously declared SESSION variable to double check and state which user is logged in.

  $sql = "select USER_FNAME from USER where USER_ID = '$user'";
  	$result2 = $db->query($sql);
		  	if ($result2->num_rows == 1) {
			$row2 = $result2->fetch_assoc();
			$dbfname = $row2["USER_FNAME"];
		  	}
		  	echo" Profile Viewer: Below is a list of all tickets placed by $dbfname"; ?></h2>

<div class = "row">>
<?php
$status = "Submitted";
include 'PagingFunction.php';
echo table_start($user, $status);
?>
</div>
<div class = "row">
<?php
$status = "Work In Progress";
echo table_start($user, $status);
?>
</div>
<div class = "row">
<?php
$status = "Completed";
echo table_start($user, $status);
?>
</div>

</body>
</html>


