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
 <script>
 function show1(aval) {
    if (aval == "Other") {
    otherType.style.display='inline-block';
      ServiceTag.style.display='none';
       CopierCode.style.display='none';
    Form.fileURL.focus();
    }  else if (aval == "Laptop"){
    ServiceTag.style.display='inline-block';
        otherType.style.display='none';
        CopierCode.style.display='none';
    Form.fileURL.focus();
    } else if (aval == "Toshiba Copier"){
    CopierCode.style.display='inline-block';
        otherType.style.display='none';
        ServiceTag.style.display='none';
    Form.fileURL.focus();
    }
    else{
    otherType.style.display='none';
    ServiceTag.style.display='none';
     CopierCode.style.display='none';
    }
  }
  function show(aval) {
    if (aval == "Other") {
    otherLoc.style.display='inline-block';
        roomnum.style.display='none';
    Form.fileURL.focus();
    } else if (aval == "Classroom"){
    roomnum.style.display='inline-block';
     otherLoc.style.display='none';
    Form.fileURL.focus();
    } else if (aval == "Computer Lab"){
    roomnum.style.display='inline-block';
     otherLoc.style.display='none';
    Form.fileURL.focus();
    } else if (aval == "Office"){
    roomnum.style.display='inline-block';
     otherLoc.style.display='none';
    Form.fileURL.focus();
    }
    else{
    otherLoc.style.display='none';
    roomnum.style.display='none';
    }
  }
  function show2(aval) {
    if (aval == "No") {
    otherPerson.style.display='inline-block';
    Form.fileURL.focus();
    } 
    else{
    otherPerson.style.display='none';
    }
  }
  function charCount(field, field2, maxlimit){
      var countfield = document.getElementById(field2);
      if (field.value.length > maxlimit){
          field.value = field.value.substring(0,maxlimit);
          return false;
      }else{
          countfield.value = maxlimit - field.value.length;
      }
  }
  
    </script>
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
      <h1>Ticket Window</h1>
      <p style="font-size: 30px">Please fill in the fields to place your ticket</p>


  <div class="container-fluid text-center">
  <?php
  echo "<form action='$thisPHP' method='POST'>";
  ?>
       <table summary= "Registration" ></table><br>
       
      Are you flling this ticket on behalf of yourself?
       
       
      <select name="someoneelse" id="someoneelse" onchange="java_script_:show2(this.options[this.selectedIndex].value)" required><br><br>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
          </select>
          
            <select id="otherPerson" name="otherPerson" style="display:none;">
                <option value='' disabled selected hidden>Select a User</option>
                <?php
                    include "Config.php";
                    $sql = "select * from USER order by USER_LNAME";
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()){
                    echo "<option value=".$row['USER_ID'].">".$row['USER_LNAME'].", ".$row['USER_FNAME']."</option>";
                    }
                  ?>   
                   </select>
            </div><br>
  
        Building:
     
  
        <select name="building" required>
        <option value='' disabled selected hidden>Select a Building</option>
          <option value="Ardmore">Ardmore</option> 
          <option value="Greenwood">Greenwood</option>
          <option value="Harmon">Harmon</option>
          <option value="Princeton">Princeton</option>
          <option value="Jefferson">Jefferson</option>
          <option value="HighSchool">High School</option>
          <option value="Wheat">Wheat/Admin</option>
          <option value="All">All Buildings</option>
        </select><br><br> 
      
    
        Craft:      
 
    
        <select name="craft" required>
        <option value='' disabled selected hidden>Select a Craft</option> 
          <option value="Technology">Technology</option> 
          <option value="Grounds">Grounds</option>
          <option value="Maintenance">Maintenance</option>
          </select><br><br>
      
      
        Equipment Type:      
 
        <select name="equip" id="equip" onchange="java_script_:show1(this.options[this.selectedIndex].value)" required>
        <option value='' disabled selected hidden>Select Equipment Type</option> 
          <option value="Desktop">Desktop</option> 
          <option value="Laptop">Laptop</option>
          <option value="Toshiba Copier">Toshiba Copier</option>
          <option value="Mobile Device">Mobile Device</option>
          <option value="Other">Other</option>
          </select>
          
            <div id="otherType" style="display:none;">
             <label for="otherType">Specify</label>
            <input type="text" name="otherType" maxlength="50" placeholder="Equipment Type"/>
            </div>
              <div id="ServiceTag" style="display:none;">
             <label for="ServiceTag">Service Tag Number</label>
            <input type="text" name="ServiceTag" maxlength="20" placeholder="Number"/>
            </div><br>
           <div id="CopierCode" style="display:none;">
             <label for="CopierCode">Copier Code</label>
            <input type="text" name="CopierCode" maxlength="6" placeholder="6 Digit Code"/>
            </div><br>
 
        Location: 
      
         <select name="loc" id="loc" onchange="java_script_:show(this.options[this.selectedIndex].value)"  required>
        <option value='' disabled selected hidden>Select Location</option> 
          <option value="Classroom">Classroom</option> 
          <option value="Media Center">Media Center</option>
          <option value="Computer Lab">Computer Lab</option>
          <option value="Office">Office</option>
          <option value="Other">Other</option>
          </select>
      
          <div id="roomnum" style="display:none;">
             <label for="roomnum">Room Number</label>
            <input type="text" name="roomnum"/>
            </div><br>
          <div id="otherLoc" style="display:none;">
             <label for="otherLoc">Specify</label>
            <input type="text" name="otherLoc" maxlength="20" placeholder="Location"/>
            </div><br>
       
        Description:

        <div>
            
        <textarea onkeyup="charCount(this, 'counter', 250);" id="descrip" margin-top: 6px  style="height:200px; width:500px" name="descrip" required maxlength="250" style="color:black"></textarea>
        </div>
        <input disabled maxlength="3" size="1" value="250" id="counter"> charcters remaining
        <div class="row">
        
        <button class='button'>
    Submit
    </button>
        </div>
        <hr>
  </form>
