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
  .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
    }
    .row{
   position: static;
}
      h1{
      text-align: center;
      font-size: 40px;
  }    
      .container{
      text-align: center;
      font-size: 20px;
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
.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
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
    /*overflow: hidden;*/
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
}
</style>
<script type="text/javascript"
    src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script>
 function required(){
   this.getField("otherType").required = true;
 }
 function show(aval) {
    if (aval == "Other") {
    otherType.style.display='inline-block';
    this.otherType.required = true;
      ServiceTag.style.display='none';
      CCode.style.display='none';
    Form.fileURL.focus();
    }  else if (aval == "Laptop"){
    ServiceTag.style.display='inline-block';
        otherType.style.display='none';
        CCode.style.display='none';
    Form.fileURL.focus();
    } else if (aval == "Toshiba Copier"){
    CCode.style.display='inline-block';
        otherType.style.display='none';
        ServiceTag.style.display='none';
    Form.fileURL.focus();
    } else {
    otherType.style.display='none';
    ServiceTag.style.display='none';
    CCode.style.display='none';
    }
  }
  function printDiv(content){
    var printContents = document.getElementById(content).innerHTML;
    var originalContents = document.body.innerHTML;
    
    document.body.innerHTML = printContents;
    
    window.print();
    
    document.body.innerHTML = originalContents;
  }
  </script>
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
<h1> <?php 
      	include "Config.php";

//Uses the previously declared SESSION variable to double check and state which user is logged in.

  $sql = "select USER_FNAME from USER where USER_ID = '$user'";
  	$result2 = $db->query($sql);
		  	if ($result2->num_rows == 1) {
			$row2 = $result2->fetch_assoc();
			$dbfname = $row2["USER_FNAME"];
		  	}
		  	echo" Search Window:<br> Please select the category you would like to search"; ?></h1><br>

 <?php
if (isset($_GET['var'])){
  $var = $_GET['var'];
echo '<div>'.$var.'</div>';
}
 echo "<div class='container'>";
 echo "<form action='$thisPHP' method='POST'>";
 echo "<table summary= 'Registration'></table>";
 echo "Building:";
 echo "<select name='building'>";
 echo "<option value='' disabled selected hidden>Select a Building</option>"; 
 echo "<option value='Ardmore'>Ardmore</option>"; 
 echo "<option value='Greenwood'>Greenwood</option>";
 echo "<option value='Harmon'>Harmon</option>";
 echo "<option value='Princeton'>Princeton</option>";
 echo "<option value='Jefferson'>Jefferson</option>";
 echo "<option value='HighSchool'>High School</option>";
 echo "<option value='Wheat'>Wheat/Admin</option>";
 echo "<option value='All'>All Buildings</option>";
 echo "</select>"; 
 echo "<br><br>"; 
 echo "Craft:";
echo "<select name='craft'>";
echo "<option value='' disabled selected hidden>Select a Craft</option>"; 
echo "<option value='Technology'>Technology</option>";
echo "<option value='Grounds'>Grounds</option>";
echo "<option value='Maintenance'>Maintenance</option>";
echo "</select>";
echo "<br><br>"; 
echo "Equipment Type:";
echo "<select name='equip' id='equip' onchange='java_script_:show(this.options[this.selectedIndex].value)'>";
echo "<option value='' disabled selected hidden>Select a Type</option>"; 
echo "<option value='Desktop'>Desktop</option>";
echo "<option value='Laptop'>Laptop</option>";
echo "<option value='Toshiba Copier'>Toshiba Copier</option>";
echo "<option value='Mobile Device'>Mobile Device</option>";
echo "<option value='Other'>Other</option>";
echo "</select>";
echo  "<div id='otherType' style='display:none;'>";
echo "<label for='otherType'> Specify</label>";
echo "<input type='text' name='otherType' maxlength='50' placeholder='Equipment Type'/>";
 echo "<br>"; 
echo "</div>";
echo "<div id='ServiceTag' style='display:none;'>";
echo "<label for='ServiceTag'>Service Tag Number</label>";
echo "<input type='text' name='ServiceTag' maxlength='20'/>";
echo "<br>"; 
echo "</div>";
echo "<div id='CCode' style='display:none;'>";
echo "<label for='CCode'>Copier Code</label>";
echo "<input type='text' name='CCode' maxlength='6'/>";
echo "<br>"; 
echo "</div>";
echo "<br><br>"; 
echo "Submitted By:";
echo "<select name='submitter'>";
echo "<option value='' disabled selected hidden>Select a User</option>";
 include "Config.php";
  $sql = "select * from USER order by 'USER_LNAME'";
  $result = $db->query($sql);
  while ($row = $result->fetch_assoc()){
  echo "<option value=".$row['USER_ID'].">".$row['USER_LNAME']." , ".$row['USER_FNAME']."</option>";
  }
echo "</select>";
// echo "</div>";
echo "<br><br>";
?>

<?php
echo "  <button class='button'>
    Submit
    </button>";
// echo "<input type='submit' style='font-size:20px; margin-left:200px;' name='Add' value='Search'style='color:black'>";

echo "<br><br>";
echo "</form>";
echo "</div>";

include "Config.php";

$bldg = $_POST["building"];
$craft = $_POST["craft"];
$user1 = $_POST["submitter"];
if($_POST["equip"] == "Other"){
  if($_POST["otherType"] !== ""){
  $equip = $_POST["otherType"];
  }
}else if(isset($_POST["equip"])){
  $equip = $_POST["equip"];
}
if($_POST["equip"] == "Laptop"){
  if($_POST["ServiceTag"] !== ""){
  $service = $_POST["ServiceTag"];
  }
  $equip = $_POST["equip"];
}
if($_POST["equip"] == "Toshiba Copier"){
  if($_POST["CCode"] !== ""){
  $ccode = $_POST["CCode"];
  }
  $equip = $_POST["equip"];
}
if(isset($service)){
  !isset($equip);
}
if(isset($bldg)){
?>

<div class = "row">
<?php
$status = "Submitted";
include 'PFBuilding.php';
echo table_start($bldg, $status);
?>
</div>
<div class = "row">
<?php
$status = "Work In Progress";
echo table_start($bldg, $status);
?>
</div>
<div class = "row">
<?php
$status = "Completed";
echo table_start($bldg, $status);
?>
</div>


<?php
}else if(null !== $craft || $var){
?>
<div class = "row">
<?php
$status = "Submitted";
include 'PFCraft.php';
echo table_start($craft, $status);
?>
</div>
<div class = "row">
<?php
$status = "Work In Progress";
echo table_start($craft, $status);
?>
</div>
<div class = "row">
<?php
$status = "Completed";
echo table_start($craft, $status);
?>
</div>



<?php
}else if(isset($user1)){
?>
<div class = "row">
<?php
$status = "Submitted";
include 'PFUser.php';
echo table_start($user1, $status);
?>
</div>
<div class = "row">
<?php
$status = "Work In Progress";
echo table_start($user1, $status);
?>
</div>
<div class = "row">
<?php
$status = "Completed";
echo table_start($user1, $status);
?>
</div>



<?php
// }else if(isset($craft)){

}
?>



</body>
</html>