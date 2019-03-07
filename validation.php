<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'department_project');
$user=$_POST['user'];
$pass=$_POST['pass'];
$q="select * from admin_info where username='$user' && password='$pass'";
$result=mysqli_query($con,$q);
	$n=mysqli_num_rows($result);
	
	if($n==1)
	{
		$_SESSION['username']=$user;
		$row=mysqli_fetch_array($result);
	$_SESSION['email']=$row['email'];
	 header("location:project2.php"); 
	}
 else
 {
	  header("location:project1.html"); 
	
 }
 mysqli_close($con);
?>
