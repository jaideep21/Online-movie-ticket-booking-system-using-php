<?php
echo"
<html>
<head>
<title>Reset Password Form</title>
</head>
<body topmargin='100'>
<form method='POST' name='login'>
<center>
<h2>Reset Password</h2>
<table border='1' width='500' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td>New Passowrd : <td><input type='password' name='nps' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Confirm Password : <td><input type='password' name='cps' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='res' value='Submit' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
";
require'db_conn.php';

if(isset($_POST["res"]))
{
session_start();
$uname=$_SESSION["un1"];
$nps=$_POST["nps"];  
$cps=$_POST["cps"];  

if($nps==$cps)
{
 $q1=mysql_query("update admin set pass='$nps' where uname='$uname'");
   echo"<script>alert('Change successfully');</script>";
   session_destroy();
     echo"<script>window.location='session_expire.php';</script>";
}
else
{
  echo"<script>alert('Confirm password not match');</script>";
}

}



echo"
</table>
</center>
</body>
</html>
";
?>