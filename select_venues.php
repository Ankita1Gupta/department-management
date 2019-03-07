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
#TG-101:hover .overlay {
opacity: 1;}
#TG-102:hover .overlay {
opacity: 1;}
#TG-103:hover .overlay {
opacity: 1;}
#TG-104:hover .overlay {
opacity: 1;}
#TG-105:hover .overlay {
opacity: 1;}
#TG-201:hover .overlay {
opacity: 1;}
#TG-202:hover .overlay {
opacity: 1;}
#TG-203:hover .overlay {
opacity: 1;}
#TG-204:hover .overlay {
opacity: 1;}
#TG-205:hover .overlay {
opacity: 1;}
</style>
</head>
<body>
<div class="w3-container">

<div class="w3-panel  w3-card" id="TG-101">

  <h3>TG-101</h3>
 
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="TG-102">
  
  <h3>TG-102</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel w3-card" id="TG-103">
  
  <h3>TG-103</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel  w3-card" id="TG-104">
  
  <h3>TG-104</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-105">
  
  <h3>TG-105</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-201">
  
  <h3>TG-201</h3>
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-202">
  
  <h3>TG-202</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-203">
  
  <h3>TG-203</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-204">
  
  <h3>TG-204</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-205">
  
  <h3>TG-205</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
</div>




<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_system');
$q1="select free_venus from mon_free where lec=".$_POST['le'];
$q12="select free_venus from mon_free2 where lec=".$_POST['le'];
$q2="select free_venus from tues_free where lec=".$_POST['le'];
$q22="select free_venus from tues_free2 where lec=".$_POST['le'];
$q3="select free_venus from wed_free where lec=".$_POST['le'];
$q32="select free_venus from wed_free2 where lec=".$_POST['le'];
$q4="select free_venus from thrus_free where lec=".$_POST['le'];
$q42="select free_venus from thrus_free2 where lec=".$_POST['le'];
$q5="select free_venus from fri_free where lec=".$_POST['le'];
$q52="select free_venus from fri_free2 where lec=".$_POST['le'];
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