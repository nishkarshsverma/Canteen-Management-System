<?php
	require_once('../auth.php');
?>
<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];
  
// $host = "localhost";  
// $user = "root";  
// $password = '';  
// $db_name = "userlogin";  
  
// $con = mysqli_connect($host, $user, $password, $db_name);  
$user1=$_GET['user'];
?>
<html>
<head>
<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>
  <script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
<style>
a{
color:#fff;
text-decoration:none;
}
    a.tooltip {outline:none; }
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;} 
a.tooltip span {
    z-index:10;display:none; padding:14px 20px;
    margin-top:-30px; margin-left:28px;
    width:240px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute; color:#111;
    border:1px solid #DCA; background:#fffAF0;}
.callout {z-index:20;position:absolute;top:30px;border:0;left:-12px;}
    
/*CSS3 extras*/
a.tooltip span
{
    border-radius:4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
        
    -moz-box-shadow: 5px 5px 8px #CCC;
    -webkit-box-shadow: 5px 5px 8px #CCC;
    box-shadow: 5px 5px 8px #CCC;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this product?");
if (con ==false)
{
return false;
}
}

function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
</head>
<body>

<div id="wrapper">
	<div id="note">
	<?php
	include('connect1.php');
		$qry="SELECT * FROM login WHERE username='$user1'";
		$result2 = mysqli_query(mysqli_connect($host,$user,$password,$db_name), $qry);
	?>
	<pre><h1 style="margin-top: 0px; font-size:30px; margin-bottom: 5px; font-family:  sans-serif,Times New Roman, Helvetica, sans-serif;color:black;">Select items&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:18px; text-align: left; color:black; " href="../index.php">Logout</a></h1></pre>
	<?php
		$row2 = mysqli_fetch_assoc($result2);
		{
	?>
			<h3 style="margin-top: 0px; font-size:22px; margin-bottom: 5px; font-family:  sans-serif,Times New Roman, Helvetica, sans-serif;color:black;"> Hello </h3;
	<?php
			echo '<h2>'.$row2['name'].'</h2>';
		}
		?>

	</div>
	
	<div id="content">
		<div id="productlist">
			
			<?php
			require "connect.php";
			$qry =  "SELECT * FROM internet_shop";
			$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
			while($row = mysqli_fetch_array($result))
			{
			
				echo '<a rel="facebox" href="orderpage.php?id='.$row["id"].'&trnasnum='.$transnum.'&user1='.$user1.'"><img src="img/products/'.$row["img"].'" title="'.$row['name'].'" alt="'.htmlspecialchars($row["name"]).'" width="140" height="120" class="pngfix" /></a>';
			}

			?>
		</div>
		<div id="orderlist">
			<table width="100%" border="1" cellpadding="2" cellspacing="2">
				<tr>
				  <td></td>
				  <td width="25"><div align="center"><strong>Qty</strong></div></td>
				  <td width="150"><div align="left"><strong>Name</strong></div></td>
				  <td width="25"><div align="center"><strong>Total</strong></div></td>
				</tr>
				<?php
				$result3 = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database),"SELECT * FROM orders WHERE confirmation='$transnum'");
					while($row3 = mysqli_fetch_array($result3))
						{
						echo '<tr>';
						echo '<td><a href="deleteorder.php?id='.$row3['id'].'&user1='.$user1.'" id="'.$row3['id'].'" class="delbutton" title="Click To Delete"><img src="img/delete.png"></a></td>';
						echo '<td><div align="center">'.$row3['qty'].'</div></td>';
						echo '<td>'.$row3['product'].'</td>';
						echo '<td><div align="center">'.$row3['total'].'</div></td>';
						echo '</tr>';
						}
				?>
				<tr>
				  <td colspan="3"><div align="right"><span style="color:#B80000; font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Grand Total: </span></div></td>
				  <td><div align="center">
				  <?php
				  $result5 = mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database),"SELECT sum(total) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysqli_fetch_array($result5))
					  { 
						echo $row5['sum(total)']; 
						$sfdddsdsd=$row5['sum(total)'];
					  }
				  ?>
				  
				  
				  </div>
				  </td>
				</tr>
			</table>
			<form method="post" action="#" name="form1" onsubmit="return validateForm()">
			<input type="hidden" name="transnumber" value="<?php echo $transnum ?>" />
			<input type="hidden" name="total" value="<?php echo $sfdddsdsd ?>" />
			<input type="hidden" name="totalqty" value="
			<?php
				  $result5 = mysqli_query("SELECT sum(qty) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysqli_fetch_array($result5))
					  { 
						echo $row5['sum(qty)']; 
					  }
				  ?>
			" />
			<br>
			<!-- <a style="color:black" href="javascript:Clickheretoprint()">Print Recipt</a> -->
			<div id="print_content">
			<!--<input type="submit" value="Print Receipt">-->
			
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="clearfix"></div>
</div>
</body>
</html>