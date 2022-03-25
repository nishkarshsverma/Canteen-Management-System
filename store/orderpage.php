<?php
include('connect.php');
$id=$_GET['id'];
// $user1=$_GET['user1'];
$qry="SELECT * FROM internet_shop WHERE id='$id'";
$result2 = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
while($row2 = mysqli_fetch_array($result2))
	{
	$price=$row2['price'];
    $name=$row2['name'];
	$img=$row2['img'];
	echo '<img src="img/products/'.$row2['img'].'" alt="Wall-E" title="'.$row2['name'].'" width="290" height="220"/><br>';
	echo '<span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['name'].'</span><br>';
	echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    }

?>
<script type="text/javascript" language="Javascript">
	var sum=0;
	price = document.frmOne.select1.value;
	document.frmOne.txtDisplay.value = price;
    function OnChange(value){
		
		price = document.frmOne.select1.value;
		quantity = document.frmOne.select2.value;
        sum = price * quantity;
		
		document.frmOne.txtDisplay.value = sum;
    }
</script>
<SCRIPT language=Javascript>
			  <!--
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
			  //-->
		</SCRIPT>
<form NAME = "frmOne" action="initiateorder.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="transnum" value="<?php echo $_GET['trnasnum'] ?>" />
	<input type="Text" name="user1" value="<?php echo $_GET['user1'] ?>" style="display:none;" />
	<INPUT type = "Text" name = "select1" size = "35" value ="<?php echo $price ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "pname" size = "35" value ="<?php echo $name ?>" style="display:none;">
    <INPUT TYPE = "image" name = "image" size = "35" value ="<?php echo $img ?>" style="display:none;">
    <br>
    
    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">Quantity : </span>
	<input type="text" name="select2" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" style="width:60px;" /> 
	
	 <span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">=</span> 
    <INPUT TYPE = "Text" name = "txtDisplay" size = "35" value ="" style="border:#999999 solid 1px; background-color:#FFF; width:100px; height:20px;" readonly><br>
	<input type="submit" value="Add" style="padding:10px; border-radius:15px; background-color:green; border:none; color:#ffffff; font-weight:bold; border: 1px solid #000000"/>
</form>