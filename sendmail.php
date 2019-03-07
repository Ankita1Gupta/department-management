<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<?php
$cn=mysqli_connect('localhost','root');
mysqli_select_db($cn,'department_project');
$v=$_GET['teachname'];
	$qu1="select email from teach_info where teach_name=$v";
$re=mysqli_query($cn,$qu1);
 $n_re=mysqli_num_rows($re);  
	 for($i=1;$i<=$n_re;$i++)
	{
		$ro=mysqli_fetch_array($re);
		$em=$ro['email'];
	}
	include "classes/class.phpmailer.php";
	$mail=new PHPMailer();
	$mail->SMTPDebug=3;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->IsHTML(true);
	$mail->Username="def5abc5@gmail.com";
	$mail->Password="Aieee@123";
	$mail->SetFrom("def5abc5@gmail.com","rubi gupta",0);
	$mail->Subject="Regarding placement duty";
	$mail->Body="IT IS INFORMED THAT YOU ARE DEPUTED FOR PLACEMENT DUTY TODAY.REPORT TO MY CABIN FOR FURTHER INFORMATION THANKS REGARDS-DUTY-MANAGER";
	$mail->AddAddress($em);
	if(!$mail->Send())
	{
		echo "Mailer Error:".$mail->ErrorInfo;
	}
	else
	{
		echo "Message has been sent";
		
	}
	mysqli_close($cn);
	?>
	
	 <div><a href="teacher.html"><i class="fa fa-angle-double-left" style="font-size:55px;color:black;float:right;"></i></a></div>
	 </body>
	 </html>