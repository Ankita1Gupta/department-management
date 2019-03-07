<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.overlay {
 position:relative;
 bottom:0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
 transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  
  text-align: center;
}
#ED-101:hover .overlay {
opacity: 1;}
#ED-102:hover .overlay {
opacity: 1;}
#ED-103:hover .overlay {
opacity: 1;}
#ED-104:hover .overlay {
opacity: 1;}
#ED-105:hover .overlay {
opacity: 1;}
#ED-201:hover .overlay {
opacity: 1;}
#ED-202:hover .overlay {
opacity: 1;}
#ED-203:hover .overlay {
opacity: 1;}
#ED-204:hover .overlay {
opacity: 1;}
#ED-205:hover .overlay {
opacity: 1;}
</style>
</head>
<body>
<div class="w3-container">

<div class="w3-panel  w3-card" id="ED-101">

  <h3>ED-101</h3>
 
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="ED-102">
  
  <h3>ED-102</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel w3-card" id="ED-103">
  
  <h3>ED-103</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel  w3-card" id="ED-104">
  
  <h3>ED-104</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-105">
  
  <h3>ED-105</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-201">
  
  <h3>ED-201</h3>
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-202">
  
  <h3>ED-202</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-203">
  
  <h3>ED-203</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-204">
  
  <h3>ED-204</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="ED-205">
  
  <h3>ED-205</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
</div>




<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_system');
$q1="select free_venus from emon_free where lec=".$_POST['le'];
$q12="select free_venus from emon_free2 where lec=".$_POST['le'];
$q2="select free_venus from etues_free where lec=".$_POST['le'];
$q22="select free_venus from etues_free2 where lec=".$_POST['le'];
$q3="select free_venus from ewed_free where lec=".$_POST['le'];
$q32="select free_venus from ewed_free2 where lec=".$_POST['le'];
$q4="select free_venus from ethrus_free where lec=".$_POST['le'];
$q42="select free_venus from ethrus_free2 where lec=".$_POST['le'];
$q5="select free_venus from efri_free where lec=".$_POST['le'];
$q52="select free_venus from efri_free2 where lec=".$_POST['le'];
if($_POST['DAYS']=='Monday')
{$result=mysqli_query($con,$q1);
$result2=mysqli_query($con,$q12);
}
    elseif($_POST['DAYS']=='Tuesday')
	{$result=mysqli_query($con,$q2);
	$result2=mysqli_query($con,$q22);
	}
	elseif($_POST['DAYS']=='Wednesday')
		{$result=mysqli_query($con,$q3);
		$result2=mysqli_query($con,$q32);
		}
	elseif($_POST['DAYS']=='Thursday')
		{$result=mysqli_query($con,$q4);
		$result2=mysqli_query($con,$q42);}
	elseif($_POST['DAYS']=='Friday')
		{$result=mysqli_query($con,$q5);
		$result2=mysqli_query($con,$q52);
		}
	$n_rows=mysqli_num_rows($result);
	
	

	for($i=1;$i<=$n_rows;$i++)
	{
		$row=mysqli_fetch_array($result);
		$r1=$row['free_venus'];
		echo "<script>";
echo "var a = \"$r1\";\n";
echo " x=document.getElementById(a);
x.style.background='green';";
echo "</script>";
}
	$n_rows2=mysqli_num_rows($result2);
for($i=1;$i<=$n_rows2;$i++)
	{
		$row2=mysqli_fetch_array($result2);
		$r2=$row2['free_venus'];
		echo "<script>";
echo "var a = \"$r2\";\n";
echo " x=document.getElementById(a);
x.style.background='green';";
echo "</script>";
}

        
	
	mysqli_close($con);

	?>
	




</body>
	</html>