</div>
<?php

include "Config.php";


$bldg = $_POST["building"];
$craft = $_POST["craft"];

$room = $_POST["roomnum"];
$desc = $_POST["descrip"];

$service = $_POST["ServiceTag"];
$ccode = $_POST["CopierCode"];

if($_POST["someoneelse"] == "No"){
    $person = $_POST["otherPerson"];
//     $temp = $_POST["otherPerson"];
//     $sqlp = "select USER_ID from USER where USER_EMAIL = '$temp'";
//      if ($db->query($sqlp) == TRUE)
//   {
//         $result = $db->query($sqlp);
//       	$row = $result->fetch_assoc();
// 		$person = $row["USER_ID"];
//   }else{
//       echo "<script>
             
//       alert('User email does not exist, Please try again'); 
              
//      </script>";
//   }

}else{
    $person = $user;
}
if($_POST["loc"] == "Other"){
    $loc = $_POST["otherLoc"];
}else{
    $loc = $_POST["loc"];
}
if($_POST["equip"] == "Other"){
    $equip = $_POST["otherType"];
}else{
    $equip = $_POST["equip"];
}

if(isset($desc)){
$sql = "insert into WORKORDER(USER_ID, WO_STATUS, WO_REQDATE, WO_COMPDATE, WO_AREATYPE, WO_AREANUM, WO_CRAFT, WO_SCHOOL, WO_DESC, WO_EQUIP, WO_SERVICETAG, WO_COPYCODE) values ('$person', 'Submitted', CURRENT_TIMESTAMP, '','$loc', '$room', '$craft', '$bldg', '$desc', '$equip', '$service', '$ccode')";
    if ($db->query($sql) == TRUE)
   {
        ?>
        <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/Profile.1.php'" />
        <?php

        echo "<script>
        alert('You have successfully added a ticket'); 
        </script>";
    }
else{
       ?>
       <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/TicketWindow.1.php'" />
       <?php
       
       echo "<script>
       alert('Something went wrong, please try again'); 
       </script>";
       
    }
}
?>

</body>
</html>
