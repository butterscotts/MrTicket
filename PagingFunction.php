<head>
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
<?php
function table_start($profileuser, $status){
    if ($status == "Submitted"){
     $color = green;
     $section = s;
    } else if($status == "Work In Progress"){
      $color =  orange;
      $section = w;
    } else if($status == "Completed"){
      $color = red;
      $section = c;
    }
?>

<header class="collapsible"><?php echo "$status (";
include "Config.php";
$sql0 = "SELECT COUNT(*) FROM WORKORDER WHERE WO_STATUS = '$status' AND USER_ID = '$profileuser'";
$result0 = $db->query($sql0);
$row0 = $result0->fetch_assoc();
echo $row0['COUNT(*)'];
?>)
</header>

<?php
$results_per_page = 5;
if (isset($_GET["page".$section.""])) { $page  = $_GET["page".$section.""]; } else { $page=1; }; 
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM WORKORDER WHERE USER_ID = '$profileuser' AND WO_STATUS= '$status' ORDER BY WO_ID DESC LIMIT $start_from, ".$results_per_page;
$rs_result = $db->query($sql); 
?> 
<div class="content">
  <table id="customers">
      <?php
      if ($section == 'c'){
      ?>
 <tr>
    <th style="background-color:<?php echo $color ?>">Ticket #</th>
    <th style="background-color:<?php echo $color ?>">Request Date & Complete Date</th>
    <th style="background-color:<?php echo $color ?>">Craft</th>
    <th style="background-color:<?php echo $color ?>">Building Location & Room Number</th>
    <!--<th>Location</th> -->
    <!--<th>Room Number</th>-->
    <th style="background-color:<?php echo $color ?>">Equipment & Service Number</th>
    <th style="background-color:<?php echo $color ?>">Description</th>
    <th style="background-color:<?php echo $color ?>">Completed By</th>
    <th style="background-color:<?php echo $color ?>">Action Taken</th>
  </tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['WO_ID']."</td>";
      echo "<td>".$row['WO_REQDATE']."<br>".$row2['WO_COMPDATE']."</td>";
      echo "<td>".$row['WO_CRAFT']."</td>";
      echo "<td>".$row['WO_SCHOOL']."<br>".$row['WO_AREATYPE']."<br>".$row['WO_AREANUM']."</td>";
      echo "<td>".$row['WO_EQUIP']."<br>".$row['WO_SERVICETAG']."</td>";
      echo "<td>".$row['WO_DESC']."</td>";
      $sql2 = "select USER_FNAME, USER_LNAME from USER where USER_ID = ".$row['WO_ASSIGNEE']."";
      $result = $db->query($sql2);
      $row2 = $result->fetch_assoc();
      echo "<td>".$row2['USER_LNAME'].", ".$row2['USER_FNAME']."</td>";
      echo "<td>".$row['WO_ACTION']."</td>";
      echo "</tr>";
}; 
?>
</table>
  <?php
      }else{
  ?>
  <tr>
    <th style="background-color:<?php echo $color ?>">Ticket #</th>
    <th style="background-color:<?php echo $color ?>">Request Date</th>
    <th style="background-color:<?php echo $color ?>">Craft</th>
    <th style="background-color:<?php echo $color ?>">Building Location & Room Number</th>
    <!--<th>Location</th> -->
    <!--<th>Room Number</th>-->
    <th style="background-color:<?php echo $color ?>">Equipment & Service Number</th>
    <th style="background-color:<?php echo $color ?>">Description</th>
  </tr>
   <?php
    while($row = $rs_result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['WO_ID']."</td>";
      echo "<td>".$row['WO_REQDATE']."</td>";
      echo "<td>".$row['WO_CRAFT']."</td>";
      echo "<td>".$row['WO_SCHOOL']."<br>".$row['WO_AREATYPE']."<br>".$row['WO_AREANUM']."</td>";
      echo "<td>".$row['WO_EQUIP']."<br>".$row['WO_SERVICETAG']."</td>";
      echo "<td>".$row['WO_DESC']."</td>";
      echo "</tr>";
}; 
?>
</table>
<?php
      }
  ?>
<?php
$sql = "SELECT COUNT(*) AS total FROM WORKORDER WHERE WO_STATUS = '$status' AND USER_ID = '$profileuser'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
echo "Showing Page #".$page." of the ".$status." table <br>";
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='/Pages/Profile.1.php?page".$section."=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo "style = 'font-size: 20px'>".$i."</a> "; 
};
?>

</div>

<?php
}
?>