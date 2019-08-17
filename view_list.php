<?php
require'db_conn.php';
$city=$_GET["city"];
$cname=$_GET["cn"];
$uid=$_GET["uid"];
$ns=$_GET["ns"];

echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='style.css' rel='stylesheet'>
</head>
<body background='img/001.jpg' img width='1050' height='1000' topmargin='0' bottommargin='0'>
<FORM method='POST'>
<center>
<div class='main'>
";
require'mymenu.php';

echo"<div class='content'>
<h4>City : $city &nbsp <a href='index.php'><-Back</a></h4>";
  $q2=mysql_query("select*from showmovie where uid='$uid'");
  echo"<ul>";
  $i=0;
while($rows=mysql_fetch_assoc($q2))
{
  $dt=$rows['dt'];
   $mid=$rows['mid'];
    $pr=$rows['price'];
     $d1=$rows['d1'];
         $d2=$rows['d2'];
              $d3=$rows['d3'];
                   $d4=$rows['d4'];
 // get movie name by above id
  $q0=mysql_query("select * from movie where id='$mid'");
  while($rows=mysql_fetch_assoc($q0))
   {
     $mname=$rows["mname"];
      $img=$rows["img"];
   }

   echo"<div style='margin:10px;float:left;width:680px;position:relative;height:200px;border:1px solid #D3D3D3;border-radius:5px;'>
   <table width='100%'>
  <tr><td><h4>$mname <input type='hidden' name='mn[]' value='$mname'></h4>
    Price : $pr <input type='hidden' name='price[]' value='$pr'>
    <br>Date : $dt <input type='hidden' name='dt[]' value='$dt'><br>
   Timing : <select name='tm[]'>
   <option value='$d1'>$d1</option>
   <option value='$d2'>$d2</option>
   <option value='$d3'>$d3</option>
   <option value='$d4'>$d4</option>
   </select>
   <br>
   <br>
   <input type='submit' name='book$i' value='Book Now' style='width:100px;height:35px;background:blue;color:white;'>
   <td><img src='register/upload/$img'></td></tr>
   </table>
   </div>";

  if(isset($_POST["book$i"]))
{
$mn=$_POST["mn"][$i];
$pr=$_POST["price"][$i];
$dt=$_POST["dt"][$i];
$tm=$_POST["tm"][$i];
echo"<script>window.location='booknow.php?uid=$uid&ns=$ns&mn=$mn&pr=$pr&dt=$dt&tm=$tm';</script>";
}
$i++;
}
echo"</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by Abc Designer</div>

</div>
</center>
</body>
</html>
";
?>