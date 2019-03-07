<?php
    if(isset($_GET['data']))
	{
     $v=$_GET['data'];
$cn=mysqli_connect('localhost','root');
mysqli_select_db($cn,'department_project');

$qu="update teach_info set counter=counter+1 where teach_name=$v";
mysqli_query($cn,$qu);
mysqli_close($cn);

    }

?>