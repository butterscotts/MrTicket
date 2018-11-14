<?php


//The following function takes in the two inputs using the POST method and checks to see if BOTH username and password are matching in the database
    include "Config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $retstatus = check_admin($username, $password, $msg);

    if($retstatus == 1){
            if (isset($_POST['username'])) {
		$username = $_POST['username'];
		
		//sql statement that pulls the users id to store as a SESSION variable to confirm with the pages that they have logged in
		
		$sql2 = "select USER_ID from USER NATURAL JOIN ADMIN where ADMIN_USERNAME = '$username' and ADMIN_PASSWORD = '$password'";
		$result = $db->query($sql2);
            }
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbfname = $row["USER_ID"];
			    session_start();
			$_SESSION['user'] = $dbfname;
				session_start();
			$_SESSION['stat'] = '2';
		$url = "Admin.1.php";
		header('Location: ' . $url);
		exit();
		  	}
    } else {
    echo "<script>
        alert('Sorry, Invalid Username or Password. Try Again');
    window.location.href='/Pages/AdminLogin.1.php';
    </script>";
 
    }	
  
	function check_admin($username, $password, &$msg)
	{
	
		global $db;
	
		$msg = "Login Denied";
		$retvalue = 0;

//sql statement that looks at all informaton from the db where the ADMIN_USERNAME is equal to what the user typed in.

		$sql = "select * from ADMIN where ADMIN_USERNAME = '$username'";

    	
		$result = $db->query($sql);
		
    	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbuser = $row["ADMIN_USERNAME"];
			$dbpass = $row["ADMIN_PASSWORD"];
		
			if (($dbuser == $username)&&($dbpass == $password))
			{
				$retvalue = 1;
				$msg = "Admin Login";
			}
		}	
		return  $retvalue;
	}
	
?>