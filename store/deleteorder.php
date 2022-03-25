<?php
include('connect.php');

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "userlogin";  
  
$con = mysqli_connect($host, $user, $password, $db_name);
if($_GET['id'])
{
$id=$_GET['id'];
// echo $id;
$user1=$_GET['user1'];
 $sql = "DELETE from orders WHERE id='$id'";
 'header("location: index.php?id='.$user.'")';
 mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database),$sql);
 
    $qry="SELECT * FROM login WHERE username='$user1'";
			$result2 = mysqli_query(mysqli_connect($host,$user,$password,$db_name), $qry);
			$row2 = mysqli_fetch_assoc($result2);

            $name1 = $row2['name'];
            
// echo $name1;
$qry2="DELETE from reservation WHERE firstname='$name1'";
// mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry2);
 
 
 //mysqli_query( $sql);
}

?>