<?php
echo"
<html>
<head>
<title>Forget Form</title>
<link href='mycss.css' rel='stylesheet'>
</head>
<body topmargin='0' leftmargin='0' bgcolor='#E4FCD7'>
<div class='header'>
<div class='logo'></div>
<div class='ttl'>WELCOME TO ABC INDIA PRIVATE LIMTED</div>
</div>


<form method='POST' name='mypage'>
<center>
<div class='login'>
<h2>Forget Password Form</h2>
<table width='100%' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td>Username : <td><input type='text' name='un' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Email Id : <td><input type='text' name='email' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>

<tr><td colspan='2' align='center'><a href='index.php'><- Back</a></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='forg' value='Submit' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
<tr><td colspan='2' align='center'>";

require'db_conn.php';

if(isset($_POST["forg"]))
{

$uname=$_POST["un"];
$email=$_POST["email"];

$q1=mysql_query("select * from admin where uname='$uname'");
$row=mysql_fetch_assoc($q1);
$un=$row["uname"];
$ps=$row["pass"];
$em=$row["email"];

if($un==$uname && $em==$email)
{
 //echo"Your password is : $ps";
 
mail($em,"Heptarise IT Solution : Forget Password"," Dear $uname, \n Your password is $ps . \n Thanks & Regards, \n Heptarise IT Solution","info@heptarise.com");

}
else
{
   echo"<script>alert('invalid username or email');</script>";
}


}


echo"</table>
</div>
</center>
</body>
</html>
";
?>