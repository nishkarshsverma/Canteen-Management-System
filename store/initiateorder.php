<?php
include('connect.php');


$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "userlogin";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  

$transnum=$_POST['transnum'];
			$user1=$_POST['user1'];
			$qty=$_POST['select2'];
			$name=$_POST['pname'];
			// $note=$_POST['note'];
			// echo $user1;
			$total=$_POST['txtDisplay'];

			
			$qry="SELECT * FROM login WHERE username='$user1'";
			$result2 = mysqli_query(mysqli_connect($host,$user,$password,$db_name), $qry);
			$row2 = mysqli_fetch_assoc($result2);

			$name1 = $row2['name'];
			$add = $row2['address'];
			$city = $row2['city'];
			$qry1="INSERT INTO orders (product, qty, confirmation, total) VALUES('$name', '$qty', '$transnum', '$total')";
			mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry1);

			$qry2="INSERT INTO reservation (product, firstname , address , city , payable , confirmation) VALUES('$name','$name1','$add','$city', '$total', '$transnum')";
			
			// echo $city;
			mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry2);


			// header("location: index.php?user='$user1'");
			
'<meta http-equiv="refresh" content="1; url=index.php?user='.$user1.'">'
?> 