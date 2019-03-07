<html>
<head>
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
#NB-104:hover .overlay,#NB-105:hover .overlay{
	opacity: 1;}

#NB-202:hover .overlay,#NB-203:hover .overlay,#NB-207:hover .overlay{
opacity: 1;}
#NB-301:hover .overlay,#NB-302:hover .overlay,#NB-303:hover .overlay,#NB-304:hover .overlay,#NB-306:hover .overlay,#NB-307:hover .overlay,#NB-308:hover.overlay,#NB-309:hover.overlay {
opacity: 1;}



#NB-104,#NB-105
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #005aa7, #fffde4);
}
#NB-202,#NB-207,#NB-203
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #11998e, #38ef7d);
}
#NB-301,#NB-302,#NB-303,#NB-304,#NB-306,#NB-307,#NB-308,#NB-309
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #ee9ca7, #ffdde1);
}



 body {
      position:relative; 

  }
  #ground {padding:50px;height:600px;color:white; background:linear-gradient(to right, #11998e, #38ef7d) ;}
  #first {padding:50px;height:600px;color:white; background:linear-gradient(to right, #005aa7, #fffde4);}
  #second {padding:50px;height:600px;color:black; background:linear-gradient(to right, #11998e, #38ef7d);}
  

  
  
  
 
</style>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="height:60px;">
<a href="project2.html"><i class="fa fa-home fa-3x" style="float:right;color:white;"></i></li></a>
    <div style="height:60px;">
      <div class="collapse navbar-collapse"id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#ground">FIRST FLOOR</a></li>
          <li><a href="#first">SECOND FLOOR</a></li>
          <li><a href="#second">THIRD FLOOR</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    



<br><br>
<div id="ground" class="container-fluid">

  <h1 style="font-size=3vw;">Free venues at newton-first floor</h1>
  <Br><br><br>
<div class="w3-panel  w3-card" id="NB-104">

  <h3>NB-104</h3> 
  
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>
<div class="w3-panel  w3-card" id="NB-105">

  <h3>NB-105</h3>
 
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>


  
   <div class="alert alert-info" style="display:none" id="no1">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT FIRST FLOOR</a>.
  </div>
  
   </div>
  
  
  
  
  
<div id="first" class="container-fluid">
  <h1>Free venues at newton-second floor</h1>
  <br><br><br>
  <div class="w3-panel  w3-card" id="NB-202">

  <h3>NB-202</h3>
 
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="NB-203" style="background:green">
  
  <h3>NB-203</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

  
</div>



<div class="w3-panel  w3-card" id="NB-207">
  
  <h3>NB-207</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

  
</div>




 <div class="alert alert-info" style="display:none;" id="no2">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT SECOND FLOOR OTHER THAN NB-203</a>.
  </div>



</div>

<div id="second" class="container-fluid">
  <h1>free venues at newton-third floor</h1>
  <br><br><br>
  <div class="w3-panel  w3-card" id="NB-301">
  
  <h3>NB-301</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="NB-302">
  
  <h3>NB-302</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
  <div class="w3-panel  w3-card" id="NB-303">
  
  <h3>NB-303</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="NB-304">
  
  <h3>NB-304</h3>
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
  <div class="w3-panel  w3-card" id="NB-306">
  
  <h3>NB-306</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
 <div class="w3-panel  w3-card" id="NB-307">
  
  <h3>NB-307</h3>
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div> 

<div class="w3-panel  w3-card" id="NB-308">
  
  <h3>NB-308</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
 
  <div class="w3-panel  w3-card" id="NB-309">
  
  <h3>NB-309</h3>
  <div class="overlay">COMPUTER LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  

  
  
 

  
   <div class="alert alert-info" style="display:none;" id="no3">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT THIRD FLOOR</a>.
  </div>
  
  
   
</div>
 <div><a href="ven3.html"><i class="fa fa-angle-double-left" style="font-size:55px;color:black;float:right;"></i></a></div>



