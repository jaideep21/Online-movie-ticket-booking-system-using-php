<?php
require'db_conn.php';
echo"
<html>
<head>
<title>Registartion Form</title>
<script src='reg.js' type='text/javascript'></script>
</head>
<body topmargin='100'>
<form method='POST' action='' name='reg' onSubmit='return validate()'>
<center>
<h2>Registartion Form</h2>
<table border='1' width='700' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td>Contact Person: <td><input type='text' name='cp' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Contact No.: <td><input type='text' name='cno' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Email Id.: <td><input type='text' name='email' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Address: <td><textarea name='adr' placeholder=' Write complete address' style='width:270px;height:80px;border-radius:10px;background:pink;'></textarea></td></tr>

<tr><td>City :<td>
<select name='ct' style='width:200px;height:35px;border-radius:10px;background:pink;'>
<option value=''>Select City</option>
";
 $q1=mysql_query("select * from city");
 while($rows=mysql_fetch_assoc($q1))
   {
   $cname=$rows["cname"];
   echo"<option value='$cname'>$cname</option>";
   }
echo"</select>
</td></tr>

<tr><td>Name of cinemas <td><input type='text' name='nc' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>No. of Sit <td><input type='text' name='ns' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>

<tr><td><td>
<input type='reset' name='res' value='Refresh' style='width:80px;height:35px;border-radius:10px;background:blue;color:white;'>
<input type='submit' name='sub' value='Submit' style='width:80px;height:35px;border-radius:10px;background:red;color:white;'></td></tr>



</table>
</center>
</body>
</html>
";
 if(isset($_POST["sub"]))
 {
   $cp=$_POST["cp"];
   $cno=$_POST["cno"];
   $em=$_POST["email"];
   $adr=$_POST["adr"];
   $ct=$_POST["ct"];
   $nc=$_POST["nc"];
   $ns=$_POST["ns"];

   $ps=rand(10000,99999);

   $q1=mysql_query("insert into register values('$cp','$cno','$em','$ps','$adr','$ct','$nc','$ns','$sts','')");
   if($q1)
  {
    echo"<script>alert('Submitted successfully');</script>";
  }

else
{
  echo"<script>alert('Sorry ! try again');</script>";
}

 }

?>