<?php
echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='mycss.css' rel='stylesheet'>
</head>
      <center>
<body background='img/001.jpg' img width='1050' height='1000' topmargin='0' bottommargin='0'>
   <div class='main'>

<div class='header'>

<a href='./index.php'><div class='logo'><center>OTB</center></div></a>
<div class='ttl'><font color='white'>ONLINE TICKET BOOKING SYSTEM</font></div>
</div>
<form method='POST' action='validate_user.php' name='login' onSubmit='return validate()'>
<center>
<div class='login'>
<h2> <b>Sign In</b></h2>  <center>
<table width='100%' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td>User id : <td><input type='text' name='uid' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>Password : <td><input type='password' name='ps' style='width:270px;height:35px;border-radius:10px;background:pink;'></td></tr>
<tr><td>User Type <td><select name='utp' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<option value=''>User Type</option>
<option value='register'>Register user</option>
<option value='admin'>Administration</option>
</select>
<tr><td colspan='2' align='center'><input type='submit' name='login' value='Login' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
</table>

</center>
</div>
</body>
</html>
";
?>