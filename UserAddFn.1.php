<?php

include "Config.php";

$fn = $_POST["fname"];
$ln = $_POST["lname"];
$em = $_POST["email"];
$ad = $_POST["admin"];

    global $db;

    $sql = "INSERT INTO  `MrTicket`.`USER` (`USER_ID` ,`USER_FNAME` ,`USER_LNAME` ,`USER_EMAIL` ,`USER_ADMIN`)VALUES (NULL ,  '$fn',  '$ln',  '$em',  '$ad');";
    if ($db->query($sql) == TRUE)
   {
        if ($ad == 1){
            $sql1 = "SELECT USER_ID FROM USER WHERE USER_EMAIL = '$em'";
            $result = $db->query($sql1);
            if ($result->num_rows == 1) {
		    	$row = $result->fetch_assoc();
			    $id = $row["USER_ID"];
			    $un = $_POST["username"];
			    $pw = $_POST["password"];
			    
			    $sql2 = "INSERT INTO `MrTicket`.`ADMIN` (`ADMIN_ID` ,`USER_ID` ,`ADMIN_PASSWORD` ,`ADMIN_USERNAME`)VALUES (NULL ,  '$id',  '$pw',  '$un');";
			    if ($db->query($sql2) == TRUE){
			          ?>
                        <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/Functions.1.php'" />
                      <?php

                        echo "<script>
                        alert('New user/admin added'); 
                        </script>";
			    }else{
			          ?>
                   <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/UserAdd.1.php'" />
                    <?php
       
                echo "<script>
                alert('Something went wrong, please try again ER:3'); 
                </script>";
			    }
	    	}else{
	    	   
	    	    ?>
                   <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/UserAdd.1.php'" />
                <?php
       
                echo "<script>
                alert('Something went wrong, please try again ER:2'); 
                </script>";
       
	    	}
        }else{
        ?>
        <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/Functions.1.php'" />
        <?php

        echo "<script>
        alert('New user added'); 
        </script>";
        }
    }
else{
       ?>
       <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/UserAdd.1.php'" />
       <?php
       
       echo "<script>
       alert('Something went wrong, please try again ER:1'); 
       </script>";
       
    }


?>



