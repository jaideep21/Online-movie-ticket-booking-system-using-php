
  <script src="jquery-1.11.js"></script>
   <script language ="JavaScript" type="text/javascript">
$(document).ready(function () {
    $(".num").click(function () {
              $(this).css('background-color', 'red');
              $(this).css('color', 'white');

        var sitd = document.getElementById("dis").value;
        var bid = this.id;

        var x=sitd+""+bid+",";
        document.getElementById("dis").value=x;

    });

});

</script>

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

echo"
<div class='content'>
<center>
<br>
<table width='600' border='1' cellpadding='5' cellspacing='0'>
<tr><th height='40' bgcolor=red colspan='2'>Movie Details </th></tr>
<tr><th >Movie Name :<td> $mn </th></tr>
<tr><th>Price :<td> $pr</th></tr>
<tr><th >Date:<td> $dt </th></tr>
<tr><th >Timing :<td> $tm </th></tr>
<tr><th >Sit Details :<td> $nbsit </th></tr>
<tr><th height='40' bgcolor=red colspan='2'>Personel Details </th></tr>
<tr><th >Name:<td> $na </th></tr>
<tr><th>Email :<td> $email</th></tr>
<tr><th >Contact No.<td> $cno </th></tr>
<tr><th  colspan='2'>

<center>
<table><tr><td>
<br><input type='radio' name='mp' value='Net Banking'> Net Banking
<input type='radio' name='mp' value='Cash Pay'> Cash Pay

<br><input type='submit' name='sub' value='Submit' style='width:120px;height:32px;margin:10px;background:#0057C2;color:white;'>

 </td></tr>
 </table> 
 ";


 require'db_conn.php';

if(isset($_POST["sub"]))
{
$mp=$_POST["mp"]; 
if($mp=="Net Banking")
{
echo"<script>window.alert('Sorry this mode is not enable');</script>";
}
else
{
echo"<script>window.location='booknow_fill_final_confirm.php?uid=$uid&nbsit=$nbsit&mn=$mn&pr=$pr&dt=$dt&tm=$tm&na=$na&cno=$cno&email=$email&mp=$mp';</script>";
}

}
echo"
</th></tr>
</table>

</center>
</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by JAIDEEP SINGH</div>


</center>
</body>
</html>
";
?>