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
#LH1:hover .overlay,#LH2:hover .overlay,#LH3:hover .overlay,#LH4:hover .overlay{
	opacity: 1;}

#LH5:hover .overlay,#LH6:hover .overlay,#LH7:hover .overlay,#LH8:hover .overlay,#DELD-LAB:hover .overlay{
opacity: 1;}
#MATLAB:hover .overlay,#MPI-LAB:hover .overlay,#LAB-VIEW:hover .overlay,#CADENCE-LAB:hover .overlay,#EDC-LAB:hover .overlay,#ESD-LAB:hover .overlay,#BEEE-LAB:hover .overlay{
opacity: 1;}



#LH1,#LH2,#LH3,#LH4
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #005aa7, #fffde4);
}
#LH5,#LH6,#LH7,#LH8,#DELD-LAB
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #2bc0e4, #eaecc6);
}
#MATLAB,#MPI-LAB,#LAB-VIEW,#CADENCE-LAB,#EDC-LAB,#ESD-LAB,#BEEE-LAB
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #ee9ca7, #ffdde1);
}



 body {
      position:relative; 

  }
  #ground {padding:50px;height:600px;color:white; background:linear-gradient(to right, #11998e, #38ef7d) ;}
  #first {padding:50px;height:600px;color:white; background:linear-gradient(to right, #1d2b64, #f8cdda);}
  #second {padding:50px;height:600px;color:black; background:linear-gradient(to right, #005aa7, #fffde4);}
  

  
  
  
 
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




<div id="ground" class="container-fluid">

  <h1 style="font-size=3vw;">Free venues at edison-first floor</h1>
  <br><br>
<div class="w3-panel  w3-card" id="LH1">

  <h3>LH1</h3> 
  
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>
<div class="w3-panel  w3-card" id="LH2">

  <h3>LH2</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="LH3">

  <h3>LH3</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="LH4">

  <h3>LH4</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

  
   <div class="alert alert-info" style="display:none" id="no1">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT FIRST FLOOR</a>.
  </div>
  
   </div>
  
  
  
  
  
<div id="first" class="container-fluid">
  <h1>Free venues at edison-second floor</h1>
  <br><br>
  <div class="w3-panel  w3-card" id="LH5">

  <h3>LH5</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="LH6">
  
  <h3>LH6</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel  w3-card" id="LH7">

  <h3>LH7</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="LH8">

  <h3>LH8</h3>
 
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="DELD-LAB">

  <h3>DELD LAB</h3>
 
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>


 <div class="alert alert-info" style="display:none;" id="no2">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT SECOND FLOOR</a>.
  </div>



</div>

<div id="second" class="container-fluid">
  <h1>free venues at edison-third floor</h1>
  <div class="w3-panel  w3-card" id="MATLAB">
  
  <h3>MATLAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="MPI-LAB">
  
  <h3>MPI LAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
  <div class="w3-panel  w3-card" id="LAB-VIEW">
  
  <h3>LAB VIEW</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="CADENCE-LAB">
  
  <h3>CADENCE LAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
  <div class="w3-panel  w3-card" id="EDC-LAB">
  
  <h3>EDC LAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  
  
 <div class="w3-panel  w3-card" id="ESD-LAB">
  
  <h3>ESD LAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div> 
  <div class="w3-panel  w3-card" id="BEEE-LAB" style="background:green">
  
  <h3>BEEE LAB</h3>
  <div class="overlay">ELECTRONICS LAB&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

</div>
  

  
  
 

  
   <div class="alert alert-info" style="display:none;" id="no3">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT THIRD FLOOR OTHER THAN BEEE-LAB </a>.
  </div>
  
  
   <div><a href="venue2.html"><i class="fa fa-angle-double-left" style="font-size:55px;color:black;float:right;"></i></a></div>
</div>




<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_project');
$a=$_POST['le'];
$q10="select $a from emon_ground where $a is not null";
$q11="select $a from emon_first where $a is not null";
$q12="select $a from emon_second where $a is not null";
$q20="select $a from etues_ground where $a is not null";
$q21="select $a from etues_first where $a is not null";
$q22="select $a from etues_second where $a is not null";
$q30="select $a from ewed_ground where $a is not null";
$q31="select $a from ewed_first where $a is not null";
$q32="select $a from ewed_second where $a is not null";
$q40="select $a from ethrus_ground where $a is not null";
$q41="select $a from ethrus_first where $a is not null";
$q42="select $a from ethrus_second where $a is not null";
$q50="select $a from efri_ground where $a is not null";
$q51="select $a from efri_first where $a is not null";
$q52="select $a from efri_second where $a is not null";

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