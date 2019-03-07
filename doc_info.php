



<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dr_info');
$q1="select * from dr where disease=".$_POST['disease'];
$result=mysqli_query($con,$q1);
	$n_rows=mysqli_num_rows($result);
	
	

	for($i=1;$i<=$n_rows;$i++)
	{
		$row=mysqli_fetch_array($result);
		$r1=$row['free_venus'];
	}

        
	
	mysqli_close($con);

	?>
	