<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_project');
$a=$_POST['le'];
$q10="select $a from nmon_ground where $a is not null";
$q11="select $a from nmon_first where $a is not null";
$q12="select $a from nmon_second where $a is not null";
$q20="select $a from ntues_ground where $a is not null";
$q21="select $a from ntues_first where $a is not null";
$q22="select $a from ntues_second where $a is not null";
$q30="select $a from nwed_ground where $a is not null";
$q31="select $a from nwed_first where $a is not null";
$q32="select $a from nwed_second where $a is not null";
$q40="select $a from nthrus_ground where $a is not null";
$q41="select $a from nthrus_first where $a is not null";
$q42="select $a from nthrus_second where $a is not null";
$q50="select $a from nfri_ground where $a is not null";
$q51="select $a from nfri_first where $a is not null";
$q52="select $a from nfri_second where $a is not null";

if($_POST['DAYS']=='Monday')
{$result=mysqli_query($con,$q10);
$result2=mysqli_query($con,$q11);
$result3=mysqli_query($con,$q12);
}
    elseif($_POST['DAYS']=='Tuesday')
	{$result=mysqli_query($con,$q20);
	$result2=mysqli_query($con,$q21);
	$result3=mysqli_query($con,$q22);
	}
	elseif($_POST['DAYS']=='Wednesday')
		{$result=mysqli_query($con,$q30);
		$result2=mysqli_query($con,$q31);
		$result3=mysqli_query($con,$q32);
		}
	elseif($_POST['DAYS']=='Thursday')

		{$result=mysqli_query($con,$q40);
		$result2=mysqli_query($con,$q41);
		$result3=mysqli_query($con,$q42);
		}
	elseif($_POST['DAYS']=='Friday')
		{$result=mysqli_query($con,$q50);
		$result2=mysqli_query($con,$q51);
		$result3=mysqli_query($con,$q52);
		}
	$n_rows=mysqli_num_rows($result);
	
	
	if($n_rows!=0)
	{
		echo "<script>";
		echo "y=document.getElementById('no1');
	y.style.display='none';
	";
	echo "</script>";
	
		for($i=1;$i<=$n_rows;$i++)
	{
		$row=mysqli_fetch_array($result);
		$r1=$row[$a];
		echo "<script>";
echo "var a1 = \"$r1\";\n";
echo " x=document.getElementById(a1);
x.style.background='green';";
echo "</script>";
}
	}
		
	else
	{
	echo "<script>";
	echo "y=document.getElementById('no1');
	y.style.display='block';";
	
	echo "</script>";
	
	
	
	}
	
	
	$n_rows2=mysqli_num_rows($result2);
	
	if($n_rows2==0)
	{
		echo "<script>
		y=document.getElementById('no2');
		y.style.display='block';
		</script>";
		
	}
	else
	{	
for($i=1;$i<=$n_rows2;$i++)
	{
		echo "<script>
		y=document.getElementById('no2');
		y.style.display='none';
		</script>";
		
		
		$row2=mysqli_fetch_array($result2);
		$r2=$row2[$a];
		echo "<script>";
echo "var a1 = \"$r2\";\n";
echo " x=document.getElementById(a1);
x.style.background='green';";
echo "</script>";
}
	}
	
	$n_rows3=mysqli_num_rows($result3);
	
	if($n_rows3==0)
	{
		
		echo "<script>
		y=document.getElementById('no3');
		y.style.display='block';
		</script>";
		
		
	}
else	
{
	echo "<script>";
	echo "y=document.getElementById('no3');
	y.style.display='none';";
	echo "</script>";
	for($i=1;$i<=$n_rows3;$i++)
	{
		$row=mysqli_fetch_array($result3);
		$r1=$row[$a];
		echo "<script>";
echo "var a1 = \"$r1\";\n";
echo " x=document.getElementById(a1);
x.style.background='green';";
echo "</script>";
}
}    
	
	mysqli_close($con);

	?>
	




</body>
	</html>