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
function table_start($sql){
include 'Config.php';
$results_per_page = 10;
if (isset($_GET["page".$section.""])) { $page  = $_GET["page".$section.""]; } else { $page=1; }; 
$start_from = ($page-1) * $results_per_page;
$sql1 = "SELECT * ".$sql." ORDER BY WO_ID DESC LIMIT $start_from, ".$results_per_page;
// echo $sql1;
$rs_result = $db->query($sql1); 
?> 
<div class="content">
  <table id="customers">
     
 <tr>
    <th style="background-color:">Ticket # & Status</th>
    <th style="background-color:">Requested By</th>
    <th style="background-color:">Request Date & Complete Date</th>
    <th style="background-color:">Craft</th>
    <th style="background-color:">Building Location & Room Number</th>
    <th style="background-color:">Equipment & Service Number</th>
    <th style="background-color:">Description</th>
    <th style="background-color:">Completed By</th>
    <th style="background-color:">Action Taken</th>
  </tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
     $stat = $row['WO_STATUS'];
     if ($stat == "Submitted"){
     $color = green;
   
    } else if($stat == "Work In Progress"){
      $color =  orange;
    
    } else if($stat == "Completed"){
      $color = red;
   
    }
    echo "<tr class='$color'>";
      echo "<td style=color:blue><a href=Edit.1.php?wo=".$row['WO_ID'].">Edit Ticket<br> #".$row['WO_ID']."<br>".$row['WO_STATUS']."</td>";
      echo "<td>".$row['USER_LNAME'].", ".$row['USER_FNAME']."</td>";
      echo "<td>".$row['WO_REQDATE']."<br>".$row['WO_COMPDATE']."</td>";
      echo "<td>".$row['WO_CRAFT']."</td>";
      echo "<td>".$row['WO_SCHOOL']."<br>".$row['WO_AREATYPE']."<br>".$row['WO_AREANUM']."</td>";
      echo "<td>".$row['WO_EQUIP']."<br>".$row['WO_SERVICETAG']."</td>";
      echo "<td>".$row['WO_DESC']."</td>";
      if($color == "red"){
      $sql2 = "select USER_FNAME, USER_LNAME from USER where USER_ID = ".$row['WO_ASSIGNEE']."";
      $result = $db->query($sql2);
      $row2 = $result->fetch_assoc();
      echo "<td>".$row2['USER_LNAME'].", ".$row2['USER_FNAME']."</td>";
      echo "<td>".$row['WO_ACTION']."</td>";
      }else{
      echo "<td></td>";
      echo "<td></td>";
      }
      echo "</tr>";
      
}; 
?>
</table>

<?php
$sql2 = "SELECT COUNT(*) AS total ".$sql;
$result = $db->query($sql2);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
echo "Showing Page #".$page." of the ".$status." table <br>";
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='/Pages/SearchWindow.1.php?page".$section."=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo "style = 'font-size: 20px'>".$i."</a> "; 
};
?>
<br><br><br>
</div>

<?php
}
?>