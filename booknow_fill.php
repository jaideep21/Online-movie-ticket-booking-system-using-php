
<?php
echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='style1.css' rel='stylesheet'>
</head>
<body background='img/001.jpg' img width='1050' height='1000' topmargin='0' bottommargin='0'>
<form method='POST'>
<center>          <div class='main'>
<div class='header'>
<a href='log.php'><div class='logo'>OTB</div></a>
<font color='white' size='20'>ONLINE TICKET BOOKING SYSTEM</font> </div>
<div class='mymenu'>
<a href='index.php' style='text-decoration:none;'><div class='btn'>Home</div></a>
<a href='support.php' style='text-decoration:none;'><div class='btn'>Support</div></a>
<a href='enquiry.php' style='text-decoration:none;'><div class='btn'>Enquiry</div></a>
                  </div>
";



$uid=$_GET["uid"];
$mn=$_GET["mn"];
$pr=$_GET["pr"];
$dt=$_GET["dt"];
$tm=$_GET["tm"];
$nbsit=$_GET["nbsit"];
echo"

<center>
<br>
<table width='600' border='1' cellpadding='5' cellspacing='0'>
<tr><th height='40' bgcolor=red colspan='2'>Movie Details </th></tr>
<tr><th >Movie Name :<td> $mn </th></tr>
<tr><th>Price :<td> $pr</th></tr>
<tr><th >Date:<td> $dt </th></tr>
<tr><th >Timing :<td> $tm </th></tr>
<tr><th >Sit Details :<td> $nbsit </th></tr>
<tr><th  colspan='2'>

<center>
<table><tr><td>
<br><input type='text' required name='na' placeholder=' Enter your name' style='width:280px;height:32px;margin:10px;'>
<br><input type='email' required name='email' placeholder=' Email Id' style='width:280px;height:32px;margin:10px;'>
<br><input type='number' required name='cno' placeholder=' Contact Number' style='width:280px;height:32px;margin:10px;'>
<br><input type='submit' name='sub' value='Continue' style='width:120px;height:32px;margin:10px;'>

 </td></tr>
 </table>

</th></tr>
</table>

";


if(isset($_POST["sub"]))
{
 $na=$_POST["na"];
  $email=$_POST["email"];
   $cno=$_POST["cno"];
  echo"<script>window.location='booknow_fill_final.php?uid=$uid&nbsit=$nbsit&mn=$mn&pr=$pr&dt=$dt&tm=$tm&na=$na&cno=$cno&email=$email';</script>";

}
echo"
</center>

          </div>



</center>
</body>
</html>
";
?>
