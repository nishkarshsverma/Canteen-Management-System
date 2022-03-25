<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'shoopingcart'; 

/* End config */



$link = mysqli_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysqli_select_db(mysqli_connect($db_host,$db_user,$db_pass),$db_database);
mysqli_query($link, "SET names UTF8");

?>