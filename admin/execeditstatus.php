<?php
	include('../store/connect.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	$qry="UPDATE reservation SET status='$status' WHERE reservation_id='$roomid'";
	mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry2);
	header("location: index.php");
?>