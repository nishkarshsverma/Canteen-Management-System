
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the room type");
  return false;
  }
var b=document.forms["addroom"]["rate"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the room rate");
  return false;
  }
var d=document.forms["addroom"]["desc"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the room description");
  return false;
  }
 var e=document.forms["addroom"]["image"].value;
if (e==null || e=="")
  {
  alert("Pls. browse an image");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
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

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Name<br />
  <input name="type" type="text" class="ed" /><br />
 Rate<br />
    <input name="rate" type="text" id="rate" class="ed" onkeypress="return isNumberKey(event)" /><br />
 
 Description<br />
    <input name="desc" type="text" class="ed" /><br />
    
 Room Image: <br /><input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>