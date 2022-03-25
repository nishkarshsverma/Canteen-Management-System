<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Canteen Management System</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jqueryslidemenu.css" type="text/css" media="screen" />
<style>
    /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
<!-- supersized -->
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/supersized.shutter.css" type="text/css" media="screen" />
<!-- supersized -->

<link rel="stylesheet" href="css/carouFredSel.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/quicksand.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<!-- supersized -->
<script type="text/javascript" src="js/supersized.3.2.7.js"></script>
<script type="text/javascript" src="js/supersized.shutter.js"></script>
<!-- supersized -->

<!-- fancybox -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<!-- fancybox -->

<!-- quicksand -->
<script type="text/javascript" src="js/portfolio_sortable.js"></script>
<script type="text/javascript" src="js/quicksand.js"></script>
<!-- quicksand -->

<script type="text/javascript" src="js/jquery.carouFredSel-6.0.6.js"></script>

<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page_wrapper">
<div id="dvLoading"></div>
<div id="bgOverlay"><a  href="#" class="page_close"><img src="images/close_button.png" alt="img" /></a></div>


<!--leftSide start --> 
<div id="leftSide">
    <div id="logo">
        <h1>
            <a href="index.php">
                <img src="images/logo.png" alt="logo" />
            </a>
        </h1>
    </div>
    
    <nav id="sidebarmenu">
        <ul id="sidebarmenu1" class="menu">
            <li><a href="#page_gallery">Available Menu</a></li>
            <li><a href="#page_about">For Orders</a></li>
        </ul>
		
    </nav>
    <nav id="sidebarmenu">
        <ul id="sidebarmenu1" class="menu">
            <li><a href="#adminlogin">Admin Panel</a></li>
            <li><a href="#about">About DEveLopers</a></li>
        </ul>
		
    </nav>
    
    
</div>
<!--leftside end --> 
<!--Content Start-->
<div class="contWrapper">
<article id="content">



<ul id="ulcontent">

<li id="about">
<div>
    <div id="pg" style="font-size:22px;font-family: Times New Roman, Helvetica, sans-serif;color:silver;">
        This is a Website made for Mini Project assesment for SEM 2 in ABES Engineering College by.
    </div>
    <br> <br> <br>

    <ol>
    <li><pre style=" font-variant: small-caps;font-size:22px;font-family: Times New Roman, Helvetica, sans-serif;">1.  Pratham Gupta                                               2.  Nishkarsh Verma </pre></li>
    <br>
    <div>
        <img src="img1.jpeg" height="350" width ="260">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="img2.jpeg" height="350" width ="260">
    </div>
    <br><br>
    <li><pre style=" font-variant: small-caps;font-size:22px;font-family: Times New Roman, Helvetica, sans-serif;">Roll No. - 1900320100111                                 Roll No. - 1900320100103 </pre></li>
    <br>
    <br>
    <br>
    </ol>
</div>

</li>

<li id="page_about">
<div>
<div class="title-wrapper">
        <h2>Login for orders</h2>
    </div>
<div id = "frm">  

        <form name="f1" action = "authenticate1.php?id='user'" onsubmit = "return validation()" method = "POST">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" id ="user" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" id ="pass" required>

            <button type="submit" id = "btn" value= "Login">Login</button>
        </form>
    </div>
</div>

</li>

