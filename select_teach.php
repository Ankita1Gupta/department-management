<?php


session_start();


?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 250px;
  height:auto;
  margin: auto;
  text-align: center;
  font-family: arial;
   margin-right: 17px;
    margin-bottom: 10px;
}

.title {
  color: grey;
  font-size: 18px;
}

span {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;

  width: 94%;
  font-size: 18px;

}

button {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

span:hover, button:hover {
  opacity: 0.7;
  
}
body { 
    background-image: url('wa.png');
    background-repeat: no-repeat;
    background-size:cover;
   
}
</style>
</head>
<body>
<a href="project2.html"><i class="fa fa-home fa-3x" style="float:right;color:black;"></i></li></a>
<?php
    if(isset($_GET['data']))
	{
     $v=$_GET['data'];
	 $v1=$_GET['pid'];
$cn=mysqli_connect('localhost','root');
mysqli_select_db($cn,'department_project');

	$qu="update teach_info set counter=counter+1 where teach_name=$v";
mysqli_query($cn,$qu);
	}

?>
<div class="card" style="display:none" id="th">
  <img style="width:100%" id="img">
  <font id="name" size="5px"></font>  (<font class="title" id="sub"></font>)
  <p>No.of times duty assigned <font id="count" size=12px></font></p>
 
 <div style="margin: 24px 0;">

    <button onclick="inc(this)">Assign Duty</button> &nbsp &nbsp <button id="send" onclick="mail(this)">MAIL</button>
	<br>
	<br>
	
	
 <span>weekly load-<b><font id="work"></font></b></span>
 </div>
</div>
<script>
function mail(pass)
{
p1=pass.parentElement;
	
	p2=p1.parentElement;
p3=p2.childNodes[3];
	p4=p3.innerHTML;
	window.location.replace("sendmail.php?teachname='"+p4+"'");
	
}
function inc(para)
{

	p1=para.parentElement;
	
	p2=p1.parentElement;
	p3=p2.childNodes[3];
	p4=p3.innerHTML;
val=para.tagName;

window.location.replace("select_teach.php?data='"+p4+"'&pid='"+val+"'");
	p2.style.backgroundColor="#EBEBE4";


}



</script>









<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_project');
if(!isset($_GET['data']))
{
$_SESSION['lect']=$_POST['le'];
$_SESSION['days']=$_POST['DAYS'];
}

$a=$_SESSION['lect'];
$b=$_SESSION['days'];
$q1="select * from teach_info where teach_name in(select $a from mon_teach)";
$q2="select * from teach_info where teach_name in(select $a from tues_teach)";
$q3="select * from teach_info where teach_name in(select $a from wed_teach)";
$q4="select * from teach_info where teach_name in(select $a from thrus_teach)";
$q5="select * from teach_info where teach_name in(select $a from fri_teach)";

if($b=='Monday')
{
	$result=mysqli_query($con,$q1);
}
    elseif($b=='Tuesday')
	{
		$result=mysqli_query($con,$q2);
	}
	elseif($b=='Wednesday')
		{
			$result=mysqli_query($con,$q3);
		}
	elseif($b=='Thursday')
		{
			$result=mysqli_query($con,$q4);
	    }
	elseif($b=='Friday')
		{
			$result=mysqli_query($con,$q5);
		}
	$n_rows=mysqli_num_rows($result);
	
	for($i=1;$i<=$n_rows;$i++)
	{
		$row=mysqli_fetch_array($result);
		$r1=$row['teach_name'];
		$r2=$row['img'];
		$r3=$row['sub'];
		$r4=$row['work_load'];
		$r5=$row['counter'];
		
		echo "<script>";
echo "var a = \"$r1\";\n";
echo "var b = \"$r2\";\n";
echo "var c = \"$r3\";\n";
echo "var d = \"$r4\";\n";
echo "var e = \"$r5\";\n";
echo " document.getElementById('th').style.display='inline-block';";
echo " y=document.getElementById('img');
y.src=b;";
echo " z=document.getElementById('name');
z.innerHTML=a;";
echo " q=document.getElementById('sub');
q.innerHTML=c;
o=document.getElementById('work');
o.innerHTML=d;
 co=document.getElementById('count');
co.innerHTML=e;
itm=document.getElementById('th');
    cln=itm.cloneNode(true);
    document.body.appendChild(cln);";
echo "</script>";






}
echo "<script>";
	echo " document.getElementById('th').style.display='none';";
	
    echo "</script>";   
	
	
	
	

	mysqli_close($con);
	?>
	 
	 <div><a href="teacher.html"><i class="fa fa-angle-double-left" style="font-size:55px;color:black;float:right;"></i></a></div>
		
		
		
		
		
		
		
		



</body>
	</html>