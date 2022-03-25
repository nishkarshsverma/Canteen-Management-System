<?php
	require_once('../auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
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
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
  	<!--LOGO-->
	<div class="grid_8" id="logo">Admin Panel</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="../index.php">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="index.php" class="main current"><span class="outer"><span class="inner dashboard">Orders</span></span></a></li>
		<li class="item middle" id="four"><a href="emp.php" class="main"><span class="outer"><span class="inner media_library">Employees</span></span></a></li>  
		<li class="item last" id="eight"><a href="products.php" class="main"><span class="outer"><span class="inner settings">Products</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Orders</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			<br><br>
			<!-- &nbsp;&nbsp;Legend:  <img src="cancel.png">Pending &nbsp;<img src="active.png">Delivered -->
			</div>
			<div class="portlet-content nopadding">
			<form action="" method="post">
			
			<table cellpadding="1" cellspacing="1" id="resultTable">
				<thead>
					<tr>
						<th  style="border-left: 1px solid #C1DAD7"><center> Order Number </center></th>
						<!-- <th><center> Date </center></th> -->
						<th><center> Name </center></th>
						<th><center> Address </center></th>
						<th><center> Total Amount </center></th>
						<th><center> City </center></th>
						<th><center> Action </center></th>
					</tr>
				</thead>
				<tbody>
				<?php
					include('../store/connect.php');
					//$result = mysqli_query("SELECT * FROM reservation ORDER BY date ASC");
					$qry="SELECT * FROM reservation ORDER BY reservation_id ASC";
					$result=mysqli_query(mysqli_connect($db_host,$db_user,$db_pass,$db_database), $qry);
					while($row = mysqli_fetch_array($result))
						{
							echo '<tr>';
							echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center">'.$row['reservation_id'].'</div></td>';
							// echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['date'].'</td>';
							echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center">'.$row['firstname'].'</div></td>';
							echo '<td><div align="center">'.$row['address'].'</div></td>';
							echo '<td><div align="center">'.$row['payable'].'</div></td>';
							
							echo '<td><div align="center">'.$row['city'].'</div></td>';
							echo '<td><div align="center"><a rel="facebox" href="vieworders.php?id='.$row['confirmation'].'" title="Click To View Orders">View Orders</a> | <a rel="facebox" href="viewreport.php?id='.$row['confirmation'].'" title="Click To View Orders">Print</a> </div></td>';
							echo '</tr>';
						}

					?> 
				</tbody>
			</table>
			</form>
			</div>
		</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->

<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Made by <a href="../index.php#about">Canteen Management System</a></div>
<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>