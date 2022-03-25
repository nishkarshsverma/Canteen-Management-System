<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
Order Date: <?php
include('../store/connect.php');
		$id=$_GET['id'];
		// echo $id;
		$qry="SELECT * FROM reservation WHERE confirmation='$id'";
		$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
		//$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysqli_fetch_array($result))
			{
				// echo $row['date'];
			}
	?> 
<table cellpadding="1" cellspacing="1" id="resultTable">
	<thead>
		<tr>
			<th  style="border-left: 1px solid #C1DAD7"> Name </th>
			<th> Quantity </th>
			<th> Total </th>
		</tr>
	</thead>
	<tbody>
	<?php
		
		$id=$_GET['id'];
		$qry="SELECT * FROM orders WHERE confirmation='$id'";
		$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
		//$result = mysqli_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($row = mysqli_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['product'].'</td>';
				echo '<td>'.$row['qty'].'</td>';
				echo '<td>'.$row['total'].'</td>';
				echo '</tr>';
			}

		// echo "abC";
	?> 
	<?php
		$id=$_GET['id'];
		$qry="SELECT * FROM reservation WHERE confirmation='$id'";
		$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
		//$result = mysqli_query("SELECT * FROM reservation WHERE confirmation='$id'");
		// while($row = mysqli_fetch_array($result))
		// 	{
		// 		echo '<tr class="record">';
		// 		echo '<td style="border-left: 1px solid #C1DAD7;">Total Payable</td>';
		// 		echo '<td>'.$row['payable'].'</td>';
		// 		echo '</tr>';
		// 	}
	?> 
	</tbody>
</table>