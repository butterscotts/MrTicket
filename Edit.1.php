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
   <link href="/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h1{
      text-align: center;
      font-size: 80px;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
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
    /*footer {*/
    /*  background-color: #555;*/
    /*  color: white;*/
    /*  padding: 15px;*/
    /*  position: absolute;*/
    /*  bottom: 0;*/
    /*  width: 100%;*/
        
    /*}*/
    
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
  	<link rel="stylesheet" type="text/css" href="/js/blah.scss">
   <script type="text/javascript"
    src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-center" style="font-size: 20px"> 
    <br>
      <?php
 
 //The GET function is used tot grab the id of the ticket number stored in the address, this was declared when the user clicked on the edit ticket button
 //This makes it very easy to grab the tickets information without storing SESSION or GLOBAL variables and then destroying them
 
   $woid = $_GET['wo'];

  ?>
     <?php 
    echo "<h1>Edit Ticket #$woid</h1>";
 ?>

<?php
// echo <<<EOT

//The following is the form in which the admin will fill out to update the tickets info or status...

 echo "<div class='container-fluid text-center'>";
 echo "<form action='$thisPHP' method='POST'>";
 echo "<table summary= 'Update' ></table>";
 echo "
        Change Status:
      ";

 echo "<select name='status' required>";
 echo "<option value='' disabled selected hidden>Select a Status</option>";
 echo "<option value='Work In Progress'>Work In Progress</option>"; 
 echo "<option value='Completed'>Completed</option>"; 
 echo "<option value='Closed'>Closed</option>"; 
 echo "<option value='Duplicate Request'>Duplicate Request</option>"; 
 echo "</select>"; 


 echo "<br>";
       
 echo "
        Assignee:
      ";

 echo "<select name='name' required>";
 echo "<option value='' disabled selected hidden>Select an Assignee</option>";
 include "Config.php";
  $sql = "select * from USER where USER_ADMIN = '1'";
  $result = $db->query($sql);
  while ($row = $result->fetch_assoc()){
  echo "<option value=".$row['USER_ID'].">".$row['USER_LNAME']." , ".$row['USER_FNAME']."</option>";
  }
 echo "</select>"; 

 echo "<br>";
      
 echo "
        Action Taken: 
      ";
 echo "<br>";
 echo "<div class='col-75'>";
//  echo "<input type='text' margin-top: 6px name='action' style='color:black'>";
 echo "<textarea margin-top: 6px  style='height:200px' name='descrip' maxlength='250' style='color:black'></textarea>";
 
 echo "</div>";
 echo "<br>
     
        <br>";
 echo "<div class='row'>";
 echo "<button class='button'>
   Submit
   </button>";
 echo "</div>";
 echo "<br>";
echo  "</form>";
echo "</div>";

include "Config.php";
session_start();
$stat = $_POST["status"];
$user1 = $_POST["name"];
$number = $_GET['wo'];
$action = $_POST["descrip"];

if(isset($stat)){
    
    //sql statement used to update that ticket number with the filled in fields using the POST method
    
        $sql = "UPDATE WORKORDER SET WO_COMPDATE = CURRENT_TIMESTAMP, WO_ACTION = '$action', WO_STATUS = '$stat', WO_ASSIGNEE = '$user1' WHERE WO_ID = '$number'";
          if ($db->query ($sql) == TRUE)
        {
              ?>
       <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/SearchWindow.1.php'" />
       <?php
                 echo "<script>
             alert('You have successfully updated the ticket!');
            </script>";
        //   header("Location: SearchWindow.php");
     
        } else {
            echo "<script>
             alert('Sorry, Something went wrong. Please try again.');
            </script>";
        }
}
?>
</div>



</body>
</html>
