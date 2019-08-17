

<?php
echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='style.css' rel='stylesheet'>
</head>
<body background='img/001.jpg' img width='1050' height='1000' topmargin='0' bottommargin='0'>
<form method='POST'>
<center>
<div class='main'>
";
require'mymenu.php';
$uid=$_GET["uid"];
$mn=$_GET["mn"];
$pr=$_GET["pr"];
$dt=$_GET["dt"];
$tm=$_GET["tm"];
$nbsit=$_GET["nbsit"];
$na=$_GET["na"];
$email=$_GET["email"];
$cno=$_GET["cno"];
$mp=$_GET["mp"];

echo"
<div class='content'>
<center>
<br>
<table width='900' border='1' cellpadding='5' cellspacing='0'>
<tr><td>";


 require'db_conn.php';
$bno=rand(10000,99999);


 $q1=mysql_query("insert into booking values('$bno','$uid','$mn','$pr','$mp','$dt','$tm','$nbsit','$na','$email','$cno','')");
if($q1)
{
echo"<center><h4><font color='#7DD402'>Congrutulation !</font> $na ,</h4> Your booking is confirmed. <br> <h4>Your booking no is : <font color='red'>#$bno</font></h4></center>";
}
else
{
  echo"Sorry ! try again.";
}



echo"</td></tr>
</table>

</center>
</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by Abc Designer</div>
</div>
</center>
</body>
</html>
";
?>