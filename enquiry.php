
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
<body bgcolor='gray' topmargin='0' bottommargin='0'>
<form method='POST'>
<center>
<div class='main'>
";
require'mymenu.php';
echo"
<div class='content'>
<table width='700' border='1' cellpadding='5' cellspacing='0'>
<tr><th height='40' bgcolor='E7E5E3' colspan='2'><h3>Enquiry Us :</h3> </th></tr>
<tr><th ><input type='text' name='na' placeholder=' Name' style='width:480px;height:35px;'></th></tr>
<tr><th ><input type='text' name='city' placeholder=' City' style='width:480px;height:35px;'></th></tr>
<tr><th ><input type='email' name='em' placeholder=' Email ' style='width:480px;height:35px;'></th></tr>
<tr><th ><input type='number' name='cno' placeholder=' Contact Number' style='width:480px;height:35px;'></th></tr>
<tr><th ><textarea name='qr' placeholder=' Your query' style='width:480px;height:100px;'></textarea></th></tr>

<tr><th ><input type='submit' name='sub' Value='Send' style='width:90px;height:35px;'></th></tr>

";
require'db_conn.php';
if(isset($_POST["sub"]))
{
  $na=$_POST["na"];
  $em=$_POST["em"];
  $ct=$_POST["city"];
  $mo=$_POST["cno"];
  $qr=$_POST["qr"];

 $q1=mysql_query("insert into enquiry values('$na','$ct','$em','$mo','$qr','')");

  if($q1)
  { echo"<script>alert('Send successfully');</script>";
  }

else
{
  echo"<script>alert('Sorry ! try again');</script>";
}
}
echo"
</table>
</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by Abc Designer</div>
</div>
</center>
</body>
</html>
";
?>