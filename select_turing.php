<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
#TG-003:hover .overlay,#TG-004:hover .overlay,#TG-005:hover .overlay,#TG-006:hover .overlay,#TG-007:hover .overlay,#TG-008:hover .overlay,#TG-009:hover .overlay,#TG-010:hover .overlay{
opacity: 1;}

#TG-101:hover .overlay,#TG-102:hover .overlay,#TG-103:hover .overlay,#TG-104:hover .overlay {
opacity: 1;}
#TG-201:hover .overlay,#TG-202:hover .overlay,#TG-203:hover .overlay,#TG-204:hover .overlay,#TG-205:hover .overlay,#TG-205:hover .overlay,#TG-206:hover .overlay,#TG-207:hover .overlay {
opacity: 1;}
#TG-208:hover .overlay,#TG-209:hover .overlay,#TG-210:hover .overlay,#TG-213:hover .overlay {
opacity: 1;
}



#TG-003,#TG-005,#TG-006,#TG-007,#TG-008,#TG-009,#TG-010
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #005aa7, #fffde4);
}
#TG-101,#TG-102,#TG-103
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #11998e, #38ef7d);
}
#TG-201,#TG-202,#TG-203,#TG-204,#TG-205,#TG-206,#TG-207,#TG-208,#TG-209,#TG-210,#TG-213,#TG-004,#TG-104
{display: inline-block;
	height:70px;
width:300px;
background: linear-gradient(to right, #ee9ca7, #ffdde1);
}



 body {
      position:relative; 

  }
  #ground {padding:50px;height:600px;color:white; background:linear-gradient(to right, #314755, #26a0da) ;}
  #first {padding:50px;height:600px;color:white; background:linear-gradient(to right,#ba5370, #f4e2d8);}
  #second {padding:50px;height:600px;color:black; background:linear-gradient(to right, #225ba7, #00bdc4);}
 
 

  
  
  
 
</style>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="height:60px;">

<a href="project2.html"><i class="fa fa-home fa-3x" style="float:right;color:white;"></i></li></a>
    <div style="height:60px;">
      <div class="collapse navbar-collapse"id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#ground">GROUND FLOOR</a></li>
          <li><a href="#first">FIRST FLOOR</a></li>
          <li><a href="#second">SECOND FLOOR</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    




<div id="ground" class="container-fluid">

  <h1 style="font-size=3vw;">Free venues at turing-ground floor</h1>
  <br><br><br>
<div class="w3-panel  w3-card" id="TG-003">

  <h3>TG-003</h3> 
  
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>
</div>

<div class="w3-panel  w3-card" id="TG-004" style="background:green">

  <h3>TG-004</h3> 
  
  <div class="overlay">ED-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  75seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="TG-005">

  <h3>TG-005</h3>
 
  <div class="overlay">TUT-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  30seats
  </div>

 
</div>

<div class="w3-panel  w3-card" id="TG-006">
  
  <h3>TG-006</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel w3-card" id="TG-007">
  
  <h3>TG-007</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  
</div>

<div class="w3-panel  w3-card" id="TG-008">
  
  <h3>TG-008</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>

<div class="w3-panel  w3-card" id="TG-009">
  
  <h3>TG-009</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  </div>
  <div class="w3-panel  w3-card" id="TG-010">
  
  <h3>TG-010</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

  </div>
  
   <div class="alert alert-info" style="display:none;" id="no1">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT GROUND FLOOR OTHER THAN TG-004</a>.
  </div>
  
  
  
  
   </div>
  
  
  
  
  
<div id="first" class="container-fluid">
  <h1>Free venues at turing-first floor</h1>
  <br><br><br>
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
<div class="w3-panel  w3-card" id="TG-104" style="background:green">

  <h3>TG-104</h3> 
  
  <div class="overlay">Computer Lab&nbsp&nbsp&nbsp&nbsp&nbsp
  40seats
  </div>

 
</div>



<br><br><br>

 <div class="alert alert-info" style="display:none;" id="no2">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT FIRST FLOOR OTHER THAN TG-104</a>.
  </div>



</div>

<div id="second" class="container-fluid">
  <h1>free venues at turing-second floor</h1>
  
  <br><br><br>
  <div class="w3-panel  w3-card" id="TG-201">
  
  <h3>TG-201</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
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
  
  
 <div class="w3-panel  w3-card" id="TG-206">
  
  <h3>TG-206</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div> 
  
  <div class="w3-panel  w3-card" id="TG-207">
  
  <h3>TG-207</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="TG-208">
  
  <h3>TG-208</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
  
  
  <div class="w3-panel  w3-card" id="TG-209">
  
  <h3>TG-209</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="TG-210">
  
  <h3>TG-210</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
  
  <div class="w3-panel  w3-card" id="TG-213">
  
  <h3>TG-213</h3>
  <div class="overlay">LEC-HALL&nbsp&nbsp&nbsp&nbsp&nbsp
  60seats
  </div>

</div>
<div><a href="venue1.html"><i class="fa fa-angle-double-left" style="font-size:55px;color:black;float:right;"></i></a></div>
  
   <div class="alert alert-info" style="display:none;" id="no3">
    <strong>NOTE!!!!</strong> <a href="#" class="alert-link">NO FREE VENUES AT SECOND FLOOR</a>.
  </div>
 </div>
 
 

 
 
  


 




 



  </div>
  
  
  
  
  
  
  
</div>




<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_project');
$a=$_POST['le'];
$q10="select $a from mon_ground where $a is not null";
$q11="select $a from mon_first where $a is not null";
$q12="select $a from mon_second where $a is not null";
$q20="select $a from tues_ground where $a is not null";
$q21="select $a from tues_first where $a is not null";
$q22="select $a from tues_second where $a is not null";
$q30="select $a from wed_ground where $a is not null";
$q31="select $a from wed_first where $a is not null";
$q32="select $a from wed_second where $a is not null";
$q40="select $a from thrus_ground where $a is not null";
$q41="select $a from thrus_first where $a is not null";
$q42="select $a from thrus_second where $a is not null";
$q50="select $a from fri_ground where $a is not null";
$q51="select $a from fri_first where $a is not null";
$q52="select $a from fri_second where $a is not null";
$da=$_POST['DAYS'];
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
	echo "<script>
	y=document.getElementById('no1');
	y.style.display='block';
	
	</script>";
	
	
	
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
echo "var dayy = \"$da\";\n";
echo "var lee = \"$a\";\n";
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
	echo "<script> y=document.getElementById('no3');
	y.style.display='none';</script>";
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