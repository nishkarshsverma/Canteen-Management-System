<?php
	include('../store/connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	
	$qry="UPDATE internet_shop SET name='$type', price='$rate', description='$description' WHERE id='$roomid'";
	$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
	header("location: products.php");
?>