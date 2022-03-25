<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "store/connect.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string(mysqli_connect($db_host,$db_user,$db_pass,$db_database));
	}
	
	//Sanitize the POST values
	$login = clean($_POST['user']);
	$password = clean($_POST['password']);
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
	while($row = mysqli_fetch_array($result))
 	{
 		$level=$row['position'];
	}
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['position'];
			session_write_close();
			//if ($level="admin"){
			header("location: admin/index.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>