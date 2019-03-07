<?php
session_start();
?>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="main1.css">
        <title>Project</title>
		<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position:relative;

  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
		
		
		
		
		
    </head>
    <body>

        
<div id="video" style="max-width:100%,height:auto;">
<video autoplay loop id="myVideo">
  <source src='viddeo.mp4'>
</video>
<h4 style="color:white;font-size:5vw;">DEPARTMENT<br>
MANAGEMENT<br>
SYSTEM</h4>
<center/>
<a href="block1.html"><div class="rhombus2">
<center><b><p id="a" style="align:left">SELECT<BR>
VENUE</p></b></center>
</div></a>
<center/><a href="teacher.html"><div class="rhombus3">
<center><b><p id="a">SELECT<br> TEACHERS</p></b></center>
</div></a>

<a href="block1.html"><i class="fa fa-angle-down" id="down" style="font-size:3vw;"></i></a>
<div class="dropdown">
  <button class="dropbtn" >
  <?php 
$a=$_SESSION['username'];
echo "$a";
 ?> 
 <i class="fa fa-user-circle-o"></i></button>
  <div class="dropdown-content">
    <a href="addAdmin.html">ADD ADMIN</a>
    <a href="logout.php">LOGOUT</a>
    
  </div>
</div>

<button style="font-size:24px">
</button>
<h6 style="font-family:comic sans ms;letter-spacing:3px;"><a href="help1.html" id="help" style="font-size:1.5vw;">Help</a></h6>
</div>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
	$(window).load(function() {
  $("body").fadeIn("slow");
});
        $( document ).ready(function(){
         
		 $("#video").fadeIn(2000);
		});
		});
        </script>
    </body>
</html>