<!--Menu Start-->
<li id="page_gallery">
    <div class="title-wrapper">
        <h2>Available Menu</h2>
    </div>
    <div>
    <ul class="splitter" id="filter">
        <li>
        <ul>
            <li class="segment-1 selected-1"><a href="#" data-value="all">All</a></li>
            <li class="segment-0"><a href="#" data-value="non_veg">Non Vegeterian</a></li>
            <li class="segment-2"><a href="#" data-value="veg">Vegeterian</a></li>
            <li class="segment-3"><a href="#" data-value="drinks">Drinks</a></li>
			<li class="segment-4"><a href="#" data-value="desert">Desert</a></li>
			<li class="segment-4"><a href="#" data-value="snacks">Snacks</a></li>
			<li class="segment-1"><a href="#" data-value="chinese">Chinese</a></li>
			<li class="segment-4"><a href="#" data-value="south">South Indian</a></li>
        </ul>
        </li>
    </ul>
    </div>
    <div class="image_grid">
        <ul id="list" class="portfolio_list">
            
			<li data-id="id-1" class="veg">
                    <span class="roll"></span>
                    <img src="images/chole.jpg" alt="img" class="img_bor" height="180" width="230"/>
            </li>
			<li data-id="id-1" class="veg">
                    <span class="roll"></span>
                    <img src="images/biryani.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
			<li data-id="id-1" class="snacks">
                    <span class="roll"></span>
                   <img src="images/samosa.jpg"  height="180" width="230" alt="img" class="img_bor" /> 
            </li>
			<li data-id="id-1" class="desert">
                    <span class="roll"></span>
                    <img src="images/pastry.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
			<li data-id="id-1" class="chinese">
                    <span class="roll"></span>
                    <img src="images/momos.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
			<li data-id="id-1" class="desert">
                    <span class="roll"></span>
                    <img src="images/choc.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
			<li data-id="id-1" class="chinese">
                
                    <span class="roll"></span>
                    <img src="images/burger.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-2" class="chinese">
                    <span class="roll"></span>
                    <img src="images/noodles.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-3" class="drinks">
                    <span class="roll"></span>
                    <img src="images/coke.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="snacks">
                    <span class="roll"></span>
                    <img src="images/menu/sandwich.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="veg">
                    <span class="roll"></span>
                    <img src="images/menu/pavbhaji.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="vegd">
                    <span class="roll"></span>
                    <img src="images/menu/mojito.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="snacks">
                    <span class="roll"></span>
                    <img src="images/menu/patties.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="veg">
                    <span class="roll"></span>
                    <img src="images/menu/salad.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="chinese">
                    <span class="roll"></span>
                    <img src="images/menu/masalapasta.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="snacks">
                    <span class="roll"></span>
                    <img src="images/menu/masalapapad.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="drinks">
                    <span class="roll"></span>
                    <img src="images/menu/lassi.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="chinese">
                    <span class="roll"></span>
                    <img src="images/menu/manchurian.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="drinks">
                    <span class="roll"></span>
                    <img src="images/menu/tea.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="drinks">
                    <span class="roll"></span>
                    <img src="images/menu/coffee.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="veg">
                    <span class="roll"></span>
                    <img src="images/menu/kulche.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="snacks">
                    <span class="roll"></span>
                    <img src="images/menu/golgappe.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="south">
                    <span class="roll"></span>
                    <img src="images/menu/idli.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="south">
                    <span class="roll"></span>
                    <img src="images/menu/dosa.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="veg">
                    <span class="roll"></span>
                    <img src="images/menu/friedrice.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="non_veg">
                    <span class="roll"></span>
                    <img src="images/menu/eggroll.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="non_veg">
                    <span class="roll"></span>
                    <img src="images/menu/eggcurry.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="snacks">
                    <span class="roll"></span>
                    <img src="images/menu/DahiBhalla.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
            <li data-id="id-4" class="chinese">
                    <span class="roll"></span>
                    <img src="images/menu/chawmin.jpg" height="180" width="230" alt="img" class="img_bor" />
            </li>
			
        </ul>
    </div>    
</li>
<!--Menu End-->




<!--adminlogin Start-->
<li id="adminlogin">
   
    <div class="title-wrapper">
        <h2>Admin Login Form</h2>
    </div>

    <div id = "frm"> 
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST"">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" id ="user" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" id ="pass" required>

            <button type="submit" id = "btn" value= "Login">Login</button>
        </form>
    </div>  

    
    <!-- // validation for empty field    -->
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</li>
<!--adminlogin End-->
                   
</ul>
</article>
</div>
<!--Content End-->

</div>
<!--Page wrapper End-->

</body>
</html>