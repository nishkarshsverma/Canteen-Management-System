<?php
include('../store/connect.php');
$id=$_GET['id'];
$qry="SELECT * FROM orders WHERE id='$id'";
$result = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
while($row = mysqli_fetch_array($result))
	{
		echo '<img src="../store/'.$row['design'].'"><br>';
		echo '<a href="../store/'.$row['design'].'">download</a>';
	}

?>