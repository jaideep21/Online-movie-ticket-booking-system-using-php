

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
require'db_conn.php';
require'mymenu.php';
$uid=$_GET["uid"];
$mn=$_GET["mn"];
$pr=$_GET["pr"];
$dt=$_GET["dt"];
$tm=$_GET["tm"];
$ns=$_GET["ns"];
echo"
<div class='content'>
<center>
<br>
<table width='800'height='400' border='1' cellpadding='5' cellspacing='0'>
<tr><th height='40' bgcolor=red colspan='2'>Movie Details </th></tr>
<tr><th >Movie Name :<td> $mn </th></tr>
<tr><th>Price :<td> $pr</th></tr>
<tr><th >Date:<td> $dt </th></tr>
<tr><th >Timing :<td> $tm </th></tr>
<tr><th  colspan='2'>
";
$no=$ns/2;
$count=0;
echo"<center><table>
<tr><td width='270'>";
for($i=1;$i<=$no;$i++)
{
    $count++;


   $q1=mysql_query("select * from booking where uid='$uid' and dt='$dt'");
     
     while($rows=mysql_fetch_assoc($q1))
   {
   $sit=$rows["sit"];
   for($k=0;$k<strlen($sit);$k++)
{
  if($sit[$k]==",")
  {
    $sno="";

  }
  else
  {
    $sno .=$sit[$k];
    if($sno==$count && $sit[$k+1]==",")
    {
    break;
    }

  }
}
       if($sno==$count)
    {
      break;
    }
   }
        if($sno==$count)
    {
        echo"<button  disabled style='width:32px;height:32px;color:black;background:gray;text-align:center;line-height:32px;position:relative;float:left;margin:5px;border-radius:5px;'>$count</button>";
    }
    else
    {
        echo"<button  id='$count' class='num' value='$count' onClick='this.disabled=true' style='width:32px;height:32px;background:#92CB0A;text-align:center;line-height:32px;position:relative;float:left;margin:5px;border-radius:5px;'>$count</button>";
    }
}
echo"<td width='50'>
<td width='270'> ";
for($i=1;$i<=$no;$i++)
{
    $count++;


   $q1=mysql_query("select * from booking where uid='$uid' and dt='$dt'");
     while($rows=mysql_fetch_assoc($q1))
   {
   $sit=$rows["sit"];
   for($k=0;$k<strlen($sit);$k++)
{
  if($sit[$k]==",")
  {
    $sno="";
  }
  else
  {
    $sno .=$sit[$k];
    if($sno==$count)
    {
    break;
    }

  }
}
       if($sno==$count)
    {
      break;
    }
   }
        if($sno==$count)
    {
        echo"<button  disabled style='width:32px;height:32px;color:black;background:gray;text-align:center;line-height:32px;position:relative;float:left;margin:5px;border-radius:5px;'>$count</button>";
    }
    else
    {
        echo"<button  id='$count' class='num' value='$count' onClick='this.disabled=true' style='width:32px;height:32px;background:#92CB0A;text-align:center;line-height:32px;position:relative;float:left;margin:5px;border-radius:5px;'>$count</button>";
    }
}
echo"
<tr><td colspan='3'>
<input type='hidden' id='dis' name='dis'>
<button onClick='window.location.reload()' style='width:80px;height:32px;'>Reset</button>
<input type='submit' name='book' value='Book' style='width:80px;height:32px;background:#0057C2;COLOR:white;'>

 </td></tr></table>

</th></tr>
</table>

";


if(isset($_POST["book"]))
{
$nbsit=$_POST["dis"];
echo"<script>window.location='booknow_fill.php?uid=$uid&nbsit=$nbsit&mn=$mn&pr=$pr&dt=$dt&tm=$tm';</script>";

}
echo"
</center>
</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by Abc Designer</div>
</div>
</center>
</body>
</html>
";

?>