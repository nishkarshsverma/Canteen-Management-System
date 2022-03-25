<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<?php
include('../store/connect.php');
		$id=$_GET['id'];
		$qry = "SELECT * FROM reservation WHERE confirmation='$id'";
		$result = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
		while($row = mysqli_fetch_array($result))
			{
				// echo 'Date: '.$row['date'].' <br>';
				echo 'Name: '.$row['firstname'].' '.$row['lastname'].'<br>';
				// echo 'Address: '.$row['address'].' '.$row['city'].' '.$row['country'].'<br>';
				echo 'Email: '.$row['email'].'<br>';
				// echo 'Contact number: '.$row['contact'].'<br>';
			}
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1">
		<tr>
			<td> Name </td>
			<td> Quantity </td>
		</tr>
	<?php
		
		$id=$_GET['id'];
		$qry2="SELECT * FROM orders WHERE confirmation='$id'";
		$result1 = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry2);
		while($row = mysqli_fetch_array($result1))
			{
				echo '<tr class="record">';
				echo '<td>'.$row['product'].'</td>';
				echo '<td>'.$row['qty'].'</td>';
				echo '</tr>';
			}
	?> 
	<?php
		$id=$_GET['id'];
		$qry1="SELECT * FROM reservation WHERE confirmation='$id'";
		$result2 = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry1);
		while($row = mysqli_fetch_array($result2))
			{
				echo '<tr class="record">';
				echo '<td>Total Payable</td>';
				echo '<td>'.$row['payable'].'</td>';
				echo '</tr>';
			}
	?> 
</table>
</div>