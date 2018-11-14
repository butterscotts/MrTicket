<?php

    include "Config.php";

// the following function checks the users email they typed in using the POST method and looks in the db for a match

    $email = $_POST['email'];
    $retstatus = check_login($email, $msg);

    if($retstatus == 1){
            if (isset($_POST['email'])) {
		$username = $_POST['email'];
		$sql2 = "select USER_ID from USER where USER_EMAIL = '$username'";
		$result = $db->query($sql2);
            }
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbfname = $row["USER_ID"];
			
			// the following two SESSION variables are to store the users login information as well as their state of login (for example are they logged in as a user or an admin)
			//Side Note: SESSION variables are weird, the 4 lines below this work perfectly but refuse to work on the admin side despite it being the exact same thing. 
			//If SESSION variables are working, don't touch them :D
			
			    session_start();
			$_SESSION['user'] = $dbfname;
			   session_start();
			$_SESSION['stat'] = '1';
		$url = "Main.1.php";
		header('Location: ' . $url);
		exit();
		  	}
    } else {
    echo "<script>
        alert('Sorry, Invalid Email. Try Again');
    window.location.href='/Index.1.php';
    </script>";
 
    }	
  
	function check_login($email, &$msg)
	{
	
		global $db;
	
		$msg = "Login Denied";
		$retvalue = 0;

		$sql = "select * from USER where USER_EMAIL = '$email'";

    	
		$result = $db->query($sql);
		
    	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbemail = $row["USER_EMAIL"];
		
			if ($dbemail == $email)
			{
				$retvalue = 1;
				$msg = "Login Successful";
			}
		}	
		return  $retvalue;
	}
	
?>